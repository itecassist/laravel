<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSetting extends Model
{
    protected $fillable = [  
        'user_id',
        'dark_mode',
        'header_fixed',
        'header_no_border',
        'sidebar_collapsed',
        'sidebar_fixed',
        'sidebar_mini',
        'sidebar_mini_md',
        'sidebar_mini_xs',
        'sidebar_nav_flat',
        'sidebar_nav_legacy',
        'sidebar_nav_compact',
        'sidebar_nav_child_indent',
        'sidebar_nav_child_hide',
        'sidebar_disable_hover',
        'footer_fixed',
        'small_text_body',
        'small_text_navbar',
        'navbar_variants',
    ];
}
