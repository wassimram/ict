<?php

namespace Database\Seeders;

use App\Models\Dogs;
use App\Models\UserComment;


use Illuminate\Database\Seeder;
use DB;

class UserCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        echo 'Seeding!';
        //$dog= Dogs::atAge(2)->get();
        //dd($dog);
        /*DB::table('user_comments')->truncate();
        DB::table('user_comments')->insert(['comment' => 'Hello World', 'author_id'=>'1']);
        DB::table('user_comments')->insert(['comment' => 'foo bar', 'author_id'=>'2']);*/
        UserComment::truncate();
        (new \Faker\Generator)->seed(123);

        UserComment::create(['comment' => 'Hello World', 'author_id'=>'1']);
        UserComment::create(['comment' => 'foo bar', 'author_id'=>'2']);
        //factory(App\UserComment::class, 50)->create();

        UserComment::factory(50)->create();
    }
}
