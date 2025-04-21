<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index(){
        return view('hr.vendor.index');
    }

    public function create(){
        return view('hr.vendor.create');
    }

    public function edit($id){
        return view('hr.vendor.edit');
    }
}
