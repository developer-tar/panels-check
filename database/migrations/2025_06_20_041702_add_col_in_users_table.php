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
            $table->string('doc_type')->comment('1=> aadhaar, 2=>pan, 3=>passport, 4=> license')->nullable()->after('kyc_status');
            $table->string('doc_number')->nullable()->after('doc_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['doc_type','doc_number']);
        });
    }
};
