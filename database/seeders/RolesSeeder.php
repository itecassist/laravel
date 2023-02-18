<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'id'    => 1,
                'name' => 'Admin',
            ],
            [
                'id'    => 2,
                'name' => 'User',
            ],
            [
                'id'    => 3,
                'name' => 'Analyst',
            ],
            [
                'id'    => 4,
                'name' => 'CFO',
            ],
        ];

        Role::insert($roles);
    }
}
