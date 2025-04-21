<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function index(){
        return view('vendor.plans.index');
    }

    public function create(){
        return view('vendor.plans.create');
    }

    public function edit($id){
        return view('vendor.plans.edit');
    }
}
