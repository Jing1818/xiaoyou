<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reply extends Model
{
    use HasFactory;
    
    protected $fillable = ['comment_id', 'reply_type', 'content', 'from_uid', 'to_uid'];
}
