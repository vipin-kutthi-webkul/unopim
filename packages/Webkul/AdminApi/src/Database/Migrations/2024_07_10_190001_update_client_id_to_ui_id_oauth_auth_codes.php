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
        if (DB::getDriverName() === 'pgsql') {
            // Step 1: Remove any existing default for the column
            DB::statement('ALTER TABLE oauth_auth_codes ALTER COLUMN client_id DROP DEFAULT;');

            // Step 2: Alter the column type with explicit conversion
            DB::statement('ALTER TABLE oauth_auth_codes ALTER COLUMN client_id TYPE UUID USING client_id::text::uuid;');
        } else {
            Schema::table('oauth_auth_codes', function (Blueprint $table) {
                $table->uuid('client_id')->change();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('oauth_auth_codes', function (Blueprint $table) {
            //
        });
    }
};
