<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoleHasPermission;
use Spatie\Permission\Models\Role;
use Yoeunes\Toastr\Facades\Toastr;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index(){
        $data = Role::all();
        return view('role.index',compact('data'));
    }
    public function add_role(){
        return view('role.add_role');
    }
    public function addRolePermission(Request $request){
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'permission' => 'array', // Memastikan bahwa permission merupakan array
        ]);
        
        $role = new Role();
        $role->name = $validatedData['name'];
        $role->description = $validatedData['description'];
        $role->save();
        
        $roleId = $role->id;

        // Menyimpan permission terkait dengan peran baru
        if ($request->has('permission')) {
            $permissionIds = $request->input('permission', []);
            $role->syncPermissions($permissionIds);
             }
           Toastr::success('Succsess','Data Berhasil Ditambahkan');

        return redirect('/role');
        
    }
    public function edit_role($id){
        $data = Role::findById($id);
    
        $roleHasPermissions = RoleHasPermission::where('role_id',$id)->pluck('permission_id')->toArray();
        $permissions = Permission::whereIn('id',$roleHasPermissions)->pluck('name')->toArray();
        return view('role.edit_role',compact('data', 'permissions'));
    }

    public function edit(Request $request, $id)
{
    $data = Role::findOrFail($id);

    $validatedData = $request->validate([
        'name' => 'required',
        'description' => 'required',
        'permission' => 'array', // Memastikan bahwa permission merupakan array
    ]);

    $data->name = $validatedData['name'];
    $data->description = $validatedData['description'];
    $data->save();

    $permissionIds = $validatedData['permission'];
    $data->syncPermissions($permissionIds);
    return redirect('role');
}

    function delete_role($id)  {
        $data = Role::find($id);
        $data->delete();
        return redirect()->back();
    }
}
