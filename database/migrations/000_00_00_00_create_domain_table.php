<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Domain;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('domains', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description')->nullable();
            $table->tinyInteger('status')->default(1)->nullable()->comment('1= active, 2 = non-active');
            $table->softDeletes();
            $table->timestamps();
        });
        

        $domains = [
            [
                'name' => 'Healthcare',
                'description' => 'Services and products related to medical care, health insurance, and wellness.',
            ],
            [
                'name' => 'Home Loan',
                'description' => 'Financial services for providing loans to purchase or renovate homes.',
            ],
            [
                'name' => 'Education Loan',
                'description' => 'Loan services tailored to fund higher education and student expenses.',
            ],
            [
                'name' => 'Travel Loan',
                'description' => 'Loan options designed for personal or business travel expenses.',
            ],
            [
                'name' => 'Insurance',
                'description' => 'Coverage plans and policies for health, life, vehicle, and property protection.',
            ],
            [
                'name' => 'Investment',
                'description' => 'Services related to stocks, bonds, mutual funds, and wealth management.',
            ],
            [
                'name' => 'Credit Card',
                'description' => 'Various credit card offerings and related financial products.',
            ],
            [
                'name' => 'Loan',
                'description' => 'General loan products including personal, business, and secured loans.',
            ],
            [
                'name' => 'Banking',
                'description' => 'Traditional and digital banking services including savings and checking accounts.',
            ],
        ];
        
        foreach ($domains as $domain) {
            Domain::create($domain);
        }
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domains');
    }
};
