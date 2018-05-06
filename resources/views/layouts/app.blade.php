<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/custom.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/default.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/component.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ url('css/fontawesome-all.css') }}" rel="stylesheet" type="text/css">
    <script src="{{ url('js/modernizr.custom.js') }}"></script>
</head>
<body>
    <nav class="navbar navbar-default">
    <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="{{ url('img/archive_logo_white.png') }}" /></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <!--<li><a href="#">Link</a></li>-->
      </ul>
    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </nav>

    @yield('content')
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ url('js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ url('js/imagesloaded.js') }}"></script>
    <script src="{{ url('js/classie.js') }}"></script>
    <script src="{{ url('js/AnimOnScroll.js') }}"></script>
    <script src="{{ url('js/perfect-scrollbar.js') }}"></script>

    <!--<script type="text/javascript">
        $(document).ready(function(){
        $('.banner-section').css('height', $(window).height());
    });
    $(window).resize(function(){
        $('.banner-section').css('height', $(window).height());
    });
    </script>-->

    <script>
        new AnimOnScroll( document.getElementById( 'grid' ), {
            minDuration : 0.4,
            maxDuration : 0.7,
            viewportFactor : 0.2
        } );
    </script>

    <script>
    $('.scroll-down').click(function()
    {
    $('html, body').animate({ scrollTop: $('#masonary-section').offset().top}, 2000);           
    });    
    </script>

    <script>
        var ps = new PerfectScrollbar('.masonary-wrap');
    </script>
</body>
</html>
