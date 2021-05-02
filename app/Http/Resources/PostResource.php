<?php

namespace App\Http\Resources;

use App\Models\Topic;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'content'=>$this->content,
            'topic'=>new TopicResource($this->whenLoaded('topic')),
            'images'=>$this->images,
            'user'=>new UserResource($this->whenLoaded('user')),
            'comment_count'=>$this->comment_num+$this->reply_count,
            'like_count'=>$this->like_count,
            'view_count'=>$this->view_count
        ];
    }
}
