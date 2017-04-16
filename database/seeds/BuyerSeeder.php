<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BuyerSeeder extends Seeder
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
//        $buyer = array();

        DB::table('tbl_buyer')->delete();

        // Faker company
        foreach (range(1,10) as $index) {
            $status_country = $faker->randomElement($status);
            $country = ($status_country == 'L') ? 'Indonesia' : $faker->country ;
            DB::table('tbl_buyer')->insert(array(
                'name' => $faker->company,
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'country' => $country,
                'zip' => $faker->postcode,
                'status' => $status_country
            ));
        }

    }
}
