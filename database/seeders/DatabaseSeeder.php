<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     *
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         \App\Models\User::factory(10)->create();
//        $this->call(UsersTableSeeder::class);
//		$this->call(TopicjoinsTableSeeder::class);
//		$this->call(ActivityjoinlogsTableSeeder::class);
//		$this->call(RepliesTableSeeder::class);
//		$this->call(CommentsTableSeeder::class);
		$this->call(ActivitiesTableSeeder::class);
//		$this->call(PlatesTableSeeder::class);
//		$this->call(TopiccatesTableSeeder::class);
//		$this->call(TopicsTableSeeder::class);
//        $this->call(PostsTableSeeder::class);
//        $this->call(TopicsTableSeeder::class);
//        $this->call(FollowsTableSeeder::class);
    }


}
