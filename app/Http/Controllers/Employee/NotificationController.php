<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(){
        return view('employee.notifications.index');
    }

    public function create(){
        return view('employee.notifications.create');
    }

    public function edit($id){
        return view('employee.notifications.edit');
    }
}
