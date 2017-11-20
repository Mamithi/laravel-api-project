<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $faker = \Faker\Factory::create();

        $password = Hash::make('root');

        User::create([
            'name' => 'Lawrence Mamithi',
            'email' => 'test@gmail.com',
            'password' => $password,
        ]);

        for($i = 0; $i < 10; $i++){
            \App\User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password,
            ]);
        }
    }
}
