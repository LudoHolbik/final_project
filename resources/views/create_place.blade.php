<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Add New Place</title>
      <script src="https://use.fontawesome.com/86896db091.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat" rel="stylesheet"><link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/create.css') }}" rel="stylesheet">
  
  <base href="{{env('APP_URL')}}">

</head>
<body>
      @include('header')
<div class="container">
        
            <div class=" wrap">

                <div class="add-place">
                    <h3>Create a New Place</h3>
                </div>

                <form class="" action="" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
               <label for="name">Name of place</label>
                    <br>
                    @if($errors->has('name'))
                    <h5 style="color:red"> * Name of place is required</h5>
                    @endif
               <input type="text" name="name" value="">
                    <br>
               <label for="type">Type</label>
                    <br>
                    @if($errors->has('type'))
                    <h5 style="color:red"> * Type of place is required</h5>
                    @endif
               <select class="" name="type">
                    <option value="1">Best views</option>
                    <option value="2">Outdoor & summer hangouts</option>
                    <option value="3">Best parks</option>
                    <option value="4">Hotels & Hostels</option>
                    <option value="5">Art galeries</option>
                    <option value="6">Cultural centres</option>
                    <option value="7">Cinemas</option>
               </select>
                    <br>
               <label for="address">Address</label>
                    <br>
                    @if($errors->has('address'))
                    <h5 style="color:red"> * Address is required</h5>
                    @endif
               <input type="text" name="address" value="">
                    <br>
               <label for="description">Description</label>
                    <br>
                    @if($errors->has('description'))
                    <h5 style="color:red"> * Description with at least 10 characters is required</h5>
                    @endif
               <textarea name="description" rows="8" cols="80"></textarea>
                    <br>
               <label for="telephone">Contact number</label>
                    <br>
               <input type="text" name="telephone" value="">
                    <br>
               <label for="wi-fi">Wi-Fi</label>
                    <br>
               <input type="radio" name="wi-fi" value="1"> Yes<br>
               <input type="radio" name="wi-fi" value="0" checked> No<br>
                    <br>
               <label for="opening_hours">Opening_hours</label>
                    <br>
                    @if($errors->has('opening_hours'))
                    <h5 style="color:red"> * Opening hours are invalid</h5>
                    @endif
               <input type="text" name="opening_hours" value="">
                    <br>
               <label for="file">Upload picture</label>
               @if($errors->has('file'))
               <h5 style="color:red"> * Wrong image format</h5>
               @endif
               <input type="file" name="file" value="">
                    <br>
               <label for="gps_lat">GPS lat</label>
                    <br>
                    @if($errors->has('gps_lat'))
                    <h5 style="color:red"> * gps_lat is not acurate</h5>
                    @endif
               <input type="text" name="gps_lat" value="">
                    <br>
               <label for="gps_lgt">GPS lgt</label>
                    <br>
                    @if($errors->has('gps_lgt'))
                    <h5 style="color:red"> * gps_lgt is not acurate</h5>
                    @endif
               <input type="text" name="gps_lgt" value="">
                    <br>
               <input type="submit" name="" value="Create">
          </form>

          <!-- <h5>How to find gps lat and lgt?</h5>
<button id="tip" class="butt" type="button" name="button">Click here to find out</button>
<div style="display:none; border: 1px solid black" class="hint">
<p>1. Go to <a href="https://www.google.com/maps" target="_blank"> www.google.com/maps</a></p>
<p>2. Find your place and with the right click you'll see <img src="/img/map.window.png" alt="google_maps_info"></p>
<p>3. Click on What's here, and on the bottom of page you' get info <img src="/img/map.data.png" alt="google_maps_info"> </p>
<p>4.Whre you can find info
<br>
<ul>
     <li>name of place</li>
     <li>address of places</li>
     <li>gps_lat , gps_lgt</li>
</ul>
</div> -->
            </div>
        </div>



    </div>
  
    </div>
</body>
</html>

