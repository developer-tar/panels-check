<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function index(){
        return view('admin.plans.index');
    }

    public function create(){
        return view('admin.plans.create');
    }

    public function edit($id){
        return view('admin.plans.edit');
    }
}
