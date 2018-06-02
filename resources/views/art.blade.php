@extends('layouts.app')

@section('nav')
@endsection

@section('content')
    <!--
    <div class="masonary-section" id="masonary-section" style="height: auto;">
        <div class="fa-tabs-main">
            <ul>
                <li><a href="{{ route('arts.department', ['department_id' => 1]) }}"> Painting </a></li>
                <li><a href="{{ route('arts.department', ['department_id' => 2]) }}"> Applied Art </a></li>
                <li><a href="{{ route('arts.department', ['department_id' => 3]) }}"> Sculpture </a></li>
                <li><a href="{{ route('arts.department', ['department_id' => 4]) }}"> Others </a></li>
            </ul>    
        </div>
    </div>-->


    <section class="inner-wrapper">
        <div class="fa-tabs-main">
            <ul>
                <li><a href="{{ route('arts.department', ['department_id' => 1]) }}"> Painting </a></li>
                <li><a href="{{ route('arts.department', ['department_id' => 2]) }}"> Applied Art </a></li>
                <li><a href="{{ route('arts.department', ['department_id' => 3]) }}"> Sculpture </a></li>
                <li><a href="{{ route('arts.department', ['department_id' => 4]) }}"> Others </a></li>
            </ul>    
        </div><!--fa-tabs-main-->
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="{{ route('arts.department', ['department' => $art->department_id ]) }}"> {{ ucfirst($art->departmentName->name) }}</a></li>
            <li class="active"> {{ $art->name }} </li>
        </ol>


        <div class="main-left col-md-8">
        <div class="image-main"><a class="zb" href="/img/{{ $art->department_id }}/{{ $art->img }}"><img src="/img/{{ $art->department_id }}/{{ $art->img }}" /></a></div>
        <!--<div class="art-by"><i class="fas fa-user"></i> Vineeth Karbala</div>-->
        <div class="image-details">
            <div class="image-name"> {{ $art->name }} </div>
            <div class="image-medium"> {{ $art->medium }} </div>
            <div class="image-size"> {{ $art->dimension }} </div> 
            <div class="art-by"><i class="fas fa-user"></i> {{ ucwords($art->createdBy->name) }} </div>   
        </div><!--image-details-->
        </div>
        
        <div class="col-md-4 related-masonary">
            <div class="masonary-wrap">
                <ul class="grid effect-2" id="grid">
                    @foreach($related_arts as $art)
                        <li>
                            <a href="/arts/{{ $art->department_id }}/{{ $art->id }}">
                                <img src="/img/{{ $art->department_id }}/{{ $art->img }}">
                            </a>
                        </li>                  
                    @endforeach
                </ul>            
            </div><!--masonary-wrap-->
        </div><!--related-masonary-->    
    </section>
@endsection
