<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $user=factory(\App\User::class)->create();
        factory(\App\Course::class,6)->create(['user_id'=>$user->id])->each(function($course){
            factory(\App\Episode::class,rand(5,20))->make()->each(function($episode,$key) use ($course){
                $episode->number=$key+1;
                $course->episodes()->save($episode);
            });
        });
    }
}
