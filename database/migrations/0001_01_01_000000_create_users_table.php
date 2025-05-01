<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->nullable()->index();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('age')->nullable();
            $table->string('experience_in_years')->nullable();
            $table->string('experience_in_month')->nullable();
            $table->string('current_salary_per_annum')->nullable();
            $table->string('country_id')->nullable();
            $table->string('gender')->nullable();
            $table->string('work_experience_description')->nullable();
            $table->string('location')->nullable();
            $table->string('primary_address')->nullable();
            $table->string('zip_code')->nullable();
            $table->tinyInteger('privacy')->default(1)->nullable()->comment('1= anyone, 2 = friends 3= friends of friends, 4= no one');
            $table->tinyInteger('status')->default(1)->nullable()->comment('1= pending, 2 = approved 3= rejected');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();

        });
        
        User::create(['name' => 'admin','email' => 'admin@yopmail.com','password'=> bcrypt('admin123')]);
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
