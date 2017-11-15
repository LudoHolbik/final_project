<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>Places</title>
    <link rel="stylesheet" href="css/places.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat" rel="stylesheet">
</head>
<body>




        <div class="container">
            <div class="row">
                    <img class="logo "src="img/logo.png" alt="">
                <div class="col-8 header">

                </div>
            </div>
        </div>

<!--button for changing map and cards -->
        <div class="wrap">
          		<a href="/places/map" class="button">Map</a>
                    <a href="/places" class="button2">Cards</a>
        	</div>



        <section class="tabs">
        <form id="tabs" action="" method="post">

            <input id="tab0" type="radio" name="tabs" class="checked" checked>
            <label for="tab0">All Places</label>

            <input id="tab1" type="radio" name="tabs">
            <label for="tab1">Best Views</label>

            <input id="tab2" type="radio" name="tabs">
            <label for="tab2">Outdoors &amp; Summer hangouts</label>

            <input id="tab3" type="radio" name="tabs">
            <label for="tab3">Hotels &amp; Hostels</label>

            <input id="tab4" type="radio" name="tabs">
            <label for="tab4">Art galeries</label>

            <input id="tab5" type="radio" name="tabs">
            <label for="tab5">Cultural centres</label>

            <input id="tab6" type="radio" name="tabs">
            <label for="tab6">Cinemas</label>

        </form>
        </section>


    <div class="wrapper d-flex flex-row flex-wrap">

        @foreach($places as $place)

            <div class=" card [ is-collapsed ] ">
               <img class="imaj" src="" alt="">
                <div class="card__inner [ js-expander ]">

                    <span> {{$place['name']}}</span>
                    <i class="fa fa-folder-o"></i>

                </div>
                <div class="card__expander">
                    <i class="fa fa-close [ js-collapser ]"></i>
                    <div class="box">
                        <div class="left">
                                <div class="tab">{{$place['type']}}</div>
                                <span>{{$place['opening_hours']}}</span>
                                <span>{{$place['address']}}</span>

                            <div class="side">

                                <span><a href="/places/detail/{{ $place -> id }}">Show detail</a></span>
                            </div>
                        </div>
                            <div class="desc">
                                <h2>{{$place['name']}}</h2>
                                <p>{{$place['description']}} </p>
                            </div>
                    </div>

                </div>
            </div>
            @endforeach
    </div>


    <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>

<script src="js/places.js"></script>
<script src="js/ludo.js"></script>






</body>
</html>
