<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockCategory extends Model
{
    use HasFactory;
    protected $fillable = [
       'id', 'company_id', 'name', 'slug', 'parent_id', 'is_active'
    ];
    public function parent()
    {
        return $this->belongsTo(StockCategory::class, 'parent_id');
    }
}
