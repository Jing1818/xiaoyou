<?php
namespace App\Models\Traits;
use Illuminate\Support\Facades\Cache;

trait RecommandPostHelper{
    protected $post_view_weight=0;
    protected $post_share_weight=0;
    protected $post_comment_weight=0;
    protected $post_view_and_like_weight=0;
    protected $post_view_and_comment_weight=0;
    protected $post_view_and_like_and_comment_weight=0;
    protected $post_stay_weight=0;
    protected $recommand_post_cache_key='bbs_recommand_posts';
    protected $cahe_expire_in_seconds_for_recommand_post=65*60;
    public function getRecommandPost(){
        return Cache::remember($this->recommand_post_cache_key,$this->cahe_expire_in_seconds_for_recommand_post,function (){
            return $this->culculateRecommandPosts();
        });
    }
    private function culculateRecommandPosts(){

    }
    private function culculateReplyScore(){

    }
    private function culculateViewScore(){

    }
    private function culculateStayScore(){

    }
}
