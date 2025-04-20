<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller {
    public function index(){
        return view('admin.company.index');
    }

    public function create(){
        return view('admin.company.create');
    }

    public function edit($id){
        return view('admin.company.edit');
    }    
}
