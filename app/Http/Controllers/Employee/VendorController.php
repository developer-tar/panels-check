<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index(){
        return view('employee.vendor.index');
    }

    public function create(){
        return view('employee.vendor.create');
    }

    public function edit($id){
        return view('employee.vendor.edit');
    }
}
