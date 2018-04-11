
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="{{ asset('favicon.ico') }}">

  <title>Starter Template for Bootstrap</title>

  <!-- App Core CSS -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name') }}</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        {!! $primarynav->asUl(['class' => 'nav navbar-nav']) !!}
      </div><!--/.nav-collapse -->
    </div>
  </nav>

  <div id="app" class="container-fluid">
    <div class="row">
      @section('body')
        @yield('content')
      @show
    </div>
  </div><!-- /.container -->

  <!--App Core JavaScript -->
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
