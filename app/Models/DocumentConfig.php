<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentConfig extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id',
        'name',
        'required_immediate',
        'required_original',
        'required_document',
        'use_as_download',
    ];
}
