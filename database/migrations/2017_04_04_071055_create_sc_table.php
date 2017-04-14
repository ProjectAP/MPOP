<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_sc', function (Blueprint $table) {
            $table->string('no'); // no sales contract
            $table->string('no_po'); // no sales contract
            $table->integer('buyer'); // code buyer
            $table->integer('item'); // code item
            $table->integer('qty'); // quantity
            $table->integer('unit'); // unit
            $table->integer('price'); // price is multi data ????
            $table->integer('payment'); // payment
            $table->integer('del_date'); // delivery date
            $table->integer('insurance'); // insurance
            $table->integer('sales'); //sales group by nik maybe
            $table->integer('finish_type'); // Finish type
            $table->text('term'); // note or memo
            $table->string('created_by'); // created by user use nik
            $table->timestamps(); // created and updated field
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_sc');
    }
}
