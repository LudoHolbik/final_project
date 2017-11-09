@extends('layouts.app')

@section('content')
     <form class="" action="#" method="post">
          <label for="name">Name</label>
               <br>
          <input type="text" name="name" value="name">
               <br>
          <label for="type">Type</label>
               <br>
          <select class="" name="type">
               <option value="">Best views</option>
               <option value="">Outdoor & summer hangouts</option>
               <option value="">Best parks</option>
               <option value="">Hotels & Hostels</option>
               <option value="">Art galeries</option>
               <option value="">Cultural centres</option>
               <option value="">Cinemas</option>
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
          <input type="radio" name="wi-fi" value="Yes" checked> Yes<br>
          <input type="radio" name="wi-fi" value="No"> No<br>
               <br>
          <label for="opening_hours">Opening_hours</label>
               <br>
          <input type="text" name="opening_hours" value="">
     </form>
@endsection
