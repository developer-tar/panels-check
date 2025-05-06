<?php

use App\Models\Domain;
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
        Schema::create('domains', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description')->nullable();
            $table->tinyInteger('status')->default(1)->nullable()->comment('1= active, 2 = non-active');
            $table->softDeletes();
            $table->timestamps();
        });
        $domains = [
            'Healthcare'     => 'Services and products related to medical and wellness industries.',
            'Home Loan'      => 'Financial products to help individuals purchase or renovate homes.',
            'Travel Loan'    => 'Loans offered for covering travel and vacation expenses.',
            'Education Loan' => 'Funding solutions for higher education and student needs.',
            'Insurance'      => 'Coverage services for health, life, vehicles, and properties.',
            'Investment'     => 'Tools and platforms to grow wealth through stocks, bonds, etc.',
            'Credit Card'    => 'Plastic or digital cards offering credit lines for purchases.',
            'Loan'           => 'General borrowing products across multiple categories.',
            'Banking'        => 'Core financial services like savings, checking, and transactions.',
        ];
        
        foreach ($domains as $name => $description) {
            Domain::create([
                'name' => $name,
                'description' => $description,
            ]);
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
