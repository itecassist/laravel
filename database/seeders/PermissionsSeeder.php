<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'id'    => '1',
                'access' => 'users_management',
                'name' => 'User Management',
                'group_id' => 0
            ],
            [
                'id'    => '2',
                'access' => 'permissions_create',
                'name'  => 'Permissions Create',
                'group_id' => 1
            ],
            [
                'id'    => '3',
                'access' => 'permissions_edit',
                'name'  => 'Permissions Edit',
                'group_id' => 1
            ],
            [
                'id'    => '4',
                'access' => 'permissions_access',
                'name'  => 'Permissions Access',
                'group_id' => 1
            ],
            [
                'id'    => '5',
                'access' => 'permissions_delete',
                'name'  => 'Permissions Delete',
                'group_id' => 1
            ],
            [
                'id'    => '6',
                'access' => 'roles_create',
                'name'  => 'Roles Create',
                'group_id' => 1
            ],
            [
                'id'    => '7',
                'access' => 'roles_edit',
                'name'  => 'Roles Edit',
                'group_id' => 1
            ],
            [
                'id'    => '8',
                'access' => 'roles_access',
                'name'  => 'Roles Access',
                'group_id' => 1
            ],
            [
                'id'    => '9',
                'access' => 'roles_delete',
                'name'  => 'Roles Delete',
                'group_id' => 1
            ],
            [
                'id'    => '10',
                'access' => 'users_create',
                'name'  => 'Users Create',
                'group_id' => 1
            ],
            [
                'id'    => '11',
                'access' => 'users_edit',
                'name'  => 'Users Edit',
                'group_id' => 1
            ],
            [
                'id'    => '12',
                'access' => 'users_access',
                'name'  => 'Users Access',
                'group_id' => 1
            ],
            [
                'id'    => '13',
                'access' => 'users_delete',
                'name'  => 'Users Delete',
                'group_id' => 1
            ],
            [
                'id' => 14,
                'access' => 'sa',
                'name'  => 'Super Admin',
                'group_id' =>0
            ]
           
        ];

        Permission::insert($permissions);
    }
}
