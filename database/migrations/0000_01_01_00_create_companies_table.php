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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('type')->comment('1 =>LLC , 2=>PVTLTD, 3 => Coorporation')->nullable();
            $table->string('registration_number');
            $table->string('website_url');
            $table->foreignId('domain_id')->nullable()->index();
            $table->tinyInteger('status')->default(1)->nullable()->comment('1= active, 2 = non-active');
            $table->text('description')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
