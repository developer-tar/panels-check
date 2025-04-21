<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller {
    public function index(){
        return view('employee.company.index');
    }

    public function create(){
        return view('employee.company.create');
    }

    public function edit($id){
        return view('employee.company.edit');
    }    
}
