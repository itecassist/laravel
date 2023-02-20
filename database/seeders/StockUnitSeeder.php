<?php

namespace Database\Seeders;

use App\Models\StockUnit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StockUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $units = [
            [
                'company_id' => 1,
                'name' => 'Each',
            ],
            [
                'company_id' => 1,
                'name' => 'Box',
            ],
            [
                'company_id' => 1,
                'name' => 'Pkt',
            ],
            [
                'company_id' => 1,
                'name' => 'Box(50)',
            ],
            [
                'company_id' => 1,
                'name' => 'Bag',
            ],
            [
                'company_id' => 1,
                'name' => 'Bag(100)',
            ],
            [
                'company_id' => 1,
                'name' => 'Box(100)',
            ],
            [
                'company_id' => 1,
                'name' => 'Bag(1000)',
            ],
            [
                'company_id' => 1,
                'name' => 'Bag(200)',
            ],
            [
                'company_id' => 1,
                'name' => 'Bag(500)',
            ],
            [
                'company_id' => 1,
                'name' => 'Pack(5)',
            ],
            [
                'company_id' => 1,
                'name' => 'Set',
            ],
            [
                'company_id' => 1,
                'name' => 'Bot(12oz)',
            ],
            [
                'company_id' => 1,
                'name' => 'Box(20)',
            ],
            [
                'company_id' => 1,
                'name' => 'Bag(20)',
            ],
            
        ];
        StockUnit::insert($units);
    }
}
