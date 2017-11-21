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
use App\Review;


class PlacesController extends Controller
{

// map controller

    public function map(){
         if(Auth::user() == null) {
            return  redirect('/');
        } else {
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

// end of maps controller

    public function places_view() {
        $user_id = Auth::User() -> id;
        $user = User::where('id', $user_id)->first();
         return view ('home', ['user' => $user]);

    }
/*
    public function index($id = null){
        if ($id == null) {
        $places = Place::all();
        return view('places', ['places'=> $places]);
        }else{
            $places=Place::where('type_id', $id)->get();
            return view('places', ['places'=> $places]);
        }

*/

    public function index(){
         if(Auth::user() == null) {
            return  redirect('/');
        } else {
        $places = Place::all();
         return view('places', ['places'=> $places]);
          }
   }



    public function Best_Views_Select($id)
    {
        $places = Place::where('type_id', $id)->get();
        $view = view('type_of_place'); // odkaz na blade file ktory sa zobrazi
        $view->places=$places; // v bladovem filu 'view' bude k dispozici data z variable $places a to pod menom places
       // dd($places);
        return view('places', ['places'=>$places]);
   }


    public static function newPlace() {
         if(Auth::user() == null) {
            return  redirect('/');
        } else {
         return view('create_place');
          }
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
         if(Auth::user() == null) {
            return  redirect('/');
        } else {
         $place = Place::where('id', $id)->first();
        // $review = Review::where('place_id', $id)->get();
         return view('places.detail', ['places' => $place]//, ['reviews' => $review]
    );
    }
}

// reviews controller

    public static function createReview() {
         $request = request();
         $review = new Review;
         $review ->review = $request['review'];
         $review ->user_id = $request['user_id'];
         $review ->user_name = $request['user_name'];
         $review ->rating = $request['rating'];
         $review ->place_id = $request['place_id'];
         $review->save();
         return redirect()->action('PlacesController@placeDetail', ['id'=>$request['place_id']]);
    }

    public static function deleteReview($id) {
         $review = Review::find($id);
         $place_id = $review->place_id;
         $review->delete();
         return redirect()->action('PlacesController@placeDetail',['id'=>$place_id]);

    }

    public static function getReview($id) {
         $review = Review::where('place_id' , $id)->get();

         return view('places.reviews', ['reviews'=> $review]);
    }

// end of review controller
}
