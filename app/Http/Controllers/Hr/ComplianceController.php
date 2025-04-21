<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComplianceController extends Controller
{
    public function index(){
        return view('hr.compliances.index');
    }

    public function create(){
        return view('hr.compliances.create');
    }

    public function edit($id){
        return view('hr.compliances.edit');
    }
}
