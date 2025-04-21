<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


class DashboardController extends Controller {
    public function index() {
        return view('admin.index');
    }
    public function activityLogs() {
        return view('admin.activitylogs');
    }
    public function claimsBilling() {
        return view('admin.claims');
    }
    public function analytics() {
        return view('admin.analytics');
    }
}
