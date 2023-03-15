<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailConfig extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id','host','port','encryption','validate_cert','username','password','authentication'
    ];
}
