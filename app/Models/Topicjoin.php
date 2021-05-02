<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Topicjoin extends Model
{
    use HasFactory;
    protected $table='topic_user';
    protected $fillable = ['user_id', 'topic_id', 'status'];
}
