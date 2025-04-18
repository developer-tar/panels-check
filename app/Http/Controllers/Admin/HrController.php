<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HrController extends Controller
{
    public function index(){
        return view('admin.hr.index');
    }

    public function create(){
        return view('admin.hr.create');
    }

    public function edit($id){
        return view('admin.hr.edit');
    }
}
