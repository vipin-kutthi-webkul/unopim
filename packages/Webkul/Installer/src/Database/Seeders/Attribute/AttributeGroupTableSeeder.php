<?php

namespace Webkul\Installer\Database\Seeders\Attribute;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeGroupTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @param  array  $parameters
     * @return void
     */
    public function run($parameters = [])
    {
        DB::table('attribute_groups')->delete();

        DB::table('attribute_group_translations')->delete();

        $defaultLocale = $parameters['default_locale'] ?? config('app.locale');

        DB::table('attribute_groups')->insert([
            [
                'id'       => 1,
                'code'     => 'general',
            ], [
                'id'       => 2,
                'code'     => 'description',
            ], [
                'id'       => 3,
                'code'     => 'meta_description',
            ], [
                'id'       => 4,
                'code'     => 'price',
            ], [
                'id'       => 5,
                'code'     => 'technical',
            ],
        ]);
        if (DB::getPdo()->getAttribute(\PDO::ATTR_DRIVER_NAME) === 'pgsql') {
            // Get the maximum id from the table
            $maxId = DB::select('SELECT MAX(id) AS max_id FROM attribute_groups');
            $maxIdValue = $maxId[0]->max_id;

            // Set the sequence to start from the max id
            DB::statement('
        SELECT setval(pg_get_serial_sequence(\'attribute_groups\', \'id\'), ?) 
    ', [$maxIdValue]);
        }

        $locales = $parameters['allowed_locales'] ?? [$defaultLocale];

        foreach ($locales as $locale) {
            DB::table('attribute_group_translations')->insert([
                [
                    'locale'             => $locale,
                    'name'               => trans('installer::app.seeders.attribute.attribute-groups.general', [], $locale),
                    'attribute_group_id' => 1,
                ], [
                    'locale'             => $locale,
                    'name'               => trans('installer::app.seeders.attribute.attribute-groups.description', [], $locale),
                    'attribute_group_id' => 2,
                ], [
                    'locale'             => $locale,
                    'name'               => trans('installer::app.seeders.attribute.attribute-groups.meta-description', [], $locale),
                    'attribute_group_id' => 3,
                ], [
                    'locale'             => $locale,
                    'name'               => trans('installer::app.seeders.attribute.attribute-groups.price', [], $locale),
                    'attribute_group_id' => 4,
                ], [
                    'locale'             => $locale,
                    'name'               => trans('installer::app.seeders.attribute.attribute-groups.technical', [], $locale),
                    'attribute_group_id' => 5,
                ],
            ]);
        }
    }
}
