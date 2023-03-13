<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    use HasFactory;
    protected $fillable = [
        'table_name',
        'field',
        'type',
        'null'
    ];

}
