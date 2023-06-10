<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){
        return view('role.index');
    }
    public function add_role(){
        return view('role.add_role');
    }
    public function edit_role(){
        return view('role.edit_role');
    }
}
