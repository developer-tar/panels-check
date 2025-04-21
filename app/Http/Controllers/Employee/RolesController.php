<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index(){
        return view('employee.roles.index');
    }

    public function create(){
        return view('employee.roles.create');
    }

    public function edit($id){
        return view('employee.roles.edit');
    }
}
