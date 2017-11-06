@extends('layouts.app')

@section('content')

<div class="panel-body">
    @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
        </div>
    @endif
    You are logged in!
</div>
<div class="user_info">
          <h1>{{ $user -> name }}</h1>
          <p>{{ $user -> email }}</p>
</div>
<div class="edit_user_info">
          <a href="/edit_info/{{ $user -> id }}" class="btn btn-primary">Edit</a>
          <br>
          <br>
          <a href="/place" class="btn btn-primary">See Places</a>
</div>
<div class="wish_visit">

</div>
<div class="have_visited">

</div>
<div class="new_place">
     <a href="/new_place" class="btn btn-primary">Create a place</a>
</div>
@endsection
