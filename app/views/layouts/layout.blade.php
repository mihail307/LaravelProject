<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="LinkedIn integration for Laravel">
    <meta name="author" content="Maks Surguy @msurguy">
    
    <title>Laravel and Facebook integration</title>

    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0-wip/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">

    <style type="text/css">
	    body {
	    	padding: 30px;
	    }
	    .navbar {
	    	margin-bottom: 30px;
	    }
    </style>
    
  </head>

  <body>
    <a href="https://github.com/msurguy/laravel-linkedin-login" target="_blank"><img style="position: absolute; top: 0; left: 0; border: 0; z-index: 100000;" src="https://s3.amazonaws.com/github/ribbons/forkme_left_darkblue_121621.png" alt="Fork me on GitHub"></a>
    <div class="container">
      <!-- Static navbar -->
      <div class="navbar navbar-default">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://maxoffsky.com">Laravel App</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="{{url('/')}}">Home</a></li>
            <li><a href="http://wp.me/p1Zx0U-yp" target="_blank">Tutorial</a></li>
          </ul>
          @if(Auth::check())
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Your Profile <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{url('logout')}}">Logout</a></li>
              </ul>
            </li>
          </ul>
          @endif
        </div><!--/.nav-collapse -->
      </div>

      <!-- Main component for a primary marketing message or call to action -->
      
      @yield('content')
      

    </div> <!-- /container -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0-wip/js/bootstrap.min.js"></script>

  </body>
</html>
