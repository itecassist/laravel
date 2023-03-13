<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnumLookup extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'name',
        'value'
    ];
}
