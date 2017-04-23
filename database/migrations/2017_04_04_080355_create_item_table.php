<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_item', function (Blueprint $table) {
            $table->string('code');
            $table->string('type_code');
            $table->string('type_item');
            $table->string('weave');
            $table->string('tp_lusi');
            $table->string('no_lusi');
            $table->string('tp_pakan');
            $table->string('no_pakan');
            $table->string('cotton');
            $table->string('poly');
            $table->string('dst_lusi_g');
            $table->string('dst_pakan_g');
            $table->string('dst_lusi_f');
            $table->string('dst_pakan_f');
            $table->string('l_greige');
            $table->string('l_finish');
            $table->string('gram');
            $table->string('oz');
            $table->string('fabric_type');
            $table->timestamps();
        });

        // Example: 1 TC, 2 CT, 4 C, & other is null.
        Schema::create('tbl_code_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
        });

        // Example: TC, CVC, CM.
        Schema::create('tbl_item_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
        });

        // Example: Plain, Plat, Twill.
        Schema::create('tbl_weave_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
        });

        // Example: GR and YD.
        // FIX SEEDER DATA
        Schema::create('tbl_fabric_type', function (Blueprint $table) {
            $table->increments('id'); // id fabric
            $table->string('name'); // name fabric
            $table->string('description'); // detail fabric
        });

        // Example: TC etc.
        // FIX SEEDER DATA
        Schema::create('tbl_yarn_type', function (Blueprint $table) {
            $table->increments('id'); // id yarn
            $table->string('name'); // name yarn
            $table->string('description'); // detail yarn
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_item');
        Schema::drop('tbl_code_type');
        Schema::drop('tbl_item_type');
        Schema::drop('tbl_weave_type');
        Schema::drop('tbl_fabric_type');
        Schema::drop('tbl_yarn_type');
    }
}
