<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function index(){
        return view('hr.plans.index');
    }

    public function create(){
        return view('hr.plans.create');
    }

    public function edit($id){
        return view('hr.plans.edit');
    }
}
