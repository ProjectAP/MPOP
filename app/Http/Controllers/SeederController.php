<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Faker\Factory as Faker;

use DB;

class SeederController extends Controller
{
    public function faker() {
    	$faker = Faker::create('id_ID');

    	$status = array('L','E');
    	$dash = array('_', '.');

//    	// Faker company
//    	foreach (range(1,10) as $index) {
//    		$status_country = $faker->randomElement($status);
//    		$country = ($status_country == 'L') ? 'Indonesia' : $faker->country ;
//	        echo $faker->company.' '.$faker->address.' '. $faker->phoneNumber.' '. $country .' '. $faker->postcode.' '. $status_country .'<br>';
//        }
//        echo "<br>";
//        // Faker SC_temp
//        foreach (range(1,10) as $index) {
//	        echo '2017/'.$faker->unique()->numberBetween($min = 3000, $max = 4000).'/'. $faker->randomElement($status).'<br>';
//        }
//         echo "<br>";
//        // Faker Users
//        foreach (range(1,10) as $index) {
//        	$nik = '010'.str_pad($faker->unique()->numberBetween($min = 0, $max = 20), 2, '0', STR_PAD_LEFT);
//        	$firstName = $faker->firstName;
//        	$email = $firstName.$faker->randomElement($dash).$faker->lastName.'@argopantes.com';
//	        echo $nik.' '.$firstName.' '.strtolower($email).' sales '.bcrypt('secret').'<br>';
//        }

    	// Item DB with Relation

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

        // $item_type = array(
        //     array(
        //         'name' => 'TC',
        //         'description' => 'TC Item'
        //     ),
        //     array(
        //         'name' => 'CT',
        //         'description' => 'CT Item'
        //     ),
        //     array(
        //         'name' => 'Other',
        //         'description' => 'Other Item'
        //     )
        // );
        // DB::table('tbl_item_type')->insert($item_type);

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
                'description' => 'TWILL 2/1 Weave'
            ),
            array(
                'name' => 'Other',
                'description' => 'Other Weave'
            )
        );
        DB::table('tbl_weave_type')->insert($weave_type);


       	// Faker Item
    	$fabric = array(1,2);
    	$type = array(1,2,3);
    	$yarn = array(1,2,3,4);
    	$weave = array(1,2,3);

    	$type_item = array('TC','CT','C');

    	$no = array('45','45','45','20','45','32','22','45','45','45/2','45','20');
		$dst = array('110','133','110','76','72','76','60','72','66','133','100','110','90','136','90');
		$l_greige = array('47.0','47.0','63.0','61.0','63.0','63.0','64.0','62.0','63.0','67.0','66.0','63.0','63.0','50.0');
		$l_finish = array('44/45','44/45','58/59','56/57','58/59','58/9','58/9','58/59','58/59','60/61','60/61','59/60','58/59','45/46');
		$gram = array('101.6','114.3','102.8','149.1','113.4','148.7','165.5','124.6','117.5','175.8','91.7','176.8','120.2','177.7','142.1','152.6','188.5');
		$oz = array('3','3.37','3.03','4.4','3.34','4.38','4.88','3.68','3.46','5.19','2.7','5.21','3.55','5.24','4.19','4.5','5.56');

  		$no_item = [1110,1114,1118,1123,1134,1136,2101,2115,2126,2128,4103,4104,4108,41101,41102,41104,41105];



  		DB::table('tbl_item')->delete();
       foreach ($no_item as $item) {
       		DB::table('tbl_item')->insert(array(
       			'code' => $item,
				'type' => $faker->randomElement($type),
				'type_item' => $faker->randomElement($type_item).$item,
				'weave' => $faker->randomElement($weave),
				'tp_lusi' => $faker->randomElement($yarn),
				'no_lusi' => $faker->randomElement($no),
				'tp_pakan' => $faker->randomElement($yarn),
				'no_pakan' => $faker->randomElement($no),
				'cotton' => $faker->randomElement($no),
				'poly' => $faker->randomElement($no),
				'dst_lusi' => $faker->randomElement($dst),
				'dst_pakan' => $faker->randomElement($dst),
				'l_greige' => $faker->randomElement($l_greige),
				'dst_lusi_1' => $faker->randomElement($dst),
				'dst_pakan_1' => $faker->randomElement($dst),
				'l_finish' => $faker->randomElement($l_finish),
				'gram' => $faker->randomElement($gram),
				'oz' => $faker->randomElement($oz)
       		));

       }

    }
}
