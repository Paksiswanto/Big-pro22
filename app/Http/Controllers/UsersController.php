<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function usersindex()
    {
        return view('user.index');
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
