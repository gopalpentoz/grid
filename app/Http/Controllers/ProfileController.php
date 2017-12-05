<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mongo;

class ProfileController extends Controller
{
    public function index($id)
    {
    	$collection = Mongo::get()->grid->profiles;
		$doc=  $collection->find(['uuid' => $id])->toArray();

        var_dump($doc);
		// $p = json_decode($doc,true);
		// return $p;
    }

}
