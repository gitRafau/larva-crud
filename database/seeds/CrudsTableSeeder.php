<?php

use Illuminate\Database\Seeder;
use App\Crud;

class CrudsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i<5; $i++) {
            $crud = new Crud();
            $crud->title = $faker->text(20);
            $crud->body = $faker->text(80);
            $crud->save();
        }
    }
}
