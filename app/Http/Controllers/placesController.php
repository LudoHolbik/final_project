<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Place;
use App\Type;
use Illuminate\Support\Facades\Input;
use Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\facades\schema;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;


class PlacesController extends Controller
{
    public function index(){
         $places = Place::all();
          return view('places', ['places'=> $places]);
    }

    public function map(){
        $places = Place::all();
        $types = Type::all();

        $placesJSON = [];
        foreach($places as $place){
            $placesJSON[] = (object)[
                "id" => $place->id,
                "lat" => $place->gps_lat,
                "lng" => $place->gps_lgt,
                "name" => $place->name
            ];
        }

        $placesJSON = json_encode($placesJSON);
        return view ('places.map', ['places' => $places, 'types' => $types, 'placesJSON' => $placesJSON]);
    }

    public function mapFilter(Request $request){
        $types = $request->types;
        if($types == null) $types = [];

        $places = Place::whereIn('type_id', $types)->get();

        $placesJSON = [];

        if($places != null){
            foreach($places as $place){
                $placesJSON[] = (object)[
                    "id" => $place->id,
                    "lat" => $place->gps_lat,
                    "lng" => $place->gps_lgt,
                    "name" => $place->name
                ];
            }
        }


        $placesJSON = json_encode($placesJSON);
        return $placesJSON;
    }

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

    public static function newPlace() {
         return view('create_place');
    }

    public static function CreatePlace() {
         $request = request();
         $place = new Place;
         $place -> name = $request['name'];
         $place -> type_id = $request['type'];
         $place -> address  = $request['address'];
         $place -> description = $request['description'];
         $place -> telephone = $request['telephone'];
         $place -> wifi = $request['wi-fi'];
         $place -> description = $request['description'];
         $place -> opening_hours = $request['opening_hours'];

         if (Input::hasFile('file')) {

              $image = Input::file('file');
              $image->move(public_path('img') ,$image->getClientOriginalName());
              $place -> img = $image->getClientOriginalName();

          }
         $place->save();
         return redirect()->action('PlacesController@index');
         //return redirect() -> route('places');
    }

    public static function placeDetail($id) {
         $place = Place::where('id', $id)->first();
         return view('places.detail', ['place' => $place]);
    }

}
