<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function index(){
        return view('employee.plans.index');
    }

    public function create(){
        return view('employee.plans.create');
    }

    public function edit($id){
        return view('employee.plans.edit');
    }
}
