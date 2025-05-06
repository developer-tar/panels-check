<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    public function getCompanyData($id)
{
    $company = Company::findOrFail($id);

    return response()->json([
        'id' => $company->id,
        'email' => $company?->email,
        'phone' => $company?->phone,
        'website_url' => $company?->website_url,
        'description' => $company?->description,
        'registration_number' =>$company?->registration_number,
        'type' => $company?->type,
        // Add other fields as needed
    ]);
}
}
