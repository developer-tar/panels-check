<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        return view('employee.users.index');
    }

    public function create(){
        return view('employee.users.create');
    }

    public function edit($id){
        return view('employee.users.edit');
    }
}
