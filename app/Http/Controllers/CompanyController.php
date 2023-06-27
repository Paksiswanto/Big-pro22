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
        $id = Auth::user()->company_id;
        $data = company::all()->where('id', $id)->first();
        return view('company.index', ['data' => $data]);
    }
    public function add_company()
    {

        return view('add_company');
    }
    public function add_company_id(Request $request)
    {

        // Mendapatkan file foto yang diunggah dari permintaan pengguna
        $logo = $request->file('logo');

        // Menghasilkan nama unik untuk file foto
        $filename = uniqid() . '. v' . $logo->getClientOriginalExtension();

        // Menentukan path atau direktori tujuan untuk menyimpan file foto
        $destinationPath = 'public/Gmbslagi/img/company';

        // Menyimpan file foto ke direktori tujuan dengan nama yang dihasilkan
        $logo->move($destinationPath, $filename);
        // simpan data yang telah diisi
        $user = new Company();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->logo = $filename;
        $user->telephone = $request->input('telephone');
        $user->npwp = $request->input('npwp');
        $user->user_id = $request->input('user_id');
        $user->save();
        $data = User::find($request->user_id);
        $data->company_id = $user->id;
        $data->save();
        return redirect()->route('dashboard')->with('success', 'Data berhasil ditambahkan');
    }
    public function update_company(Request $request)
    {
        $data = Company::find(Auth::user()->company_id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->npwp = $request->npwp;
        $data->telephone = $request->telephone;
        $data->address = $request->address;
        $data->country = $request->country;
        $data->city = $request->city;
        $data->postal_code = $request->postal_code;
        $data->province = $request->province;
        $data->logo = $request->logo;
        $data->save();


        return redirect()->back()->with('success', 'Data berhasil diubah');
    }
}
