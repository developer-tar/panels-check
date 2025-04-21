<?php

namespace App\Http\Controllers\Hr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller {
    public function index() {
        return view('hr.index');
    }

   
    public function activityLogs() {
        return view('hr.activitylogs');
    }
    public function claimsBilling() {
        return view('hr.claims');
    }
    public function analytics() {
        return view('hr.analytics');
    }
}
