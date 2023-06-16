<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
         
    
        // simpan data yang telah diisi
        $user = new Company();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->logo = $request->input('logo');
        $user->addtelephoneress = $request->input('addtelephoneress');
        $user->npwp = $request->input('npwp');
        $user->user_id = $request->input('user_id');
        $user->save();
        $data = User::find($request->user_id);
        $data->company_id = $user->id;
        $data ->save();
        return redirect()->route('dashboard');
    }
    
}
