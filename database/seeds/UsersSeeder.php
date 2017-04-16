<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create('id_ID');
        $dept = array('sales','ppic');
        $dash = array('_', '.');

        DB::table('users')->delete();

        foreach (range(1,10) as $index) {
            $nik = '010'.str_pad($faker->unique()->numberBetween($min = 0, $max = 20), 2, '0', STR_PAD_LEFT);
            $firstName = $faker->firstName;
            $email = $firstName.$faker->randomElement($dash).$faker->lastName.'@argopantes.com';
            DB::table('users')->insert(array(
                'nik' => $nik,
                'name' => $firstName,
                'email' => $email,
                'dept' => $faker->randomElement($dept),
                'password' => bcrypt('secret')
            ));

        }

    }
}
