<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['content', 'user_id', 'topic_id', 'activity_id', 'reply_count', 'view_count', 'order', 'like_id', 'comment_count', 'plate_id'];
    public function user(){
        return $this->belongsTo(User::class,'user_id','uid');
    }
    public function topic(){
        return $this->belongsTo(Topic::class,'topic_id');
    }

}
