<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Like;
use App\Models\Caregory;
use App\Models\Question;
use App\Models\Reply;
class DatabaseSeeder extends Seeder
{
    
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Caregory::factory(5)->create();
        \App\Models\Question::factory(10)->create();
        \App\Models\Reply::factory(50)->create()->each(function($reply){
            return $reply->like()->save(\App\Models\Like::factory()->make());
        });
         
        
    }
}
