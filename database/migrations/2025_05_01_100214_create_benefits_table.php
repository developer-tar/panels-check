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
        Schema::create('benefits', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index();
            $table->foreignId('company_id')->index();
            $table->foreignId('domain_id')->index();
            $table->string('coverage_limit');
            $table->string('start_period');
            $table->string('end_period');
            $table->text('eliegibility_rules');
            $table->boolean('automatice_reminder')->default(0)->comment('1=yes, 0 = no');
            $table->text('customization_notes')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1= pending, 2 = approved 3= rejected');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('benefit');
    }
};
