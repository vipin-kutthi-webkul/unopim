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
            // Explicitly convert the client_id column to UUID
            DB::statement('ALTER TABLE oauth_access_tokens ALTER COLUMN client_id TYPE UUID USING client_id::text::uuid;');
        } else {
            // Handle for MySQL (if needed)
            Schema::table('oauth_access_tokens', function (Blueprint $table) {
                $table->uuid('client_id')->change();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('oauth_access_tokens', function (Blueprint $table) {
            //
        });
    }
};
