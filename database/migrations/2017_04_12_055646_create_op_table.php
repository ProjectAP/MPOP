<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOPTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('op_table', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_op');
            $table->string('no_mp');
            $table->string('fabric');
            $table->string('buyer');
            $table->string('agent');
            $table->string('end_buyer');
            $table->text('notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('op_table');
    }
}
