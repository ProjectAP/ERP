<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class NoSCTempSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $status = array('L','E');

        DB::table('no_sc_temp')->delete();

        // Faker No SC Temporary
        foreach (range(1,10) as $index) {
            $status_country = $faker->randomElement($status);
            $country = ($status_country == 'L') ? 'Indonesia' : $faker->country ;
            DB::table('no_sc_temp')->insert(array(
                'no_sc' => '2017/'.$faker->unique()->numberBetween($min = 3000, $max = 4000).'/'. $faker->randomElement($status)
            ));
//            echo '2017/'.$faker->unique()->numberBetween($min = 3000, $max = 4000).'/'. $faker->randomElement($status).'<br>';
        }
   }
}
