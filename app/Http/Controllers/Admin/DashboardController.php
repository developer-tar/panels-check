<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return redirect()->route('dashboard.index1');
    }

    public function index1()
    {
        return view('dashboard.index1');
    }

    public function index2()
    {
        return view('dashboard.index2');
    }

    public function index3()
    {
        return view('dashboard.index3');
    }

    public function index4()
    {
        return view('dashboard.index4');
    }

    public function index5()
    {
        return view('dashboard.index5');
    }
}
