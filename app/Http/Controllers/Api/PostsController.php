<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function show(Request $request, Post $post)
    {
        return new PostResource($post->load('user','comment','topic'));
    }
}
