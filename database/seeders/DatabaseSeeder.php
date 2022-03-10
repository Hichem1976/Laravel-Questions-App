<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Question;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(3)->create()->each(function($u){
        	$u->questions()
        	->saveMany(
        		Question::factory(rand(1,5))->make()
        	);
        });




        //$users=User::factory(3)->create();
       // Question::factory(App\Question::class,[rand(1,5)])->make();
    }
}
