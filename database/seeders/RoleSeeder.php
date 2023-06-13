<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Assign;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role=Role::create([
            'name' => 'Manager',
            'guard_name' => 'web',
        ]);
        $as=Role::create([
            'name'=>'Create',
            'guard_name'=>'web'
        ]);
        $user= User::find(1);
        $permissions = Permission::all();
        $role->syncPermissions($permissions);
        $user -> assignRole($role);

    }
}
