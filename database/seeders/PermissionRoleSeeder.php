<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $all_permissions = Permission::all();
        $admin_permissions = $all_permissions->filter(function ($permission) {
            return $permission->title != 'loan_application_create';
        });
        Role::findOrFail(1)->permissions()->sync($admin_permissions);
        $user_permissions = $all_permissions->filter(function ($permission) {
            return in_array($permission->title, [
                'profile_password_edit',
                'loan_application_access',
                'loan_application_create',
                'loan_application_show',
            ]);
        });
        Role::findOrFail(2)->permissions()->sync($user_permissions);
        $analyst_cfo_permissions = $user_permissions->filter(function ($permission) {
            return $permission->title != 'loan_application_create';
        });
        Role::findOrFail(3)->permissions()->sync($analyst_cfo_permissions);
        Role::findOrFail(4)->permissions()->sync($analyst_cfo_permissions);
    }
}
