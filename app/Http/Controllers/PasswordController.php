<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    public function setPassword(User $user)
    {
        return view('users.set_password', compact('user'));
    }

    public function updatePassword(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'password' => 'required|min:6|confirmed',
        ]);

        $user->password = Hash::make($request->password);
        $user->email_verified_at = now(); // Mengatur nilai email_verified_at menjadi waktu saat ini
        $user->save();

        return redirect('kelogin')->with('success', 'Password berhasil diatur. Silakan login.');
    }
}
