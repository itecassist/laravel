<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Company extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'creator_id',
        'trading_name',
        'registered_as',
        'registration_number',
        'contact_name',
        'contact_number',
        'email',
        'physical_address',
        'postal_address',
        'domain',
        'url_contact_us',
        'url_terms_and_conditions',
        'url_privacy_policy',
        'slogan',
        'document_logo',
        'bank_name',
        'bank_branch',
        'bank_branch_code',
        'bank_account_number'
    ];
    public function creator() :HasOne
    {
        return $this->hasOne(User::class, 'id', 'creator_id');
    }

    public function users() :BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
