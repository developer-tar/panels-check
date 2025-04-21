<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;


class DashboardController extends Controller {
    public function index() {
        return view('vendor.index');
    }
    public function activityLogs() {
        return view('vendor.activitylogs');
    }
    public function claimsBilling() {
        return view('vendor.claims');
    }
    public function analytics() {
        return view('vendor.analytics');
    }
}
