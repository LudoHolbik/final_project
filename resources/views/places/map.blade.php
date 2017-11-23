@extends('layouts.app')

<div class="wrap">
            <a  href="/place/map" class="button">Map</a>
            <a  href="/places" class="button2">Cards</a>
 </div>

@section('content')
<form id="filter" action="">
    @foreach($types as $type)
    <label for="types[]">{{ $type -> name }}
        <input  type="checkbox" name="types[]" value="{{ $type -> id }}">
      </label>


    @endforeach
</form>


<div id="map" style="width: 100%; height: 500px"></div>
@endsection


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
