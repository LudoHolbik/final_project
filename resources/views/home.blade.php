<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ $user -> name }}</title>
  <script src="https://use.fontawesome.com/86896db091.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat" rel="stylesheet">
  <link href="{{ asset('css/user.css') }}" rel="stylesheet">
  <base href="{{env('APP_URL')}}">


</head>
<body>
  
@include('header')


<div class="container">
        <div class="row">
            <div class="col-9 wrap">
                <div class="user-info">
                    <span class="user-name">{{ $user -> name }}</span>
                    <span class="user-mail">{{ $user -> email }}</span>
                    <div class="edit_user_info">
                        <!-- Button trigger modal -->
                        <span class="edit">
                          <button  class="btn" type="button"  data-toggle="modal" data-target="#exampleModal">Edit Profile
                          </span>
                    </button>
                    <button class="btn"><a href="/places" >See Places</a></button>
                          
                              <button class="btn"><a href="/new_place">Create a place</a></button>
                    
                  
                    </div>

               

                <div class="prof-pic">
                @if( Auth::user() -> img !== null)
               <img src="../img/{{$user -> img }}" alt="profile picture">
                   @endif
                </div>
                
                <div class="container ">
                    <div class= "row feed">
                <div class="col-8 ">
                    <div class="add-post">

                    <div class="visit">
                    <h5>Places I wish to visit:</h5>
                    @foreach ($places as $place)
                    <ol>
                  <li>{{ $place -> name }}</li>
                  </ol>
                    @endforeach
             
                  </div>
                   
                    </div>
                  
                            <div class="post-content">
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                      <form class="" action="" method="post" enctype="multipart/form-data">
                                           {{ csrf_field() }}
                                      <div class="modal-header">
                                           <h5 class="modal-title" id="exampleModalLabel">Name</h5>
                                           <input type="text" name="edit_name" value="{{ $user -> name }}">
                                           <button class="btn" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                           </button>
                                      </div>
                                 <div class="modal-body">
                                           <input type="text" name="edit_email" value="{{ $user -> email }}">
                                 </div>
                                           <label for="file">Upload picture</label>
                                           <input type="file" name="file" value="">
                                 <div class="modal-footer">
                                      <button  class="btn" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                      <button   class="buton" type="submit" >Save changes</button>
                                 </div>
                                 </form>
                           </div>
                         </div>
                       </div>
                       
                                 
                                 <div class="post">
                           <div class="post-id">
                                <img src="../img/{{$user -> img }}" alt="">
                                <span class="post-name">{{$user -> name }}</span>
                                <span class="date"></span>
                        </div> 

                            <div class="post-content">
                                <p>
                                    One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment.
                                </p>
                                <button class="btn"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Like</button>
                                
                                <button class="btn"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i>Dislike</button>

                                 </div>

                    </div>



                </div>
            </div>
            </div>
           
            </div>


            </div>
        </div>
    </div>






<!-- <div class="panel-body">

    @if (session('status'))
        <div class="alert alert-success">
          {{ session('status') }}
 You are logged in!
        </div>
    @endif

</div>
<div class="image">

          @if( Auth::user() -> img !== null)
               <img src="../img/{{$user -> img }}" alt="profile picture">
          @endif

</div>
<div class="user_info">
          <h1>{{ $user -> name }}</h1>
          <p>{{ $user -> email }}</p>
</div>
<div class="edit_user_info"> -->
     <!-- Button trigger modal -->
     <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
       Edit
</button> -->

     <!-- Modal -->
     <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
               <div class="modal-content">
                    <form class="" action="" method="post" enctype="multipart/form-data">
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
                         <label for="file">Upload picture</label>
                         <input type="file" name="file" value="">
               <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
               </div>
               </form>
         </div>
       </div>
     </div> -->
<!--end of modal -->

          <!-- <a href="/places" class="btn btn-primary">See Places</a>
</div>
<div class="wish_visit">

</div>
<div class="have_visited">

</div>
<div class="new_place">
     <a href="/new_place" class="btn btn-primary">Create a place</a>
</div> -->


</body>
</html>
