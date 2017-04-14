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
       		array('no_sc'=>'2017/3174/L'),
       		array('no_sc'=>'2017/3175/L'),
       		array('no_sc'=>'2017/3176/L'),
       		array('no_sc'=>'2017/3177/L'),
       		array('no_sc'=>'2017/3178/L'),
       	));
   }
}
