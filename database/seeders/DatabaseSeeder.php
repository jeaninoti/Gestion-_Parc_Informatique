<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    
        User::factory(10)->create();
   

        DB::table('roles')->insert([
            'name' =>'admin',
        ]);
   
        User::find(1)->roles()->attach(1);
    }
}
