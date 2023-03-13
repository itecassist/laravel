<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DocumentTracker extends Model
{
    use HasFactory;
    protected $fillable = [
        'document_id',
        'user_id',
        'mail_log_attachment_id',
        'action',
    ];

    public function document() : BelongsTo
    {
        return $this->belongsTo(Document::class);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function mail_attachment() : BelongsTo
    {
        return $this->belongsTo(MailLogAttachment::class);
    }
}
