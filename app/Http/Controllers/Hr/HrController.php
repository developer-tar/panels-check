<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HrController extends Controller
{
    public function index(){
        return view('hr.hr.index');
    }

    public function create(){
        return view('hr.hr.create');
    }

    public function edit($id){
        return view('hr.hr.edit');
    }
}
