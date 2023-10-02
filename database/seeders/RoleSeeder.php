<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => 'admin']);
        $controlAllPermission = Permission::create(['name' => 'control all']);
    
        // Assign the 'admin' role and 'control all' permission to a user
        $user = User::find(1); // Replace with the actual user ID
        $user->assignRole($adminRole);
        $user->givePermissionTo($controlAllPermission);
    }
}
