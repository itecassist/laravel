<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Company::create([
            'creator_id' => 1,
            'trading_name' => 'Demo Company',
            'registered_as' => 'ABC Investments PTY (Ltd)',
            'registration_number' => '1234/123456789/07',
            'contact_name' => 'John Doe',
            'contact_number' => '012 345 6789',
            'email' => 'admin@democompany.com',
            'physical_address' => "123 Adam Street\nBrooklyn\nPretoria\0001",
            'postal_address' => "PO.Box 123\nBrooklyn\nPretoria\n0001",
            'domain' => 'democompany.com',
            'url_contact_us' => '',
            'url_terms_and_conditions' => '',
            'url_privacy_policy' => '',
            'slogan' => '',
            'document_logo' => '',
            'bank_name' => 'FNB',
            'bank_branch' => 'Brooklyn',
            'bank_branch_code' => '123456',
            'bank_account_number' => '1234567890'
        ]);
        DB::table('company_user')->insert(
            [
                [
                    'company_id' => 1,
                    'user_id' => 1
                ],
                [
                    'company_id' => 1,
                    'user_id' => 2
                ],
                [
                    'company_id' => 1,
                    'user_id' => 3
                ],
            ]
        );
    }
}
