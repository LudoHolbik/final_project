<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://use.fontawesome.com/86896db091.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat" rel="stylesheet">
  <link href="{{ asset('css/user.css') }}" rel="stylesheet">
</head>
<body>

<form id="filter" action="">
    @foreach($types as $type)
    <label for="types[]">{{ $type -> name }}
        <input  type="checkbox" name="types[]" value="{{ $type -> id }}">
      </label>


    @endforeach
</form>


<div id="map" style="width: 100%; height: 500px"></div>



@section('scripts')
    <script>
        var places = '{!! str_replace("'", "\'", $placesJSON) !!}';
        places = JSON.parse(places);

        var map = null;
        function initMap() {

            var centerOfMyAmazingMap = {
                lat : 50.094618,
                lng: 14.416087
            };

            map = new google.maps.Map(document.getElementById('map'), {
                zoom:13,
                center: centerOfMyAmazingMap
            });

            createMarkers();
        }

        $('input').change(function(){
            var data = $('#filter').serialize();

            $.ajax({
                method: 'post',
                url: '/places/map/filter',
                data: data
            }).done(function(data){
                places = JSON.parse(data);

                clearMarkers();
                createMarkers();
            })
        });



        var markers = [];

        function createMarkers(){
            $.each(places, function(k, v){
                markers[k] = new google.maps.Marker({
                    position: {lat: v.lat, lng: v.lng},
                    map: map,
                    title: v.name
                })
            });
        }

        function clearMarkers(){

            for (var i = 0; i < markers.length; i++) {
                markers[i].setMap(null);
            }

            markers = [];
        }

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcmmk2ZB1C9ct-nT4xm3__RK8cSxmDbDo&callback=initMap"></script>
@endsection
    
</body>
</html>