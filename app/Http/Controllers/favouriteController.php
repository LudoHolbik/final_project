<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Favourites;
use App\Place;
use App\User;


class favouriteController extends Controller
{
    //
    public function insertPlace($id) {
        //dd($id);
        $user_id = Auth::User()->id;
        $place = Favourites::where([['place_id', $id] , ['user_id', $user_id]])->first();

        if (empty($place)) {

            $place = new Favourites();
            $place->user_id=$user_id;
            $place->place_id=$id;
            $place->save();
           
        } else {

            session()->flash('error', 'This place is already in your wishlist');
           // $error = 'This place is already in your wishlist';

        }
//dd($error);
        return redirect()->action('PlacesController@placeDetail', ['id'=>$id] );
      
     }


    
}
