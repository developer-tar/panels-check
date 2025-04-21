<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index(){
        return view('hr.roles.index');
    }

    public function create(){
        return view('hr.roles.create');
    }

    public function edit($id){
        return view('hr.roles.edit');
    }
}
