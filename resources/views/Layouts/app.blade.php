<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'NRA Company') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" >
            <div class="container">
                <a class="navbar-brand">
                    {{ config('app.name', 'NRA Company') }}
                </a>

                {{-- logo --}}

                <div class="s45kfl79 emlxlaya bkmhp75w spb7xbtv oaz4zybt pmk7jnqg j9ispegn kr520xx4" style="height:40px;width:40px">
                    <img src="https://commsoft.ca/Public/img/uploaded/Employ%C3%A9s_250x250_Petit.png" alt="" align="right" style="width: 0.45in">
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar  -->
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="font-weight-bold">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="font-weight-bold">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }} </a>
                                </li>
                            @endif
                        @else
                    <div>
                        <a type="button" class="btn btn-primary btn-lg active"  href="{{url('/home')}}">Home</a>

                        <a type="button" class="btn btn-secondary btn-lg active"  href="{{url('/tasks')}}">Tasks</a>

                        <a type="button" class="btn btn-secondary btn-lg active"  href="{{url('/contact')}}">Messages</a>


                        <div class="btn-group" role="group" aria-labelledby="Basic example">
                                <a type="button" class="btn btn-secondary btn-lg active" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Logout</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                    </div>
                            </div>
                            <li class="font-weight-bold" >
                                <a id="navbar" class="nav-link" href="{{url('/home')}}" role="button" data-toggle="" aria-haspopup="true" aria-expanded="false" v-pre style="font-size: 19px" data-toggle="tooltip" data-placement="bottom" title="Home Page">
                                    {{ Auth::user()->name }}
                                </a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <script>
        mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
    </script>
    <style>
#myBtn {
  display: none; /* Hidden by default */
  position: fixed; /* Fixed/sticky position */
  bottom: 30px; /* Place the button at the bottom of the page */
  right: 30px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: #3490dc; /* Set a background color */
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 12px; /* Some padding */
  border-radius: 40px; /* Rounded corners */
  font-size: 17px; /* Increase font size */
}

#myBtn:hover {
  background-color: rgb(56, 56, 56); /* Add a dark-grey background on hover */
}
    </style>
</body>

</html>
