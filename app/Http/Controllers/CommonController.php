<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile\Company as RequestsCompany;
use App\Http\Requests\Profile\PersonalRequest;
use App\ImageUploadTrait;
use App\Models\Company;
use App\Models\Media;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CommonController extends Controller
{

    use ImageUploadTrait;

    public function getCompanyData($id)
    {
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
    public function companyProfile(RequestsCompany $request)
    {
        try {

            DB::beginTransaction();
            if ($request->company_id == 'other') {
                $company = Company::create($request->except('path', '_token'));
            } elseif (isset($request->notAnyCompanyYet)) {

                $company = Company::create($request->except('_token', 'role', 'notAnyCompanyYet'));

            } else {

                $company = Company::where('email', $request->email)->first();
            }

            if (isset($request->role) && $company) {

                User::where('id', Auth::guard(strtolower($request->role))->user()->id)
                    ->update(['company_id' => $company->id]);
            }

            DB::commit();
            return back()->with('success', config('constants.company_success_message'));
        } catch (Exception $e) {
            DB::rollBack();
            \Log::info('error_message company create', ['message' =>$e->getMessage()]);
            return redirect()->back()->with('error', config('constants.wrong_message'));
        }
    }
    public function personalProfile(PersonalRequest $request)
    {

        try {
            DB::beginTransaction();
            $data = $request->except('_token', 'path', 'role');
            $data['age'] = $request->user_age;
            $data['email'] = $request->user_email;
            $data['phone'] = $request->user_phone;

            unset($data['user_age'], $data['user_email'], $data['user_phone']);

            $user = null;

            if (isset($request->role)) {
                
                $user = User::find(Auth::guard(strtolower($request->role))->id());
                
                $user->update($data);
            }
            
            // Handle file upload
            if ($request->hasFile('path') && $user) {
                $file = $request->file('path');
                $extension = $file->getClientOriginalExtension();
                $imagePath = $this->storeImage($file, 'personal_profile');
                $storagePath = 'storage/' . $imagePath;

                Media::updateOrCreate(
                    [
                        'model_name' => User::class,
                        'model_id' => $user->id,
                        'folder_name' => 'personal_profile',
                    ],
                    [
                        'path' => $storagePath,
                        'type' => getFileType($extension),
                        'folder_name' => 'personal_profile',
                    ]
                );
            }
            if ($request->filled('removeImage')) {
                $user->media()->limit(1)->delete();
            }
            DB::commit();
            return back()->with('success', config('constants.profile_update'));
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e->getMessage());
            return back()->with('error', config('constants.wrong_message'));
        }
    }
}
