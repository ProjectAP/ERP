<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*if(DB::connection()->getDatabaseName())
   {
     echo "conncted sucessfully to database ".DB::connection()->getDatabaseName();
   }*/
Route::get('/', function () {
/*
		DB::table('no_sc_temp')->insert(array(                      
			  array('no_sc' => '2017/202/E'),
			  array('no_sc' => '2017/201/L'),
			  array('no_sc' => '2017/203/E')
			)); 

		DB::table('no_sc_temp')->delete();*/

});

Route::get('/seeder/faker', 'SeederController@faker');

Route::get('/sales/MP', function () {
    return view('sales.MP');
});
Route::get('/sales/OP', function () {
    return view('sales.OP');
});

Route::auth();

Route::get('/home', 'HomeController@index');
