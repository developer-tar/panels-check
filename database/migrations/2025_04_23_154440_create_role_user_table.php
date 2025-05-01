<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index();
            $table->foreignId('role_id')->index();
            $table->softDeletes();
            $table->timestamps();
        });
        $user = User::find(1);
        $user->roles()->attach(1, ['created_at' => now(),'updated_at' => now()]);
        $user = User::find(2);
        $user->roles()->attach(2, ['created_at' => now(),'updated_at' => now()]);
        $user = User::find(3);
        $user->roles()->attach(3, ['created_at' => now(),'updated_at' => now()]);
        $user = User::find(4);
        $user->roles()->attach(4, ['created_at' => now(),'updated_at' => now()]);
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_user');
    }
};
