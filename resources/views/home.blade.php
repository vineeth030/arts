@extends('layouts.app')

@section('nav')
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
                <a class="navbar-brand" href="/"><img src="{{ url('img/logo.png') }}" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="/about">About</a></li>
                  <!--<li><a href="#">Team</a></li>-->
                  <li><a href="/contact">Contact</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
@endsection

@section('content')
    <section class="banner-section">
        <p class="hero-heading">FINE ARTS ARCHIVE</p>
        <p class="hero-sub-heading">Govt. College of Fine Arts Thrissur</p>
        <a href="#" class="scroll-down"><span></span></a>
    </section>
    
    <div class="masonary-section" id="masonary-section">
        <div class="fa-tabs-main">
            <ul>
                <li><a href="{{ route('arts.department', ['department_id' => 1]) }}"> Painting </a></li>
                <li><a href="{{ route('arts.department', ['department_id' => 2]) }}"> Applied Art </a></li>
                <li><a href="{{ route('arts.department', ['department_id' => 3]) }}"> Sculpture </a></li>
                <!--<li><a href="{{ route('arts.department', ['department_id' => 4]) }}"> Others </a></li>-->
                <li><a disabled href="#"> Others </a></li>
            </ul>    
        </div><!--fa-tabs-main-->
        
        <div class="masonary-wrap">
            <ul class="grid effect-2" id="grid">
                @foreach($arts as $art)
                <li><a href="/arts/{{ $art->department_id }}/{{ $art->id }}"><img src="/img/{{ $art->department_id }}/{{ $art->img }}"></a></li>
                @endforeach
            </ul>            
        </div><!--masonary-wrap-->
    </div>
@endsection
