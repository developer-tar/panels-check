<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BenefitsEnrollController extends Controller
{
    public function index(){
        return view('admin.benefits.index');
    }

    public function create(){
        return view('admin.benefits.create');
    }

    public function edit($id){
        return view('admin.benefits.edit');
    }
}
