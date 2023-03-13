<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Document extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id',
        'user_id',
        'for_user_id',
        'document_config_id',
        'extension',
        'file_name',
        'file_size',
        'notes'
    ];

    public function user() :BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function config() :BelongsTo
    {
        return $this->belongsTo(DocumentConfig::class);
    }
}
