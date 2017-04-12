<?php

use Illuminate\Database\Seeder;

class NoSCTempSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('no_sc_temp')->delete();
       DB::table('no_sc_temp')->insert(array(
       		array('no_sc'=>'202/2/2'),
       		array('no_sc'=>'202/2/1'),
       	));
   }
}
