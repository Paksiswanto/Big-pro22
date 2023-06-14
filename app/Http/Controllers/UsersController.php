<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{
    public function usersindex()
    {
        $data = User::all();
        return view('user.index',compact('data'));
    }
    public function add_users()
    {
        return view('user.add');
    }
    public function edit_users()
    {
        return view('user.edit');
    }
}
