<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::table('users', function (Blueprint $table) {
            $table->tinyInteger('kyc_status')->default(config('constants.user_approval_status.pending'))->nullable()->comment('1= pending, 2 = approved 3= rejected');
        });
        User::where('id', 1)->update(['status' => config('constants.user_approval_status.approved')]);
        User::with(['roles:id,name'])
            ->whereHas('roles', function ($query) {
                $query->whereNot('name', config('constants.roles_inverse.employee'));
            })
            ->update(['kyc_status' => config('constants.user_approval_status.approved')]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('kyc_status');
        });
    }
};
