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
        
        <div class="col-md-6">
            <form  action="{{ route('arts.edit.post', $art->id) }}" method="post">
            @csrf
            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="medium" value="{{ $art->name }}">    
            </div>
            
            <div class="form-group">
                <input class="form-control" type="text" name="medium" placeholder="medium" value="{{ $art->medium }}">    
            </div>
            
            <div class="form-group">
                <input class="form-control" type="text" name="dimension" placeholder="medium" value="{{ $art->dimension }}">    
            </div>
            
            <button class="btn btn-default" type="submit"> Save </button>
        </form>
        </div>

    </section>
@endsection
