<?php

use Illuminate\Database\Seeder;
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
        $faker = Faker\Factory::create();
            $user = new User();
            $user->name = $faker->firstName;
            $user->email = $faker->email;
            $user->password = bcrypt('qwerty');
            $user->save();
    }
}
