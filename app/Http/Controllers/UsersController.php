<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use Illuminate\Support\Str;
use App\Models\UserRegister;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{
    public function usersindex()
    {
        $userregister = UserRegister::all();
        return view('user.index',compact('userregister'));
    }
    public function add_users()
    {
        $company = Company::all();
        $role = Role::all();
        return view('user.add',compact('company','role'));
    }
    public function add_user(Request $request)
    {
            // Mendapatkan file foto yang diunggah dari permintaan pengguna
        $photo = $request->file('picture');

        // Menentukan path atau direktori tujuan untuk menyimpan file foto di dalam storage
        $destinationPath = 'public/users';

        // Menyimpan file foto ke direktori tujuan dengan nama yang dihasilkan dan mengembalikan path-nya
        $filePath = $photo->store($destinationPath);

        // Menyimpan data customer beserta path foto ke dalam database
        $data = UserRegister::create([
            'name' => $request->name,
            'email' => $request->email,
            'company_id' => $request->company_id,
            'picture' => $filePath, // Menyimpan path file foto
        ]);


        $role = $request->role;
        $data->assignRole($role); // menugaskan peran ke instansi model `UserRegister`
        
        return redirect('users');   
    }
    public function edit_users()
    {
        return view('user.edit');
    }
}
