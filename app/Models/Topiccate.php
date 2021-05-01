<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Topiccate extends Model
{
    use HasFactory;

    protected $fillable = ['parent_id', 'name', 'order'];

    public function topics()
    {
        return $this->hasMany(Topic::class,'cate_id');
    }
}
