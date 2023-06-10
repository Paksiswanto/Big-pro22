<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report(){
        return view('report.report');
    }
    public function add_report(){
        return view('report.add_report');
    }
}
