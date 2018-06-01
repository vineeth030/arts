@extends('layouts.app')

@section('content')
    <section class="banner-section">
        <p class="hero-heading">FINE ARTS ARCHIVE</p>
        <p class="hero-sub-heading">Govt. College of Fine Arts Thrissur</p>
        <a href="#masonary-section" class="scroll-down"><span></span></a>
    </section>
    
    <div class="masonary-section" id="masonary-section">
        <div class="fa-tabs-main">
            <ul>
                <li><a href="{{ route('arts.department', ['department_id' => 1]) }}"> Painting </a></li>
                <li><a href="{{ route('arts.department', ['department_id' => 2]) }}"> Applied Art </a></li>
                <li><a href="{{ route('arts.department', ['department_id' => 3]) }}"> Sculpture </a></li>
                <li><a href="{{ route('arts.department', ['department_id' => 4]) }}"> Others </a></li>
            </ul>    
        </div><!--fa-tabs-main-->
        
        <div class="masonary-wrap">
            <ul class="grid effect-2" id="grid">
                @foreach($arts as $art)
                <li><a href="/arts/ {{ $art->department_id }} / {{ $art->id }} "><img src="/img/{{ $art->department_id }}/{{ $art->img }}"></a></li>
                @endforeach
            </ul>            
        </div><!--masonary-wrap-->
    </div>
@endsection
