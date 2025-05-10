<?php

namespace App;


use App\Models\User;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
trait SignUpUserTrait
{
    private function signUpUser(Request $request, string $redirectRoute, $role)
    {
        try {
            DB::beginTransaction();
            $user = User::create($request->except('_token'));
            if ($user) {        
                $user->roles()->attach(config('constants.roles.'.strtoupper($role)), ['created_at' => now(),'updated_at' => now()]);
            }
            DB::commit();
            return redirect()->route($redirectRoute)->with('success', 'Sign Up Successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
