<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function company()
    {
        return view('company.index');
    }
    public function add_company()
    {
        return view('add_company');
    }
    public function add_company_id(Request $request)
    {
         Company::create($request->all());
        return view('dashboard');
    }
}
