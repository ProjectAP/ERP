<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Faker\Factory as Faker;

class FormController extends Controller
{
    public function index(){
    	$faker = Faker::create('id_ID');

    	// Faker Item
    	$fabric = array(1,2);
    	$type = array(1,2,3);
    	$yarn = array('TC','CVC');
    	$weave = array('PLAIN','PLAT','TWILL 2/1');

    	$type_item = array('TC','CT','C');

    	$no = array('45','45','45','20','45','32','22','45','45','45/2','45','20');
		$dst = array('110','133','110','76','72','76','60','72','66','133','100','110','90','136','90');
		$l_greige = array('47.0','47.0','63.0','61.0','63.0','63.0','64.0','62.0','63.0','67.0','66.0','63.0','63.0','50.0');
		$l_finish = array('44/45','44/45','58/59','56/57','58/59','58/9','58/9','58/59','58/59','60/61','60/61','59/60','58/59','45/46');
		$gram = array('101.6','114.3','102.8','149.1','113.4','148.7','165.5','124.6','117.5','175.8','91.7','176.8','120.2','177.7','142.1','152.6','188.5');
		$oz = array('3','3.37','3.03','4.4','3.34','4.38','4.88','3.68','3.46','5.19','2.7','5.21','3.55','5.24','4.19','4.5','5.56');

  		$no_item = [1110,1114,1118,1123,1134,1136,2101,2115,2126,2128,4103,4104,4108,41101,41102,41104,41105];

    	foreach ($no_item as $item) {
       		$data[] = array(
       			'item' => $item, 
       			'type_item' => $faker->randomElement($type_item).$item,
       			'weave' => $faker->randomElement($weave),
       			'construct_g' => $faker->randomElement($dst).' x '.$faker->randomElement($dst).' / '.$faker->randomElement($yarn).' '.$faker->randomElement($no).' x '.$faker->randomElement($yarn).' '.$faker->randomElement($no).' / '.str_replace('/', ' - ', $faker->randomElement($l_greige)),
       			'construct_f' => $faker->randomElement($dst).' x '.$faker->randomElement($dst).' / '.$faker->randomElement($yarn).' '.$faker->randomElement($no).' x '.$faker->randomElement($yarn).' '.$faker->randomElement($no).' / '.str_replace('/', ' - ', $faker->randomElement($l_finish)),
       			'cotton' => $faker->randomElement($no),
       			'poly' => $faker->randomElement($no),
				'gram' => $faker->randomElement($gram),
				'oz' => $faker->randomElement($oz)
       			);
       	}
    	return view('form')->with('data', $data);
    }
}
