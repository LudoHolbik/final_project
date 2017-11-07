@extends('layouts.app')

@section('content')
     <form class="" action="#" method="post">
          <label for="name">Name</label>
          <input type="text" name="name" value="name">
          <br>
          <label for="type">Type</label>
          <select class="" name="type">
               <option value=""></option>
               <option value=""></option>
               <option value=""></option>
               <option value=""></option>
               <option value=""></option>
               <option value=""></option>
               <option value=""></option>
          </select>
          <br>
          <label for="address">Type</label>
          <input type="text" name="address" value="address">
          <br>
          <label for="description">Description</label>
          <textarea name="description" rows="8" cols="80"></textarea>
          <br>
          <label for="telephone">Type</label>
          <input type="text" name="telephone" value="+420">
          <br>
          <label for="wi-fi">Wi-Fi</label>
          <input type="radio" name="wi-fi" value="Yes" checked> Yes<br>
          <input type="radio" name="wi-fi" value="No"> No<br>
          <br>
          <label for="opening_hours">Opening_hours</label>
          <input type="text" name="opening_hours" value="">
     </form>
@endsection
