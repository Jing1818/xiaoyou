<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Cache;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['activity_name', 'activity_desc', 'status', 'start_time', 'end_time', 'user_id', 'index', 'is_admin', 'join_num', 'is_show_winner', 'activity_type'];
    public $cache_key='bbs_activity';
    protected $cache_expire_in_seconds=1440*60;
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function publishBy(){
        return $this->belongsTo(User::class);
    }
    public function joinlog(){
        return $this->hasMany(Activityjoinlog::class);
    }
    public function getRecommond(){
        $recommandActivity=Activity::query()
            ->where('end_time','>=',time())
            ->where('is_tuijian','=','1')
            ->get();
        return $recommandActivity;
    }


}
