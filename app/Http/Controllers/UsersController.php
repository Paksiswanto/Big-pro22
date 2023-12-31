<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\InvitationEmail;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    public function usersindex()
    {
        $id=Auth::user()->company_id;
        $data = User::latest()->where('company_id',$id)->get();
        return view('user.index',compact('data'));
    }
    public function add_users()
    {

        $company = Company::all();
        $role = Role::all();
        return view('user.add',compact('company','role'));
    }
    public function add_user(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'picture'=> 'required|mimes:jpeg,png,jpg,jfif|max:2048',
            'email'=> 'required|unique:users'
        ]);

            if ($request->hasFile('picture')) {
                $photo = $request->file('picture');
                $destinationPath = 'users';
                $filePath = $photo->store($destinationPath,'public');

            // Memastikan file gambar berhasil diunggah sebelum menyimpannya ke database
            if ($filePath) {
                $data = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'company_id' => $request->company_id,
                    'password' => $request->password,
                    'picture' => $filePath,
                ]);

                $role = $request->role;
                $data->assignRole($role);

        $invitationLink = route('users.setPassword', $data->id);
        Mail::to($data->email)->send(new InvitationEmail($invitationLink));
                return redirect('users')->with('success', 'Data pengguna berhasil diundang.');

            }
        }
    }
    public function edit_users($id)
    {
        $data = User::find($id);
        $company = Company::all();
        $role = Role::all();
        return view('user.edit',compact('company','role','data'))->with('success','Pergguana berhasu');
    }
    public function edit(Request $request,$id)
    {
       // Validasi input form
    $request->validate([
        'name' => 'required',
        'picture' => 'image|mimes:jpeg,png,jpg|max:2048',
        'email' => 'required|unique:users,email,' . $id
    ]);

    // Ambil data pengguna yang akan diupdate
    $user = User::findOrFail($id);

    // Update nama dan email
    $user->name = $request->name;
    $user->email = $request->email;
    $user->company_id = $request->company_id;

    // Update gambar profil jika ada
    if ($request->hasFile('picture')) {
        $photo = $request->file('picture');
        $destinationPath = 'users';
        $filePath = $photo->store($destinationPath, 'public');

        // Hapus gambar lama jika ada
        if ($user->picture) {
            Storage::delete($user->picture);
        }

        // Simpan path gambar baru
        $user->picture = $filePath;
    }

    // Simpan perubahan pada model pengguna
    $user->save();

    $role = $request->role;
    $user->assignRole($role);
    // Redirect atau kembali ke halaman pengguna
    return redirect()->route('users-index')->with('success', 'Data pengguna berhasil diperbarui.');
            }
    function delete($id)  {
        $data = User::find($id);
        $data ->delete();
        return redirect()->back()->with('Succsess','Data Berhasi Dihapus');
    }
}
