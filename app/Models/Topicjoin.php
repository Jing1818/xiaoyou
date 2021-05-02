<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Topicjoin extends Model
{
    use HasFactory;
    
    protected $fillable = ['user_id', 'topic_id', 'status'];
}
