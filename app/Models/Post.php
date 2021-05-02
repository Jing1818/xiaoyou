<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['content', 'topic_id', 'activity_id', 'plate_id'];
    public function user(){
        return $this->belongsTo(User::class,'user_id','uid');
    }
    public function topic(){
        return $this->belongsTo(Topic::class,'topic_id');
    }
    public function comment(){
        return $this->hasMany(Comment::class);
    }

}
