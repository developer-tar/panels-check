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
            $table->string('personal_loan')->nullable();
            $table->string('auto_loan')->nullable();
            $table->string('credit_card')->nullable();
            $table->string('overdraft')->nullable();
            $table->string('educational_loan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['personal_loan','auto_loan', 'credit_card', 'overdraft', 'educational_loan']);
        });
    }
};
