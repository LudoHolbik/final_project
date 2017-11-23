@extends('layouts.app')

@section('content')
<div class="info" style="width: 50%; background-color:white" >
     <h1>{{ $places -> name }}</h1>
          <p>{{ $places-> address }}</p>
          <p>{{ $places -> description }}</p>

     @if( $places -> telephone == null)
          <p>{{ $places-> telephone }}</p>
     @endif

          <p>Opening Hours</p>
          <p>{{ $places -> opening_hours }}</p>

     @if( $places -> wifi == 0)
          <p>Wi-Fi = No</p>
     @else
          <p>Wi-Fi = Yes</p>
     @endif

<p></p>
</div>
<div class="map">

</div>

<div id="show_review" class="reviews" style="border: 1px solid black">

</div>

<button data-id="{{ $places -> id }}" id="get_review" type="button" name="get_review">See all reviews</button>

<div class="create_review">

     <form id="rate" action="" method="post">
           {{ csrf_field() }}
           <label for="review">Write a review</label>
           @if($errors->has('place_id'))
           <h5 style="color:red"> * You have already written review for this place</h5>
           @endif
           <br>
           @if($errors->has('review'))
           <h5 style="color:red"> * Review must not be empty</h5>
           @endif
           <textarea name="review" rows="8" cols="80"></textarea>
           <br>
           <label for="">Rating</label>
      <br>
      @if($errors->has('rating'))
      <h5 style="color:red"> * You have to rate this place</h5>
      @endif
<div id="check">
      <div class="form-check form-check-inline">
        <label class="form-check-label">0
          <input class="form-check-input" type="radio" name="rating" id="inlineRadio1" value="0">
     </label>
      </div>
      <div class="form-check form-check-inline">
        <label class="form-check-label">1
          <input class="form-check-input" type="radio" name="rating" id="inlineRadio2" value="1">
        </label>
      </div>
      <div class="form-check form-check-inline ">
        <label class="form-check-label">2
          <input class="form-check-input" type="radio" name="rating" id="inlineRadio3" value="2">
        </label>
      </div>
      <div class="form-check form-check-inline ">
        <label class="form-check-label">3   </label>
          <input class="form-check-input" type="radio" name="rating" id="inlineRadio3" value="3">
        </label>
      </div>
      <div class="form-check form-check-inline ">
        <label class="form-check-label">4
          <input class="form-check-input" type="radio" name="rating" id="inlineRadio3" value="4">
        </label>
      </div>
      <div class="form-check form-check-inline ">
        <label class="form-check-label">5
          <input class="form-check-input" type="radio" name="rating" id="inlineRadio3" value="5">
        </label>
      </div>

      <input type="hidden" name="user_id" value="{{ Auth::user() -> id }}">
       <input type="hidden" name="user_name" value="{{ Auth::user() -> name }}">
       <input type="hidden" name="place_id" value="{{ $places->id }}">
       <input type="submit" name="" value="Submit">
</div>
     </form>
</div>

@if($error = Session::get('error'))
  {{ $error }}
@endif
<a href="{{action('FavouriteController@insertPlace', ['id'=> $places -> id])}}" data-id="{{ $places -> id }}" id="get_review" type="button" name="add_place">I want to visit this place!</a>
<!--
  <body>
        <div>
        <ul id="places">
            <li>Metronome</li>
            <li>Stalin</li>
            <li>Other</li>
        </ul>
        <input type="text" id="add" size ="50"/>
        
        <a type="button" id="btnAdd" value="I want to visit this place" onclick="addItem()"></a>
        </div>
    </body>

    <script>
    function addItem(){
        var li = document.createElement("LI");  
        var input = document.getElementById("add");
        li.innerHTML = input.value;
        input.value = "";

        document.getElementById("places").appendChild(li);
    }
    </script>
  -->











<div id="map" style="width:600px; height:600px"></div>


<script
src="https://code.jquery.com/jquery-3.2.1.min.js"
integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
crossorigin="anonymous"></script>

<script>


    function initMap() {

        // create a map
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: {lat: {{ $places->gps_lat}}, lng: {{$places->gps_lgt}} }
        });

        // create a list of markers
        var marker1 = new google.maps.Marker({
            position: {lat: {{ $places->gps_lat}}, lng: {{$places->gps_lgt}} },
            map: map,
            label: "Pivotéka illegal beer"
          });

   };

$(document).ready(function(){

   $('#get_review').click(function(){

          console.log('click');
        $.ajax ({
             'method': 'post',
             'url': '/api/reviews/' + $('#get_review').data('id'),

             'data': {
                  'id': $('#get_review').data('id')
             }
        })
        .done(function(data){
                     $('#show_review').append(data);
                     $('#get_review').hide();
        })
   });
})



 </script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcmmk2ZB1C9ct-nT4xm3__RK8cSxmDbDo&callback=initMap"></script>

@endsection
