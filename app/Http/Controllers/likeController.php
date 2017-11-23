<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Place;
use App\Likes;

class likeController extends Controller
{
    //
    /*

    public function like(){
        $id = $_GET["id"];

        $place = Place::find($id);
        $likes = $place->likes;
        
        $place->likes = ++$likes;
        $place->save();
        
    }
*/
    public function undoLike(){
        $id = $_GET["id"];

        $place = Place::find($id);
        $likes = $place->likes;
        
        $place->likes = --$likes;
        $place->save();
        
    }

    public function dislike(){
        $id = $_GET["id"];

        $place = Place::find($id);
        $likes = $place->likes;
        
        $place->likes = --$likes;
        $place->save();
        
    }


    public function undoDislike(){
        $id = $_GET["id"];

        $place = Place::find($id);
        $likes = $place->likes;
        
        $place->likes = ++$likes;
        $place->save();
        
    }

/*------------------------------*/

public function like(){
    $id = $_GET["id"]; // id of the place in places database

    $likes = Likes::where('place_id',$id)->where('user_id', Auth::user()->id)->first(); // look at the database and find out whether this user did give like on this place

    if (empty($likes)){
    $likes = new Likes ();
    $likes->place_id = $id;
    $likes->user_id = Auth::user()->id;
    $likes->n_of_likes=1;
    }else{
        $likes->n_of_likes = $likes->n_of_likes == 1 ? 0 : 1;
        }
    $likes->save();

    }
}
