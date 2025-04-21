<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        return view('vendor.users.index');
    }

    public function create(){
        return view('vendor.users.create');
    }

    public function edit($id){
        return view('vendor.users.edit');
    }
}
