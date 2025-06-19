<?php

namespace App\Services;

use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use PDO;

class CompanyService
{
    public function getCompaniesWithMedia()
    {

        return Company::with(['media:id,model_id,path'])
            ->paginate(20)
            ->through(function ($company) {
                return [
                    'name' => $company->company_name,
                    'email' => $company->email,
                    'registration_number' => $company->registration_number,
                    'website_url' => $company->website_url,
                    'media' => $company->media->first()?->path,
                ];
            });
    }
    public function getCompanies($role = null)
    {

        $company = Company::with(['domain:id,name'])->where('status', config('constants.status.active'));

        if (isset($role)) {
            $company = $company->where('id', Auth::guard($role)->user()->company_id)->get();
        } else {
            $company = $company->get();
        }


        return $company->transform(function ($company) use ($role) {
            // Prepare domain name for display
            $domainName = $company->domain?->name ? "({$company->domain->name})" : '';

            // If role is vendor and domain exists, return domain info
            if ($role === 'vendor') {
                if ($company->domain) {
                    return [
                        'id' => $company->domain->id,
                        'name' => $company->domain->name,
                    ];
                }
                return 'no record found';

            }
            

            // Otherwise return the company info
            return [
                'id' => $company->id,
                'name' => $company->company_name . ' ' . $domainName,
            ];
        });

    }
}
