<?php

namespace App\Services;

use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use PDO;

class CompanyService {
    public function getCompaniesWithMedia() {

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
    public function getCompanies($role = null) {
        $company = Company::with(relations: ['domain:id,name'])->where('status', config('constants.status.active'));

        if (isset($role) && $role == 'hr') {
            $company = $company->where('id', Auth::guard('hr')->user()->company_id)->get();
        } else {
            $company = $company->get();
        }

        return $company->transform(function ($company) {
            $domainName = '';
            if ($company->domain?->name) {
                $domainName  = '(' . $company->domain?->name . ')';
            }
            return [
                'id' => $company->id,
                'name' => $company->company_name . $domainName,
            ];
        });
    }
}
