<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Faker\Factory as Faker;

class SeederController extends Controller
{
    public function faker() {
    	$faker = Faker::create('id_ID');

    	$status = array('L','E');
    	$dash = array('_', '.');

    	// Faker company
    	foreach (range(1,10) as $index) {
    		$status_country = $faker->randomElement($status);
    		$country = ($status_country == 'L') ? 'Indonesia' : $faker->country ;
	        echo $faker->company.' '.$faker->address.' '. $faker->phoneNumber.' '. $country .' '. $faker->postcode.' '. $status_country .'<br>';
        }
        echo "<br>";
        // Faker SC_temp
        foreach (range(1,10) as $index) {
	        echo '2017/'.$faker->unique()->numberBetween($min = 3000, $max = 4000).'/'. $faker->randomElement($status).'<br>';
        }
         echo "<br>";
        // Faker Users
        foreach (range(1,10) as $index) {
        	$nik = '010'.str_pad($faker->unique()->numberBetween($min = 0, $max = 20), 2, '0', STR_PAD_LEFT);
        	$firstName = $faker->firstName;
        	$email = $firstName.$faker->randomElement($dash).$faker->lastName.'@argopantes.com';
	        echo $nik.' '.$firstName.' '.strtolower($email).' sales '.bcrypt('secret').'<br>';
        }
    }
}
