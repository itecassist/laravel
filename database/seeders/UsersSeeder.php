<?php

namespace Database\Seeders;

use App\Models\UserSetting;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Super Admin',
                'email'          => 'sa@admin.com',
                'password'       => '$2y$10$PadOOF6GiHJqI1IQhPZNjeXkKGPip9vJXdhB5ra6lrvZdcZFZDCjy',
                
                'remember_token' => null,
            ],
            [
                'id'             => 2,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$PadOOF6GiHJqI1IQhPZNjeXkKGPip9vJXdhB5ra6lrvZdcZFZDCjy',
                
                'remember_token' => null,
            ],
            [
                'id'             => 3,
                'name'           => 'User',
                'email'          => 'user@admin.com',
                'password'       => '$2y$10$PadOOF6GiHJqI1IQhPZNjeXkKGPip9vJXdhB5ra6lrvZdcZFZDCjy',
                
                'remember_token' => null,
            ],
        ];

        User::insert($users);
        $settings = [
            [
                'user_id'=>1,
                'dark_mode'=>false,
                'header_fixed'=>false,
                'header_no_border' =>false,
                'sidebar_collapsed' =>false,
                'sidebar_fixed' =>false,
                'sidebar_mini' =>true,
                'sidebar_mini_md' =>false,
                'sidebar_mini_xs' =>false,
                'sidebar_nav_flat' =>false,
                'sidebar_nav_legacy' =>true,
                'sidebar_nav_compact' =>false,
                'sidebar_nav_child_indent' =>true,
                'sidebar_nav_child_hide' =>false,
                'sidebar_disable_hover' =>false,
                'footer_fixed' =>false,
                'small_text_body' =>true,
                'small_text_navbar' =>false,
                'navbar_variants' => 'bg-white',
            ],
            [
                'user_id'=>2,
                'dark_mode'=>false,
                'header_fixed'=>false,
                'header_no_border' =>false,
                'sidebar_collapsed' =>false,
                'sidebar_fixed' =>false,
                'sidebar_mini' =>true,
                'sidebar_mini_md' =>false,
                'sidebar_mini_xs' =>false,
                'sidebar_nav_flat' =>false,
                'sidebar_nav_legacy' =>true,
                'sidebar_nav_compact' =>false,
                'sidebar_nav_child_indent' =>true,
                'sidebar_nav_child_hide' =>false,
                'sidebar_disable_hover' =>false,
                'footer_fixed' =>false,
                'small_text_body' =>true,
                'small_text_navbar' =>false,
                'navbar_variants' => 'bg-white',
            ],
            [
                'user_id'=>3,
                'dark_mode'=>false,
                'header_fixed'=>false,
                'header_no_border' =>false,
                'sidebar_collapsed' =>false,
                'sidebar_fixed' =>false,
                'sidebar_mini' =>true,
                'sidebar_mini_md' =>false,
                'sidebar_mini_xs' =>false,
                'sidebar_nav_flat' =>false,
                'sidebar_nav_legacy' =>true,
                'sidebar_nav_compact' =>false,
                'sidebar_nav_child_indent' =>true,
                'sidebar_nav_child_hide' =>false,
                'sidebar_disable_hover' =>false,
                'footer_fixed' =>false,
                'small_text_body' =>true,
                'small_text_navbar' =>false,
                'navbar_variants' => 'bg-white',
            ],
            
        ];
        UserSetting::insert($settings);
    }
}
