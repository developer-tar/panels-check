<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function index(){
        return view('vendor.vendor.index');
    }

    public function create(){
        return view('vendor.vendor.create');
    }

    public function edit($id){
        return view('vendor.vendor.edit');
    }
}
