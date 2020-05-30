<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker\Factory::create();

       
        for ($i = 1; $i <= 3; $i++) {

            DB::table('roles')->insert([
                'name' => $faker->unique()->randomElement($array = array ('owner','tourist','admin'))
            ]);
        }
    }
}

