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
     <!-- Button trigger modal -->
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
       Edit
</button>

     <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
              <form class="" action="" method="post">
                   {{ csrf_field() }}
           <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Name</h5>
             <input type="text" name="edit_name" value="{{ $user -> name }}">
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">
             <input type="text" name="edit_email" value="{{ $user -> email }}">
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-primary">Save changes</button>
           </div>
            </form>
         </div>
       </div>
     </div>
<!--end of modal -->

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
