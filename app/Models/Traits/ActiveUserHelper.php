<?php
namespace App\Models\Traits;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Reply;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

trait ActiveUserHelper{
    protected $users=[];
    protected $post_weight=4;
    protected $reply_weight=1;
    protected $pass_day=3;
    protected $user_number=6;
    protected $cache_key='bbs_active_users';
    protected $cahe_expire_in_seconds=65*60;

    public function getActiveUsers()
    {
        return Cache::remember($this->cache_key,$this->cahe_expire_in_seconds,function (){
            return $this->calculateActiveUsers();
        });
    }

    public function calculateAndCache()
    {
        $active_users=$this->calculateActiveUsers();
        $this->cacheActiveusers($active_users);
    }
    private function calculateActiveUsers(){
        $this->calculatePostScore();
        $this->calculateReplyScore();
        $users=Arr::sort($this->users,function ($user){
            return $user['score'];
        });

        $users=array_slice(array_reverse($users,true),0,$this->user_number,true);
        $active_users=collect();
        foreach ($users as $user_id=>$user){
            $user=User::find($user_id);
            if ($user){
                $active_users->push($user);
            }
        }
        return $active_users;
    }
    private function calculatePostScore(){
        $post_users=Post::query()->select(DB::raw('user_id,count(*) as post_count'))
            ->where('created_at','>=',Carbon::now()->subDays($this->pass_day))
            ->groupBy('user_id')->get();
        foreach ($post_users as $val){
            $this->users[$val->user_id]['score']=$val->post_count*$this->post_weight;
        }

    }
    private function calculateReplyScore(){
        $comment_users=Comment::query()->select(DB::raw('from_uid,count(*) as comment_count'))
            ->where('created_at','>=',Carbon::now()->subDays($this->pass_day))
            ->groupBy('from_uid')->get();
        foreach ($comment_users as $val){
            $comment_score=$val->from_uid*$this->reply_weight;
            if (isset($this->users[$val->from_uid])){
                $this->users[$val->from_uid]['score']+=$comment_score;
            }else{
                $this->users[$val->from_uid]['score']=$comment_score;
            }
        }
        $reply_users=Reply::query()->select(DB::raw('from_uid,count(*) as reply_count'))
            ->where('created_at','>=',Carbon::now()->subDays($this->pass_day))
            ->groupBy('from_uid')->get();
        foreach ($reply_users as $val){
            $reply_score=$val->from_uid*$this->reply_weight;
            if (isset($this->users[$val->from_uid])){
                $this->users[$val->from_uid]['score']+=$reply_score;
            }else{
                $this->users[$val->from_uid]['score']=$reply_score;
            }
        }
    }

    private function cacheActiveusers($active_users)
    {
        Cache::put($this->cache_key,$active_users,$this->cahe_expire_in_seconds);
    }
}
