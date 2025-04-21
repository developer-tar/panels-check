<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller {
    public function index(){
        return view('vendor.company.index');
    }

    public function create(){
        return view('vendor.company.create');
    }

    public function edit($id){
        return view('vendor.company.edit');
    }    
}
