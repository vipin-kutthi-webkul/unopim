<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $databaseType = DB::getDriverName(); // Detect database type

        if ($databaseType === 'pgsql') {
            DB::statement('ALTER TABLE oauth_clients ALTER COLUMN id DROP DEFAULT;'); // Remove existing default
            DB::statement('ALTER TABLE oauth_clients ALTER COLUMN id TYPE UUID USING id::text::uuid;'); // Change type
            DB::statement('ALTER TABLE oauth_clients ALTER COLUMN id SET DEFAULT gen_random_uuid();'); // Set new default
        } else {
            Schema::table('oauth_clients', function (Blueprint $table) {
                $table->uuid('id')->change();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('oauth_clients', function (Blueprint $table) {
            //
        });
    }
};
