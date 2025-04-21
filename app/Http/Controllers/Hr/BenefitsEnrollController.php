<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BenefitsEnrollController extends Controller
{
    public function index(){
        return view('hr.benefits.index');
    }

    public function create(){
        return view('hr.benefits.create');
    }

    public function edit($id){
        return view('hr.benefits.edit');
    }
}
