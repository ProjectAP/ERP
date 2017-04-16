<?php

use Illuminate\Database\Seeder;

class MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fabric_type = array(
            array(
                'name' => 'GR',
                'description' => 'GR Fabric'
            ),
            array(
                'name' => 'YD',
                'description' => 'YD Fabric'
            )
        );
        DB::table('tbl_fabric_type')->insert($fabric_type);

        $item_type = array(
            array(
                'name' => 'TC',
                'description' => 'TC Item'
            ),
            array(
                'name' => 'CT',
                'description' => 'CT Item'
            ),
            array(
                'name' => 'Other',
                'description' => 'Other Item'
            )
        );
        DB::table('tbl_item_type')->insert($item_type);

        $yarn_type = array(
            array(
                'name' => 'TC',
                'description' => 'TC Yarn'
            ),
            array(
                'name' => 'CM',
                'description' => 'CT Yarn'
            ),
            array(
                'name' => 'CVC',
                'description' => 'CVC Yarn'
            ),
            array(
                'name' => 'Other',
                'description' => 'Other Yarn'
            )
        );
        DB::table('tbl_yarn_type')->insert($yarn_type);

        $weave_type = array(
            array(
                'name' => 'PLAIN',
                'description' => 'PLAIN Weave'
            ),
            array(
                'name' => 'TWILL 1/1',
                'description' => 'TWILL 1/1 Weave'
            ),
            array(
                'name' => 'TWILL 2/1',
                'description' => 'TWILL 1/1 Weave'
            ),
            array(
                'name' => 'Other',
                'description' => 'Other Weave'
            )
        );
        DB::table('tbl_weave_type')->insert($weave_type);
    }
}
