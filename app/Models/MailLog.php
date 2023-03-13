<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MailLog extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id',
        'user_id',
        'from_email',
        'to_email',
        'subject',
        'email_body',
        'send_date',
        'received_date',
        'failed',
        'error_message',
    ];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
