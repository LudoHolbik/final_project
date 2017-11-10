@extends('layouts.app')

@section('content')
     <form class="" action="" method="post">
           {{ csrf_field() }}
          <label for="name">Name</label>
               <br>
          <input type="text" name="name" value="name">
               <br>
          <label for="type">Type</label>
               <br>
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
          <label for="address">Type</label>
               <br>
          <input type="text" name="address" value="address">
               <br>
          <label for="description">Description</label>
               <br>
          <textarea name="description" rows="8" cols="80"></textarea>
               <br>
          <label for="telephone">Type</label>
               <br>
          <input type="text" name="telephone" value="+420">
               <br>
          <label for="wi-fi">Wi-Fi</label>
               <br>
          <input type="radio" name="wi-fi" value="1" checked> Yes<br>
          <input type="radio" name="wi-fi" value="0"> No<br>
               <br>
          <label for="opening_hours">Opening_hours</label>
               <br>
          <input type="text" name="opening_hours" value="">
          <br>
     <!--     <input type="checkbox" name="monday" value="Monday">Monday
          Open<input id="time" type="time" name="opening_hours">
          Close<input id="time" type="time" name="opening_hours"> -->
               <br>
          <input type="submit" name="" value="Create">
     </form>
@endsection
