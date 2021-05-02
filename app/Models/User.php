<?php

namespace App\Models;

use App\Models\Traits\ActiveUserHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class User extends Model
{
    use HasFactory,ActiveUserHelper;
    protected $primaryKey="uid";
    protected $table="user";
    protected $connection="mysql2";
    public $timestamps=false;
    protected $fillable=['uid','real_name','mark'];
    protected $personal_cache_key='';
    protected $cache_expire_in_seconds=1440*60;
    public function topics(){
        return $this->belongsToMany(Topic::class,'topicjoins','user_id','topic_id','','uid');
    }
    public function getMyTopicCache(){
        self::personalCachekey();
        return Cache::remember($this->personal_cache_key,$this->cache_expire_in_seconds,function (){
            $topics=Topicjoin::query()->where('user_id',$this->uid)->get();
            $mytopic=collect();
            foreach ($topics as $topic){
                $mytopic->push(Topic::find($topic->topic_id));
            }
            return $mytopic;
        });
    }
    private function personalCachekey(){
         $this->personal_cache_key='bbs_mytopic_'.$this->uid;
    }

}
