<?php

namespace App\Services;

use App\Models\Company;

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
}
