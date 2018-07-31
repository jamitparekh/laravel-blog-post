
<!--
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="/lsapp/public">LSAPP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" >
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="nav navbar-nav">
            <li>
              <a class="nav-link" href="/lsapp/public">Home</a>
            </li>
            <li>
              <a class="nav-link" href="/lsapp/public/about">About</a>
            </li>
            <li>
              <a class="nav-link" href="/lsapp/public/services">Services</a>
            </li>
            <li>
                <a class="nav-link" href="/lsapp/public/posts">Blogs</a>
              </li>

            <!--<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            -->
          <!--
          </ul>
          <ul class="nav navbar-nav navbar-right">
              <li><a class="nav-link" href="/lsapp/public/posts/create">Create Post</a></li>
          </ul>
          <!--<form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> 
        </div>
</nav>
-->
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name','LSAPP')}}</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Fonts -->
        <!--<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->

        <!-- Styles -->
    </head>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  
      <a class="navbar-brand" href="{{ url('/') }}">
          {{ config('app.name', 'Laravel') }}
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav ">

          </ul>
          
          <ul class="nav navbar-nav">
            <li>
              <a class="nav-link" href="/lsapp/public">Home</a>
            </li>
            <li>
              <a class="nav-link" href="/lsapp/public/about">About</a>
            </li>
            <li>
              <a class="nav-link" href="/lsapp/public/services">Services</a>
            </li>
            <li>
                <a class="nav-link" href="/lsapp/public/posts">Blogs</a>
              </li>
            </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav navbar-right">
              <!-- Authentication Links -->
              @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class=""></span>
                      </a>

                      

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/lsapp/public/dashboard">Dashboard</a>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>
                          
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>

                      </div>
                  </li>
              @endguest
          </ul>
      </div>
  
</nav>