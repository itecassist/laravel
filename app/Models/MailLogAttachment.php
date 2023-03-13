<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MailLogAttachment extends Model
{
    use HasFactory;
    protected $fillable = [
        'mail_log_id',
        'extension',
        'file_name',
        'file_size',
    ];

    public function mail_log() : BelongsTo
    {
        return $this->belongsTo(MailLog::class);
    }
}
