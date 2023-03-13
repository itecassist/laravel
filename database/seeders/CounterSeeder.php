<?php

namespace Database\Seeders;

use App\Models\Counter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $counter = [
            [
                'company_id'    => 1,
                'name'          => 'documents_flow',
                'prefix'        => null,
                'number'        =>1,
            ],
            [
                'company_id'    => 1,
                'name'          => 'transactions',
                'prefix'        => null,
                'number'        =>1,
            ],
            [
                'company_id'    => 1,
                'name'          => 'invoices',
                'prefix'        => 'INV',
                'number'        =>1,
            ],
            [
                'company_id'    => 1,
                'name'          => 'sales_orders',
                'prefix'        => 'SO',
                'number'        =>1,
            ],
            [
                'company_id'    => 1,
                'name'          => 'receipts',
                'prefix'        => 'R',
                'number'        =>1,
            ],
            [
                'company_id'    => 1,
                'name'          => 'debit_note',
                'prefix'        => 'DN',
                'number'        =>1,
            ],
            [
                'company_id'    => 1,
                'name'          => 'credit_note',
                'prefix'        => 'CN',
                'number'        =>1,
            ],
            [
                'company_id'    => 1,
                'name'          => 'cash_memo',
                'prefix'        => 'C',
                'number'        =>1,
            ],
            [
                'company_id'    => 1,
                'name'          => 'purchase_orders',
                'prefix'        => 'PO',
                'number'        =>1,
            ],
            [
                'company_id'    => 1,
                'name'          => 'goods_received_notes',
                'prefix'        => 'GRN',
                'number'        =>1,
            ],
            [
                'company_id'    => 1,
                'name'          => 'goods_dispatched_notes',
                'prefix'        => 'GDN',
                'number'        =>1,
            ],
        ];
        Counter::insert($counter);
    }
}
