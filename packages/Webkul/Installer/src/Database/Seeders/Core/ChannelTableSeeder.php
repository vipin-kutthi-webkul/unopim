<?php

namespace Webkul\Installer\Database\Seeders\Core;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChannelTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @param  array  $parameters
     * @return void
     */
    public function run($parameters = [])
    {
        DB::table('channels')->delete();

        DB::table('channel_translations')->delete();

        DB::table('channel_currencies')->delete();

        DB::table('channel_locales')->delete();

        DB::table('channels')->insert([
            [
                'id'                => 1,
                'code'              => 'default',
                'root_category_id'  => 1,
                'created_at'        => now(),
                'updated_at'        => now(),
            ],
        ]);

        if (DB::getPdo()->getAttribute(\PDO::ATTR_DRIVER_NAME) === 'pgsql') {
            // Get the maximum id from the table
            $maxId = DB::select('SELECT MAX(id) AS max_id FROM channels');
            $maxIdValue = $maxId[0]->max_id;

            // Set the sequence to start from the max id
            DB::statement('
        SELECT setval(pg_get_serial_sequence(\'channels\', \'id\'), ?) 
    ', [$maxIdValue]);
        }

        $defaultLocale = $parameters['default_locale'] ?? config('app.locale');

        $locales = $parameters['allowed_locales'] ?? [$defaultLocale];

        foreach ($locales as $locale) {
            DB::table('channel_translations')->insert([
                [
                    'channel_id' => 1,
                    'locale'     => $locale,
                    'name'       => trans('installer::app.seeders.core.channels.name', [], $locale),
                ],
            ]);
        }

        $currencies = DB::table('currencies')->where('status', 1)->get();

        foreach ($currencies as $currency) {
            DB::table('channel_currencies')->insert([
                [
                    'channel_id'  => 1,
                    'currency_id' => $currency->id,
                ],
            ]);
        }

        $locales = DB::table('locales')->where('status', 1)->get();

        foreach ($locales as $locale) {
            DB::table('channel_locales')->insert([
                [
                    'channel_id' => 1,
                    'locale_id'  => $locale->id,
                ],
            ]);
        }
    }
}
