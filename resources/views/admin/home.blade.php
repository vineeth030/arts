@extends('admin.includes.admin')

@section('content')
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          Edit art
          <!--<small>preview of simple tables</small>-->
        </h1>

      <!--
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Simple</li>
      </ol>
      -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        @if($errors->any())
        <div class="col-md-12">
          <div class="alert alert-danger">
            {{ HTML::ul($errors->all()) }}
          </div>
        </div>
        @endif

        

      {{ Form::model($place, array('route' => array('places.update', $place->id), 'method' => 'PUT')) }}

        <div class="col-md-6">

              <div class="form-group">
                  {{ Form::label('name', 'Name') }}
                  {{ Form::text('name', null, array('class' => 'form-control')) }}
              </div>

              <div class="form-group">
                  {{ Form::label('name', 'Description') }}
                  {{ Form::textarea('description', null, array('class' => 'form-control', 'rows' => 6)) }}
              </div>

              <div class="form-group">
                  {{ Form::label('name', 'Address') }}
                  {{ Form::textarea('address', null, array('class' => 'form-control', 'rows' => 4)) }}
              </div>

        </div>

        <div class="col-md-6">

              <div class="form-group">
                  {{ Form::label('category', 'Category') }}
                  {{ Form::select('category', $groupedsubcategories, $place->sub_category->id, array('class' => 'form-control')) }}
              </div>

              <div class="form-group">
                  {{ Form::label('phone', 'Phone') }}
                  {{ Form::text('phone', null, array('class' => 'form-control')) }}
              </div>

              <div class="form-group">
                  {{ Form::label('email', 'Email') }}
                  {{ Form::email('email', null, array('class' => 'form-control')) }}
              </div>

              <div class="form-group">
                  {{ Form::label('website', 'Website') }}
                  {{ Form::text('website', null, array('class' => 'form-control')) }}
              </div>

        </div>

        <div class="col-md-12 pull-right">
          {{ Form::submit('Edit the place!', array('class' => 'btn btn-primary')) }}
        </div>

      {{ Form::close() }}

      </div>
    </section>

@endsection