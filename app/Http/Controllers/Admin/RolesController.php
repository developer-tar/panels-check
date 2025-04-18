<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index(){
        return view('admin.roles.index');
    }

    public function create(){
        return view('admin.roles.create');
    }

    public function edit($id){
        return view('admin.roles.edit');
    }
}
