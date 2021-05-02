<?php
namespace App\Models\Traits;
use Illuminate\Support\Facades\Cache;

trait RecommandTopicHelper{
    protected $user_weight=0;
    protected $user_post_weight=0;
    protected $days=3;
    protected $view_weight=0;
    protected $follow_near_weight=0;
    protected $follow_past_times=0;
    protected $recommand_topic_cache_key='bbs_recommand_posts';
    protected $cahe_expire_in_seconds_for_recommand_topic=65*60;
    public function getRecommandTopic(){
        return Cache::remember($this->recommand_topic_cache_key,$this->cahe_expire_in_seconds_for_recommand_topic,function (){
            return $this->culculateRecommandTopic();
        });
    }
    private function culculateRecommandTopic(){}
    //关注的人最近也加入了
    private function culculateFollowInScore(){

    }
    //最近加入的人数
    private function culculateUserWeight(){

    }
    //发布帖子数量
    private function culculatePostScore(){

    }
    //访问数量
    private function culculateViewScore(){

    }




}
