<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockImage extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'stock_item_id',
        'image',
        'sort_order',
    ];

    public function item()
    {
        return $this->belongsTo(StockItem::class, 'stock_item_id', 'id');
    }
}
