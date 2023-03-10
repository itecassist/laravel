<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PermissionsSeeder::class,
            RolesSeeder::class,
            PermissionRoleSeeder::class,
            UsersSeeder::class,
            RoleUserSeeder::class,
            CompaniesSeeder::class,
            StockCategorySeeder::class,
            StockUnitSeeder::class,
            StockItemSeeder::class,
            StockOptionSeeder::class,
            CounterSeeder::class,
        ]);
    }
}
