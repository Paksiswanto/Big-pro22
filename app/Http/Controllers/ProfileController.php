<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
  public function profile(){
    $data = User::find(Auth::user()->id);
    return view('profile',compact('data'));
  }
  public function update_users(Request $request)  {
        $id = Auth::user()->id;
        $request->validate([
          'name' => 'required',
          'picture' => 'mimes:jpeg,png,jpg|max:2048',
          'email' => 'required|unique:users,email,' . $id,
            'password'=>'confirmed',
      ]);

        $user = User::findOrFail($id);
      $oldPassword = $request->input('old_password');
      $hashedPassword = $user->password;

      $newPassword = $request->input('password');
      $confirmPassword = $request->input('confirm_password');
      if (Hash::check($oldPassword, $hashedPassword)) {
      if ($oldPassword === $newPassword) {

        return redirect()->back()->withErrors(['old_password' => 'Sandi baru tidak boleh sama dengan sandi lama']);
    }
      $user->name = $request->name;
      $user->email = $request->email;

      if ($request->hasFile('picture')) {
          $photo = $request->file('picture');
          $destinationPath = 'public/users';
          $filePath = $photo->store($destinationPath);

          if ($user->picture) {
              Storage::delete($user->picture);
          }

          $user->picture = $filePath;
      }

      $user->save();

      return redirect()->back()->with('success', 'Data pengguna berhasil diperbarui.');
    } else {
      return redirect()->back()->withErrors(['old_password' => 'Sandi lama tidak cocok']);

    }
  }
}
