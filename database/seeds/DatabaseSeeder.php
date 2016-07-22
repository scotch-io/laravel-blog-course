<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        // clear the information in our database
        DB::table('users')->delete();
        DB::table('posts')->delete();

        // create 5 users (2 admins, 3 visitors)
        $chris = factory(App\User::class)->create(['name' => 'Chris', 'username' => 'chris', 'email' => 'chris@scotch.io', 'role' => 'admin']);
        $nick  = factory(App\User::class)->create(['name' => 'Nick', 'username' => 'nick', 'email' => 'nick@scotch.io', 'role' => 'admin']);

        $users = [
            ['name' => 'Holly', 'username' => 'holly', 'email' => 'holly@scotch.io'],
            ['name' => 'Ado', 'username' => 'ado', 'email' => 'ado@scotch.io'],
            ['name' => 'Ryan', 'username' => 'ryan', 'email' => 'ryan@scotch.io'],
        ];
        foreach ($users as $user)
            factory(App\User::class)->create($user);

        // create 8 posts (5 from adminOne, 3 from adminTwo)
        $chrisPosts = [
            'Building an App with Angular 2',
            'Build an App with Laravel',
            'Laravel is Really Fun'
        ];
        $nickPosts = [
            'Designing a Pretty Website',
            'The State of JavaScript',
            'Gulp vs Grunt: Who Will Win?'
        ];

        // loop over and create chris's posts
        foreach ($chrisPosts as $chrisPost)
            factory(App\Post::class)->create([
                'user_id' => $chris->id,
                'title'   => $chrisPost, 
                'slug'    => str_slug($chrisPost, '-')
            ]);

        // loop over nicks post and create those
        foreach ($nickPosts as $nickPost)
            factory(App\Post::class)->create([
                'user_id' => $nick->id,
                'title'   => $nickPost, 
                'slug'    => str_slug($nickPost, '-')
            ]);

    }
}
