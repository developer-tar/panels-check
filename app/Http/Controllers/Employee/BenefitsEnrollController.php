<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BenefitsEnrollController extends Controller
{
    public function index(){
        return view('employee.benefits.index');
    }

    public function create(){
        return view('employee.benefits.create');
    }

    public function edit($id){
        return view('employee.benefits.edit');
    }
}
