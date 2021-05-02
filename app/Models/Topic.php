<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Topic extends Model
{
    use HasFactory;

    protected $fillable = ['cate_id', 'topic_name', 'topic_desc', 'post_count', 'member_count', 'master_id'];

    public function topiccate()
    {
        return $this->belongsTo(Topiccate::class,'cate_id');
    }
    public function post(){
        return $this->hasMany(Post::class);
    }
    public function master(){
        return $this->hasOne(User::class,'uid');
    }

    public function users()
    {
//        return $this->hasMany()
    }

}
