<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/style.css">

        <!-- Styles -->
        <style>


            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
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
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">

<section class="container">
  <div class="left-half">
      <img class="logo" src="img/logo.png"alt="urban_explorer">
          <div class="form-wrapper">

             <form action="" method="post">
                      <label for="username">E-mail:</label>
                      <input type="email" name="email" id="email">
                      <br>
                      <label for="password">Password:</label>
                      <input type="password" name="password" id="password">
                      <br>
                      <button id="btn">Submit</button>
                      <br>
                      <a href="#">Forgot Your Password?</a>

                 </form>
          </div>

 </div>
     <div class="right-half">
          <div class="text">
                  <h1>Welcome to Urban Explorer</h1>
                  <h2>Sign-in to begin your journey!</h2>
              </div>
     </div>
</section>


            </div>
        </div>
    </body>
</html>
