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
        Schema::table('users', function (Blueprint $table) {
            $table->string('total_ead')->nullable();
            $table->string('dbr_calculation')->nullable();
            $table->string('credit_limit')->nullable();
            $table->string('avaiable_limit')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['total_ead','dbr_calculation', 'credit_limit', 'avaiable_limit']);
        });
    }
};
