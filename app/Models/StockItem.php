<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StockItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'company_id',
        'stock_category_id',
        'name',
        'item_code',
        'slug',
        'stock_unit_id',
        'expire_date',
        'on_hand',
        'min_order_quantity',
        'tags',
        'short_description',
        'description',
        'weight_gram',
        'length_cm',
        'height_cm',
        'width_cm',
        'unit_price',
        'unit_price_for',
        'markup_percentage',
        'main_image',
        'is_active',
        'is_feature',
    ];

    public function category()
    {
        return $this->belongsTo(StockCategory::class, 'stock_category_id', 'id');
    }
    public function children()
    {
        return $this->hasMany(StockCategory::class, 'id', 'parent_id');
    }
    public function images()
    {
        return $this->hasMany(StockImage::class);
    }

    public function unit()
    {
        return $this->belongsTo(StockUnit::class);
    }
    public function options()
    {
       return $this->hasMany(StockOption::class, 'stock_item_id', 'id');
    }

    public function company() : BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
