<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HrController extends Controller
{
    public function index(){
        return view('employee.hr.index');
    }

    public function create(){
        return view('employee.hr.create');
    }

    public function edit($id){
        return view('employee.hr.edit');
    }
}
