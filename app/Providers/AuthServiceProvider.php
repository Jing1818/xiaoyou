<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
		 \App\Models\Activityjoinlog::class => \App\Policies\ActivityjoinlogPolicy::class,
		 \App\Models\Reply::class => \App\Policies\ReplyPolicy::class,
		 \App\Models\Comment::class => \App\Policies\CommentPolicy::class,
		 \App\Models\Activity::class => \App\Policies\ActivityPolicy::class,
		 \App\Models\Plate::class => \App\Policies\PlatePolicy::class,
		 \App\Models\Topiccate::class => \App\Policies\TopiccatePolicy::class,
		 \App\Models\Topic::class => \App\Policies\TopicPolicy::class,
		 \App\Models\Follow::class => \App\Policies\FollowPolicy::class,
		 \App\Models\Userbb::class => \App\Policies\UserbbPolicy::class,
		 \App\Models\Post::class => \App\Policies\PostPolicy::class,
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
