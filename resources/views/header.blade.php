<html lang="{{ app()->getLocale() }}">
<link href="{{ asset('css/header.css') }}" rel="stylesheet">

<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="_token" content="{{ csrf_token() }}">
<link href="https://fonts.googleapis.com/css?family=Lato|Montserrat" rel="stylesheet">


<div class="container-fluid">
                <div class="row">
                        <img class="logo "src="img/logo.png" alt="">
                    <div class="col-12 header">
                            
                        <nav class="navbar navbar-toggleable-md">
                            <ul>
                             <li class= "user"><a class="effect-box" href="{{ route('places') }}">Places</a></li>
                             <li class= "user"><a class="effect-box" href="">Map  View</a></li>
                             

                             @if(Auth::guest())
                            <li class= "user" ><a href="{{ route('login') }}">Login</a></li>
                            <li class= "user"><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown user">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} 
                                    <!-- <span class="caret"></span> -->
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <a href="/home">My Profile</a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                            </ul>

                            
                           
                        </nav>

                    
                    </div>
                </div>
</div>
<script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
       });

       $(document).ready(function(){
       $('#tip').click(function(){
            console.log('click');
            $(".hint").show();
       })
       });

    </script>

    @yield('scripts')