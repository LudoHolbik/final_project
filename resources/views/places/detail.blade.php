@extends('layouts.app')

@section('content')
<div class="info" style="width: 50%;">
     <h1>{{ $place -> name }}</h1>
          <p>{{ $place -> address }}</p>
          <p>{{ $place -> description }}</p>

     @if( $place -> telephone == null)
          <p>{{ $place -> telephone }}</p>
     @endif

          <p>Opening Hours</p>
          <p>{{ $place -> opening_hours }}</p>

     @if( $place -> wifi == 0)
          <p>Wi-Fi = No</p>
     @else
          <p>Wi-Fi = Yes</p>
     @endif

<p></p>
</div>

@endsection
