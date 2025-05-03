<?php

namespace App;


use App\Models\User;


use Illuminate\Http\Request;
trait SignUpUserTrait
{
    private function signUpUser(Request $request, string $redirectRoute, $role)
    {
        try {
            $user = User::create($request->except('_token'));
            if ($user) {
                return redirect()->route($redirectRoute)->with('success', 'Sign Up Successfully');
            }
            return back()->with('error', 'Either email or password is incorrect');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
