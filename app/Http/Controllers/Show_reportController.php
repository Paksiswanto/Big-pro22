<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Show_reportController extends Controller
{
    public function show_report(){
        return view('report.show_report');
    }
}
