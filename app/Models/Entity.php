<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id',
        'gcs',
        'account_number',
        'trading_name',
        'registered_name',
        'registration_number',
        'vat_reference',
        'postal_address',
        'physical_address',
        'category',
        'contact_person',
        'telephone',
        'fax',
        'mobile_number',
        'email',
        'cash_sale_account',
        'payment_terms',
        'price_excl',
        'is_open_item',
        'default_tax',
        'documents_contact',
        'documents_email',
        'statement_message',
        'statement_contact',
        'statement_email',
        'price_list',
        'sales_person_id',
        'discount_percentage',
        'is_active',
    ];
}
