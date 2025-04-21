<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index(){
        return view('vendor.roles.index');
    }

    public function create(){
        return view('vendor.roles.create');
    }

    public function edit($id){
        return view('vendor.roles.edit');
    }
}
