<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        return view('hr.users.index');
    }

    public function create(){
        return view('hr.users.create');
    }

    public function edit($id){
        return view('hr.users.edit');
    }
}
