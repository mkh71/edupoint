<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function chartjs()
    {
        return view('chart.chartjs');
    }

    public function morris()
    {
        return view('chart.morris');
    }

    public function flot()
    {
        return view('chart.flot');
    }

    public function inlineChart()
    {
        return view('chart.inline-chart');
    }
}
