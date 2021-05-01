<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['activity_name', 'activity_desc', 'status', 'start_time', 'end_time', 'user_id', 'index', 'is_admin', 'join_num', 'is_show_winner', 'activity_type'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function publishBy(){
        return $this->belongsTo(User::class);
    }

}
