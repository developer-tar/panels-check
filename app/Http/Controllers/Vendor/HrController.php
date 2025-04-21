<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HrController extends Controller
{
    public function index(){
        return view('vendor.hr.index');
    }

    public function create(){
        return view('vendor.hr.create');
    }

    public function edit($id){
        return view('vendor.hr.edit');
    }
}
