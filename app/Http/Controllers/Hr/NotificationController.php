<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(){
        return view('hr.notifications.index');
    }

    public function create(){
        return view('hr.notifications.create');
    }

    public function edit($id){
        return view('hr.notifications.edit');
    }
}
