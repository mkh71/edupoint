<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
    }

    public function index2()
    {
        return view('admin.dashboard.index2');
    }

    public function index3()
    {
        return view('admin.dashboard.index3');
    }
}
