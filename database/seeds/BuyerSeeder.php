<?php

use Illuminate\Database\Seeder;

class BuyerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_buyer')->delete();
       	DB::table('tbl_buyer')->insert(array(
       		array('name'=>'#', 'address' => '#', 'phone' => '#', 'country' => '#', 'zip' => '#', 'status' => '#'),
       		array('name'=>'#', 'address' => '#', 'phone' => '#', 'country' => '#', 'zip' => '#', 'status' => '#'),
       		array('name'=>'#', 'address' => '#', 'phone' => '#', 'country' => '#', 'zip' => '#', 'status' => '#'),
       		array('name'=>'#', 'address' => '#', 'phone' => '#', 'country' => '#', 'zip' => '#', 'status' => '#'),
       	));
    }
}
