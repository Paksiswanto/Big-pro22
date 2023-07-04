<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report(){
        $data = Report::all();
        return view('report.report',compact('data'));
    }
    public function add_report(){
        return view('report.add_report');
    }
    public function insert_report(Request $request){
        Report::create([
            'name'=> $request->name,
            'type'=> $request->type,
            'description'=> $request->description,
        ]);
        return redirect()->route('report');
    }
}
