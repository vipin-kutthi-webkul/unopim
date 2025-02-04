<?php

namespace Webkul\Admin\DataGrids\Catalog;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Webkul\Core\Models\Locale;
use Webkul\DataGrid\DataGrid;

class CategoryDataGrid extends DataGrid
{
    /**
     * Index.
     *
     * @var string
     */
    protected $primaryColumn = 'category_id';

    /**
     * Default sort column of datagrid.
     *
     * @var ?string
     */
    protected $sortColumn = 'name';

    /**
     * Default sort order of datagrid.
     *
     * @var string
     */
    protected $sortOrder = 'asc';

    /**
     * Contains the keys for which extra filters to show.
     *
     * @var string[]
     */
    protected $extraFilters = [
        'locales',
    ];

    /**
     * Prepare query builder.
     *
     * @return Builder
     */
    public function prepareQueryBuilder()
    {
        if (core()->getRequestedLocaleCode() === 'all') {
            $whereInLocales = Locale::query()->pluck('code')->toArray();
        } else {
            $whereInLocales = [core()->getRequestedLocaleCode()];
        }

        $tablePrefix = DB::getTablePrefix();

        $subQuery = $this->getSubQuery($whereInLocales, $tablePrefix);

        $queryBuilder = DB::table('categories as cat')
            ->select(
                'cat.id as category_id',
                'cat.code as code',
                DB::raw('CategoryNameTable.name as name'),
            )
            ->leftJoin(DB::raw("({$subQuery->toSql()}) as CategoryNameTable"), function ($leftJoin) {
                $leftJoin->on('cat.id', '=', DB::raw('CategoryNameTable.id'));
            })
            ->groupBy('cat.id', 'cat.code', DB::raw('CategoryNameTable.name'));

        $this->addFilter('name', DB::raw('CategoryNameTable.name'));

        return $queryBuilder;
    }

    /**
     * Add columns.
     *
     * @return void
     */
    public function prepareColumns()
    {
        $this->addColumn([
            'index'      => 'name',
            'label'      => trans('admin::app.catalog.categories.index.datagrid.name'),
            'type'       => 'string',
            'searchable' => true,
            'filterable' => true,
            'sortable'   => true,
        ]);

        $this->addColumn([
            'index'      => 'code',
            'label'      => trans('admin::app.catalog.categories.index.datagrid.code'),
            'type'       => 'string',
            'searchable' => true,
            'filterable' => true,
            'sortable'   => true,
        ]);
    }

    /**
     * Prepare actions.
     *
     * @return void
     */
    public function prepareActions()
    {
        if (bouncer()->hasPermission('catalog.categories.edit')) {
            $this->addAction([
                'icon'   => 'icon-edit',
                'index'  => 'edit',
                'title'  => trans('admin::app.catalog.categories.index.datagrid.edit'),
                'method' => 'GET',
                'url'    => function ($row) {
                    return route('admin.catalog.categories.edit', $row->category_id);
                },
            ]);
        }

        if (bouncer()->hasPermission('catalog.categories.delete')) {
            $this->addAction([
                'icon'   => 'icon-delete',
                'index'  => 'delete',
                'title'  => trans('admin::app.catalog.categories.index.datagrid.delete'),
                'method' => 'DELETE',
                'url'    => function ($row) {
                    return route('admin.catalog.categories.delete', $row->category_id);
                },
            ]);
        }
    }

    /**
     * Add Datagrid Mass Actions
     *
     * @return void
     */
    public function prepareMassActions()
    {
        if (bouncer()->hasPermission('catalog.categories.delete')) {
            $this->addMassAction([
                'title'   => trans('admin::app.catalog.categories.index.datagrid.delete'),
                'method'  => 'POST',
                'url'     => route('admin.catalog.categories.mass_delete'),
                'options' => ['actionType' => 'delete'],
            ]);
        }
    }

    /**
     * Creates a query to fetch the parent names of the categories
     */
    private function getSubQuery(array $locale, string $tablePrefix): Builder
    {
        // Ensure the locales are properly escaped and quoted in PostgreSQL
        $localeString = implode("', '", $locale);  // Multiple locales handled
        $jsonPath = "'locale_specific'->'$localeString'->>'name'";

        // Check if the database is PostgreSQL or MySQL
        $jsonExtractFunction = DB::getPdo()->getAttribute(\PDO::ATTR_DRIVER_NAME) === 'pgsql'
            ? "additional_data->$jsonPath"
            : "JSON_EXTRACT(additional_data, '$.locale_specific.$localeString.name')";

        return DB::table(DB::raw("(WITH RECURSIVE tree_view AS (
        SELECT id,
            parent_id,
            (CASE WHEN $jsonExtractFunction IS NOT NULL THEN REPLACE($jsonExtractFunction, '\"', '') ELSE CONCAT('[', code, ']') END) as name
        FROM ".$tablePrefix."categories
        WHERE parent_id IS NULL
        UNION ALL

        SELECT parent.id,
            parent.parent_id,
            CONCAT(tree_view.name, ' / ', (CASE WHEN $jsonExtractFunction IS NOT NULL THEN REPLACE($jsonExtractFunction, '\"', '') ELSE CONCAT('[', code, ']') END)) AS name
        FROM ".$tablePrefix.'categories parent
        JOIN tree_view ON parent.parent_id = tree_view.id
    )
    SELECT id, parent_id, name
    FROM tree_view
    ) as CategoryNameTable'));
    }
}
