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
        Schema::table('apreciations', function (Blueprint $table) {
            $table->foreignId('client_id')->constrained('users');
            $table->foreignId('chauffeur_id')->constrained('chauffeurs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('apreciations', function (Blueprint $table) {
            //
        });
    }
};