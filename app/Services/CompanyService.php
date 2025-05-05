<?php

namespace App\Services;

use App\Models\Company;
use Illuminate\Support\Facades\Auth;

class CompanyService
{
    public function getCompaniesWithMedia()
    {

        return Company::with(['media:id,model_id,path'])
            ->paginate(20)
            ->through(function ($company) {
                return [
                    'name' =>$company->company_name,
                    'email' => $company->email,
                    'registration_number' => $company->registration_number,
                    'website_url' => $company->website_url,
                    'media' => $company->media->first()?->path,
                ];
            });

    }
    public function getCompanies(){
        $company = Company::with(relations: ['domain:id,name']);
        
        if(Auth::guard(name: 'hr')->check()){
            $company = $company->where('id',Auth::guard('hr')->user()->company_id)->get();
        }else{
            $company = $company->get();
        }
        
        return $company->transform(function($company){
            return [
                'id' => $company->id,
                'name' =>$company->company_name.'('.$company->domain->name.')',
            ];
        });
    }
}
