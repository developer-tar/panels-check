<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;


class DashboardController extends Controller {
    public function index() {
        return view('employee.index');
    }
    public function activityLogs() {
        return view('employee.activitylogs');
    }
    public function claimsBilling() {
        return view('employee.claims');
    }
    public function analytics() {
        return view('employee.analytics');
    }
}
