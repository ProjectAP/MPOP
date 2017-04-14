<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // FAKER SEEDER DATA
        Schema::create('tbl_buyer', function (Blueprint $table) {
            $table->increments('id'); // if of buyer autoincrement
            $table->string('name'); // buyer name
            $table->text('address'); // buyer address
            $table->string('phone'); // buyer phone
            $table->string('country'); // buyer country
            $table->string('zip'); // buyer zip
            $table->char('status'); // buyer status local or export
        });
        
        // tbl_price created because price from sc is multiple
        Schema::create('tbl_price', function (Blueprint $table) {
            $table->string('no_sc'); // connect to tbl sc with no_sc / no contract
            $table->integer('price'); // price
            $table->integer('curr'); // price currency
            $table->string('color'); // price color
        });

        // tbl_delivery created because delivery from sc is multiple
        Schema::create('tbl_delivery', function (Blueprint $table) {
            $table->string('no_sc'); // connect to tbl sc with no_sc / no contract
            $table->date('date_delivery'); // price
            $table->integer('qty_delivery'); // price currency
//            $table->integer('unit'); // price currency
        });

        // FIX SEEDER DATA
        Schema::create('tbl_payment', function (Blueprint $table) {
            $table->increments('id'); // if of payment method autoincrement
            $table->string('name'); // payment method name
            $table->string('description'); // payment method description
        });

        // FIX SEEDER DATA
        Schema::create('tbl_finish_type', function (Blueprint $table) {
            $table->string('code'); // if of Finish type autoincrement
            $table->string('name'); // Finish type name
            $table->string('description'); // Finish type description
        });

        // FIX SEEDER DATA
        Schema::create('tbl_unit', function (Blueprint $table) {
            $table->increments('id'); // if of unit qty autoincrement
            $table->string('name'); // unit qty name
            $table->string('description'); // unit qty description
        });
        
        // FIX SEEDER DATA
        Schema::create('tbl_curr', function (Blueprint $table) {
            $table->increments('id'); // if of currency autoincrement
            $table->string('name'); // currency name
            $table->string('description'); // currency description
        });

        // FIX SEEDER DATA
        // group sales auto by nik or manual to choice
        Schema::create('tbl_group_sales', function (Blueprint $table) {
            $table->string('code'); // code group sales
            $table->string('name'); // group sales name
            $table->string('nik'); // group sales nik if auto add group
            $table->string('description'); // group sales description
        });

         // FIX SEEDER DATA
        Schema::create('tbl_term', function (Blueprint $table) {
            $table->increments('id'); // id term
            $table->string('name'); // name term
            $table->string('description'); // detail term
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tbl_buyer');
        Schema::drop('tbl_curr');
        Schema::drop('tbl_price');
        Schema::drop('tbl_delivery');
        Schema::drop('tbl_unit');
        Schema::drop('tbl_payment');
        Schema::drop('tbl_group_sales');
        Schema::drop('tbl_finish_type');
        Schema::drop('tbl_term');
    }
}
