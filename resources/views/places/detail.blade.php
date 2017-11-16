@extends('layouts.app')

@section('content')
<div class="info" style="width: 50%; background-color:white" >
     <h1>{{ $places -> name }}</h1>
     <p>{{ $places -> id }}</p>
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

<div class="reviews" style="border: 1px solid black">

@if(!$reviews->isEmpty())
@foreach($reviews as $review)
<div class="review" style="border: 1px solid black">
     <p>{{ $review -> review }}</p>
     <p>{{ $review -> rating}}</p>
     <p>Created at {{ $review -> created_at }}  by {{ $review -> user_name}}</p>

     @if(Auth::user()->id == $review->user_id)
          <button type="button" name="button"><a href="/places/detail/{{$review->id}}/delete">Delete</a> </button>
     @endif
     </div>
@endforeach
@endif


</div>

<div class="create_review">

     <form class="" action="" method="post">
           {{ csrf_field() }}
           <label for="review">Write a review</label>
           <br>
           <textarea name="review" rows="8" cols="80"></textarea>
           <br>
           <label for="">Rating</label>
      <br>
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

     </form>
</div>


<div id="map" style="width:600px; height:600px"></div>
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

   }
 </script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcmmk2ZB1C9ct-nT4xm3__RK8cSxmDbDo&callback=initMap"></script>
@endsection
