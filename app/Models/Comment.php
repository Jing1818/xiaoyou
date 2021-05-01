<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['post_id', 'content', 'from_uid', 'comment_type'];

    public function reply()
    {
        return $this->hasMany(Reply::class);
    }
}
