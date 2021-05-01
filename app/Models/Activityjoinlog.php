<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activityjoinlog extends Model
{
    use HasFactory;
    
    protected $fillable = ['activity_id', 'user_id', 'comment_count', 'like_count', 'rank_level', 'win_reason', 'join_count', 'reward_type'];
}
