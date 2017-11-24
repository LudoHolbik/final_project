<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $places -> name }}</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/details.css') }}" rel="stylesheet">
  <script src="https://use.fontawesome.com/86896db091.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat" rel="stylesheet">
  <base href="{{env('APP_URL')}}">

</head>
<body>
@include('header')

    <div class="container">
        <div class="row">
            <div class="col-9 wrap">

                <div class="place-info">
                    <span class="place-name">{{ $places -> name }}</span>
                    <div class="details">
                        <span class="type">Best Views</span>
                        <span class="address">{{ $places-> address }}</span>
                        <span class="description"> {{ $places -> description }}</span>

                        @if( $places -> telephone == null)
                        <span class="phone">{{ $places-> telephone }}</span>
                        @endif

                        @if( $places -> wifi == 0)
                        <span class="wifi">Yes Wifi</span>
                        @else
                        <span class="wifi">No Wifi</span>
                        @endif

                        <span class="hours">{{ $places -> opening_hours }}</span>
                        <a href="{{action('FavouriteController@insertPlace', ['id'=> $places -> id])}}" data-id="{{ $places -> id }}" id="get_review" type="button" name="add_place">I want to visit this place!</a>

                        <!-- <a type="button" id="btnAdd" value="I want to visit this place" onclick="addItem()"></a> -->

                    </div>
                </div>

                <div class="place-pic">
                <img style="width:400px; height:300px" src="/img/{{$places->img}}" alt="???">
                </div>

                <div class="container ">
                    <div class="row feed">
                        <div class="col-8 ">
                            <div class="add-post">
                            
                            <div id=“show_review” class=“reviews” style=“border: 1px solid black”>

                            </div>

                            <button data-id="{{ $places -> id }}" id="get_review" type="button" name="get_review">See all reviews</button>
                            
                            
                                <form id="rate" action="" method="post">
                                      {{ csrf_field() }}
                                      
                                      @if($errors->has('place_id'))
                                      <h5 style="color:red"> * You have already written review for this place</h5>
                                      @endif
                                      <br>
                                      @if($errors->has('review'))
                                      <h5 style="color:red"> * Review must not be empty</h5>
                                      @endif
                                      <textarea name="" placeholder=" Write Your Review" id="review" cols="100" rows="7"></textarea>
                                      
                                  <br>
                                 
                                  
                                
                                <div class="button-box">
                                <div id="check">
                                  <label for="">Rate This Place</label>
                                   @if($errors->has('rating'))
                                  <h5 style="color:red"> * You have to rate this place</h5>
                                  @endif
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
                                    <button class="btn">
                                        <i class="fa fa-plus" aria-hidden="true"></i>Add Picture</button>

                                    
                              

                                <input type="hidden" name="user_id" value="{{ Auth::user() -> id }}">
                                <input type="hidden" name="user_name" value="{{ Auth::user() -> name }}">
                                <input type="hidden" name="place_id" value="{{ $places->id }}">
                                <input type="submit" name="" value="Submit">
                                <button class="btn">
                                        <i class="fa fa-paper-plane" aria-hidden="true"></i>Post</button>
                                @if($error = Session::get('error'))
                                {{ $error }}
                                @endif
                                </div>
                                </div>
                                  </div>
                                      </form>
                                  </div>


                            <div class="post">
                                <div class="post-id">
                                    <img src="img/1.jpg" alt="">
                                    <span class="post-name">Dangoç Lardanbiri</span>
                                    <span class="date"></span>
                                </div>

                                <div class="post-content">
                                    <p>
                                        One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin.
                                        He lay on his armour-like back, and if he lifted his head a little he could see his
                                        brown belly, slightly domed and divided by arches into stiff sections. The bedding
                                        was hardly able to cover it and seemed ready to slide off any moment.
                                    </p>
                                    <button class="btn">
                                        <i class="fa fa-thumbs-up" aria-hidden="true"></i>Like</button>

                                    <button class="btn">
                                        <i class="fa fa-thumbs-o-down" aria-hidden="true"></i>Dislike</button>

                                </div>

                            </div>
                            <div class="map">
                            <div id="map" style=" height:600px"></div>

                                </div>

                        </div>
                    </div>
                </div>
        </div>
        </div>
    </div>

<!--
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>

-->
<!-- <div class="info" style="width: 50%; background-color:white" >
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


</div> -->


<!-- <div id="show_review" class="reviews" style="border: 1px solid black">

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
</div> -->

<!-- @if($error = Session::get('error'))
  {{ $error }}
@endif -->
<!-- 
  <body>
        <div>
        <ul id="places">
            <li>Metronome</li>
            <li>Stalin</li>
            <li>Other</li>
        </ul>
        <input type="text" id="add" size ="50"/>
        
        
        </div>
    </body> -->

    <script>
    function addItem(){
        var li = document.createElement("LI");  
        var input = document.getElementById("add");
        li.innerHTML = input.value;
        input.value = "";

        document.getElementById("places").appendChild(li);
    }
    </script>






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

<button class="btn"  onclick="likeHandler({{$places['id']}},this);" data-id="{{$places['id']}} "><i class="fa fa-thumbs-up" aria-hidden="true"></i>Like</button>


@if ($like && $like->n_of_likes==1)
<button onclick="likeHandler({{$places['id']}},this);" class="like" data-id="{{$places['id']}}">UNDO</button>
@else 
<button onclick="likeHandler({{$places['id']}},this);" class="like" data-id="{{$places['id']}}">LIKE</button>
@endif

<script>
function likeHandler(id, button){
    var likeButton = $(button);/*'.like[data-id='+id+']'); */
    if (likeButton.html() === 'LIKE'){
        likeButton.html("UNDO");
    } else if(likeButton.html() === 'UNDO'){
        likeButton.html('LIKE');

    } 
            
    $.ajax({
        "url" : "/like",
        "type" : "get",
        "data" : {
            "id": id
        }
    }).done(function(data) {
        alert("success");
    });

}
</script>





<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcmmk2ZB1C9ct-nT4xm3__RK8cSxmDbDo&callback=initMap"></script>

</body>
</html>
