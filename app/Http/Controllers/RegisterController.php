<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
      return view('register');
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required',
                'email' => 'required|unique:users,email',
                'password' => ['required', 'string', 'min:3', 'confirmed'],
                
            ],
            [
                'name.required' => 'Nama harus di isi',
                'password.required' => 'Password harus di isi',
                'password.min' => 'Password minimal 4 huruf',
                'password.confirmed' => 'Konfirmasi kata sandi tidak sesuai.', 
                

            ]

        );

        

        $user = User::create([


            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            

        ]);

        return redirect('login')->with('status', 'Tunggu akun anda akan aktif ketika sudah di kirim email');
    }
}
