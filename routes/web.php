<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$collection = Mongo::get()->grid->profiles;
$tmp_id = uniqid('',true);
$insertOneResult = $collection->insertOne([
    'username' => 'change',
    'email' => 'change@example.com',
    'name' => 'test User',
    'uuid' => $tmp_id 
]);

//printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());

var_dump($insertOneResult);
});


Route::get('/profile/{id}', 'ProfileController@index');