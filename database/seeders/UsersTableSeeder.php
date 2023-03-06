<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $testUser = new User();
        $testUser->name = 'samuele cerretti';
        $testUser->email = 'admin@gmail.com';
        $testUser->password = Hash::make('87654321');
        $testUser->api_token = Str::random(80);
        $testUser->save();

        for ($i=0; $i <10; $i++) { 
            $newUser = new User();
            $newUser->name = $faker->name();
            $newUser->email = $faker->unique()->email();
            $newUser->password = Hash::make($faker->password());
            $newUser->api_token = Str::random(80);
            $newUser->save();
        }
    }
}
