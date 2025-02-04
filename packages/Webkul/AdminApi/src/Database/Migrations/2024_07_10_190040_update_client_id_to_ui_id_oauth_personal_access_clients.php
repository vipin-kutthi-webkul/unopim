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
            // Explicitly cast the client_id column from numeric to UUID
            DB::statement('ALTER TABLE oauth_personal_access_clients ALTER COLUMN client_id TYPE UUID USING client_id::text::uuid;');
        } else {
            // For other databases like MySQL
            Schema::table('oauth_personal_access_clients', function (Blueprint $table) {
                $table->uuid('client_id')->change();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('oauth_personal_access_clients', function (Blueprint $table) {
            //
        });
    }
};
