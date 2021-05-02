<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Activity;
use App\Models\Post;
use App\Models\Topic;
use App\Models\Topicjoin;
use App\Models\Traits\ActiveUserHelper;
use App\Models\User;
use App\Models\Userbb;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    use ActiveUserHelper;
    //
    public function floor(Request $request,User $user,Post $post,Activity $activity)
    {
        $query=$post->query();
        $post=$query->with('user','topic')->paginate();
        $postdata= PostResource::collection($post);
        $active_user=$this->getActiveUsers();
        $recommendActivity=$activity->getRecommond();
        $myjointopic=$user->getMyTopicCache();

        return;
    }
}
