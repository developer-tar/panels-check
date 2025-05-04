<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CompanyService;
use Illuminate\Http\Request;

class UsersController extends Controller
{
   
    public function index(){
        return view('admin.users.index');
    }

  
    public function edit($id){
        return view('admin.users.edit');
    }
}
