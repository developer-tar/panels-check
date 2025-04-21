<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(){
        return view('vendor.notifications.index');
    }

    public function create(){
        return view('vendor.notifications.create');
    }

    public function edit($id){
        return view('vendor.notifications.edit');
    }
}
