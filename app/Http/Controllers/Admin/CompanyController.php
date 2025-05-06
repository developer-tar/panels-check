<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyCreateRequest;
use App\Models\Company;
use App\Models\Domain;
use Illuminate\Http\Request;

class CompanyController extends Controller {
    public function index() {

        return view('admin.company.index');
    }

    public function create() {
        $domains = Domain::where('status', config('constants.status.active'))->get();

        return view('admin.company.create')->with('domains', $domains);
    }

    public function store(CompanyCreateRequest $request) {

        try {
            dd($request->all());
            $data = $request->except('csrf_token');
            Company::create($data);

            return to_route('admin.company.index')->with('success', 'company created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error occurred while creating company');
        }
    }
    
}
