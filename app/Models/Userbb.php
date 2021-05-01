<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Userbb extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'post_count', 'comment_count', 'like_total', 'follow_count', 'fans_count', 'bbs_roles'];
    public function usershop(){
        return $this->belongsTo(User::class,'user_id','uid');
    }
    public function posts(){
        return $this->hasMany(Post::class);
    }
    public function topicMaster(){
        return $this->hasMany(Topic::class,'master_id');
    }

}
