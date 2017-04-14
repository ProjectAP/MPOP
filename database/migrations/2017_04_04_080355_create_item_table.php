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
            $table->string('type');
            $table->string('weave');
            $table->string('tp_lusi');
            $table->string('no_lusi');
            $table->string('tp_pakan');
            $table->string('no_pakan');
            $table->string('cotton');
            $table->string('poly');
            $table->string('dst_lusi');
            $table->string('dst_pakan');
            $table->string('l_greige');
            $table->string('dst_lusi_1');
            $table->string('dst_pakan_1');
            $table->string('l_finish');
            $table->string('gram');
            $table->string('oz');
            // $table->string('construct_gr');
            // $table->string('construct_fin');
            // $table->string('composition');
            // $table->string('length');
            // $table->integer('type');
            // $table->integer('weave');
            $table->timestamps();
        });

        Schema::create('tbl_item_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
        });
        Schema::create('tbl_item_weave', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('description');
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
        Schema::drop('tbl_item_type');
        Schema::drop('tbl_item_weave');
    }
}
