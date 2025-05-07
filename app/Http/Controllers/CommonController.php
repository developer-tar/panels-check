<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile\Company as RequestsCompany;
use App\Http\Requests\Profile\Personal;
use App\ImageUploadTrait;
use App\Models\Company;
use App\Models\Media;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CommonController extends Controller {
    
    use ImageUploadTrait;

    public function getCompanyData($id) {
        $company = Company::findOrFail($id);

        return response()->json([
            'id' => $company->id,
            'email' => $company?->email,
            'phone' => $company?->phone,
            'website_url' => $company?->website_url,
            'description' => $company?->description,
            'registration_number' => $company?->registration_number,
            'type' => $company?->type,
            // Add other fields as needed
        ]);
    }
    public function companyProfile(RequestsCompany  $request) {
        try {
            DB::beginTransaction();
            if ($request->company_id == 'other') {
                $company = Company::create($request->except('path', '_token'));
            } else {
                $company = Company::where('email', $request->email)->first();
            }
            if ($request->role == config('constants.roles_inverse.hr') && $company) {

                User::where('id', Auth::guard('hr')->user()->id)
                    ->update(['company_id' => $company->id]);
            }

            DB::commit();
            return back()->with('success', 'Company Profile Created');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
    public function personalProfile(Personal $request)
    {
        try {
            DB::beginTransaction();
    
            $data = $request->except('_token', 'path', 'role');
            $data['age'] = $request->user_age;
            $data['email'] = $request->user_email;
            $data['phone'] = $request->user_phone;
    
            $user = null;
    
            if ($request->role == config('constants.roles_inverse.hr')) {
                $user = User::find(Auth::guard('hr')->id());
                $user->update($data);
            }
    
            // Handle file upload
            if ($request->hasFile('path') && $user) {
                $imagePath = $this->storeImage($request->file('path'), 'companies');
                $storagePath = 'storage/' . $imagePath;
    
                Media::updateOrCreate(
                    [
                        'model_name' => User::class,
                        'model_id' => $user->id
                    ],
                    [
                        'path' => $storagePath,
                        'type' => config('constants.path.image'),
                    ]
                );
            }
    
            DB::commit();
            return back()->with('success', 'Profile Updated Successfully');
        } catch (\Exception $e) {
            DB::rollBack();
            \Log::error('Profile Update Error: ' . $e->getMessage());
            return back()->with('error', 'Something went wrong');
        }
    }
    
}
