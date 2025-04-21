<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BenefitsEnrollController extends Controller
{
    public function index(){
        return view('vendor.benefits.index');
    }

    public function create(){
        return view('vendor.benefits.create');
    }

    public function edit($id){
        return view('vendor.benefits.edit');
    }
}
