<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <base href="{{env('APP_URL')}}">


        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/style.css">





        <!-- Styles -->
        <style>


            .full-height {
                height: 100vh;
            }

            .flex-center {

                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                z-index:1;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

        </style>
    </head>
    <body>

<section class="contain">
     <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                       <!-- <a href="{{ route('login') }}">Login</a> -->
                        <!--<a href="{{ route('register') }}">Register</a> -->

                        <a href="" role="button" data-toggle="modal" data-target="#registerModal"> Register</a>
                    @endauth
                </div>
            @endif

<!---register modal---------->

<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <!-- register form -->
                         <h1>Register</h1>
                        <div class="panel-body">
                            <form class="" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-2 control-label">Name</label>

                                    <div class="col-md-12">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                           <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                           </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-12">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                           <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                           </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-12">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                           <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                           </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                    <div class="col-md-12">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">
                                           Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
        <!--end register form -->
      </div>
    </div>
  </div>
</div>

<!---end of register modal------------->
            <div class="content">

  <div class="left-half">
      <img class="logo" src="img/logo.png"alt="urban_explorer">
          <div class="form-wrapper">
<!--login form -->

                          <div class="panel">
                              <h2>Login</h2>
                              <div class="" >
                                  <form class="" method="POST" action="{{ route('login') }}">
                                      {{ csrf_field() }}

                                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                          <label for="email" class="">E-Mail Address</label>

                                          <div class="">
                                              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                              @if ($errors->has('email'))
                                                  <span class="help-block">
                                                      <strong>{{ $errors->first('email') }}</strong>
                                                  </span>
                                              @endif
                                          </div>
                                      </div>

                                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                          <label for="password" class="">Password</label>

                                          <div class="">
                                              <input id="password" type="password" class="form-control" name="password" required>

                                              @if ($errors->has('password'))
                                                  <span class="help-block">
                                                      <strong>{{ $errors->first('password') }}</strong>
                                                  </span>
                                              @endif
                                          </div>
                                      </div>

                                      <div class="">
                                          <div class=" col-md-offset-2">
                                              <div class="checkbox">
                                                  <label>
                                                      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                  </label>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <div class="col-md-offset-2">
                                              <button type="submit" class="btn btn-primary">
                                                  Login
                                              </button>
                                              <br>

                                              <a class="btn btn-link" href="{{ route('password.request') }}">
                                                  Forgot Your Password?
                                              </a>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>

<!-- end login form -->
     </div>
 </div>
          <div class="right-half">
               <div class="text">
                  <h1>Welcome to Urban Explorer</h1>
                  <h2>Sign-in to begin your journey!</h2>
              </div>
        </div>
          </div>
     </div>
</section>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>
