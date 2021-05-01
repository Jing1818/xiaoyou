<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Userbb extends Model
{
    use HasFactory;
    
    protected $fillable = ['user_id', 'post_count', 'comment_count', 'like_total', 'follow_count', 'fans_count', 'bbs_roles'];
}
