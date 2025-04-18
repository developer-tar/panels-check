<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(){
        return view('admin.notifications.index');
    }

    public function create(){
        return view('admin.notifications.create');
    }

    public function edit($id){
        return view('admin.notifications.edit');
    }
}
