<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plate extends Model
{
    use HasFactory;

    protected $fillable = ['topic_id', 'plate_name', 'plate_type', 'order', 'master_id'];

    public function posts()
    {
        return $this->hasMany(Post::class);

    }
    public function topic(){
        return $this->belongsTo(Topic::class);
    }

    public function master()
    {
        return $this->belongsTo(User::class,'master_id');
    }
}
