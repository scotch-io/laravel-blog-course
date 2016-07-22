<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    $username = $faker->userName;
    
    return [
        'name'           => $faker->name,
        'email'          => $faker->safeEmail,
        'username'       => $username,
        'avatar'         => 'https://api.adorable.io/avatars/100/' . $username,
        'password'       => bcrypt('password'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function(Faker\Generator $faker) {
    $title = $faker->realText(10);
    $slug  = str_slug($title, '-');

    return [
        'user_id'      => function() { return factory(App\User::class)->create()->id; },
        'title'        => $title,
        'slug'         => $slug,        
        'content'      => $faker->realText(300),
        'image'        => $faker->imageUrl(1200, 600),
        'status'       => 'published',
        'published_at' => Carbon\Carbon::now()
    ];
});