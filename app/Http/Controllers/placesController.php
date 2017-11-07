<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;

class placesController extends Controller
{
    //

    public function places_view() {
        $user_id = Auth::User() -> id;
        $user = User::where('id', $user_id)->first();
         return view ('home', ['user' => $user]);

    }


    public function Best_Views_Select()
    {
        $places = Place::where('type', 'Best_Views')->get();
        $view = view('type_of_place'); // odkaz na blade file ktory sa zobrazi
        $view->places=$places; // v bladovem filu 'view' bude k dispozici data z variable $places a to pod menom places
        dd($places);
        return $view;
    }

    public function Summer_Hangouts_Select()
    {
        $places = Place::where('type', 'Outdoor_&_Summer_Hangouts')->get();
        $view = view('type_of_place'); // odkaz na blade file ktory sa zobrazi
        $view->places=$places; // v bladovem filu 'view' bude k dispozici data z variable $places a to pod menom places
        dd($places);
        return $view;
    }

    public function The_Best_Parks_Select()
    {
        $places = Place::where('type', 'The_Best_Parks')->get();
        $view = view('type_of_place'); // odkaz na blade file ktory sa zobrazi
        $view->places=$places; // v bladovem filu 'view' bude k dispozici data z variable $places a to pod menom places
        dd($places);
        return $view;
    }

   
   

}
