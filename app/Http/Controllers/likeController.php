<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;

class likeController extends Controller
{
    //

    public function like(){
        $id = $_GET["id"];

        $place = Place::find($id);
        $likes = $place->likes;
        
        $place->likes = ++$likes;
        $place->save();
        
    }

    public function dislike(){
        $id = $_GET["id"];

        $place = Place::find($id);
        $likes = $place->likes;
        
        $place->likes = --$likes;
        $place->save();
        
    }
}
