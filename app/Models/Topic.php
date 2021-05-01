<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Topic extends Model
{
    use HasFactory;
    
    protected $fillable = ['cate_id', 'topic_name', 'topic_desc', 'post_count', 'member_count', 'master_id'];
}
