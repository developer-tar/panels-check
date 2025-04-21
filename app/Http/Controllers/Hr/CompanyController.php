<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompanyController extends Controller {
    public function index(){
        return view('hr.company.index');
    }

    public function create(){
        return view('hr.company.create');
    }

    public function edit($id){
        return view('hr.company.edit');
    }    
}
