<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StockOption extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'stock_item_id',
        'stock_unit_id',
        'deductable',
        'weight_gram',
        'length_cm',
        'height_cm',
        'width_cm',
        'retail_price',
        'special_price',
        'is_active',
    ];

    public function item() : BelongsTo
    {
        return $this->belongsTo(StockItem::class, 'stock_item_id', 'id');
    }
    public function unit() : BelongsTo
    {
        return $this->belongsTo(StockUnit::class, 'stock_unit_id', 'id');
    }
}
