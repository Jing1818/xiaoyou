<?php

namespace App\Models;

use App\Models\Traits\ActiveUserHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory,ActiveUserHelper;
    protected $primaryKey="uid";
    protected $table="user";
    protected $connection="mysql2";
    public $timestamps=false;
    protected $fillable=['uid','real_name','mark'];
}
