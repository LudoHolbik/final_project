<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;

class testController extends Controller
{
    //the 'homepage' of feature tests
    public function index() 
    {
       $place = Place::all();
       var_dump($place);

    }

    public function create()
    {

        $place = new Place();

        $place->nickname = 'Metronom';

        $place->save();

        die('CREATING...');
    }
    
}
