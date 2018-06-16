@extends('layouts.app')

@section('nav')
	
@endsection

@section('content')
  <style type="text/css">
    body {
       background: url(http://fineartsarchives.com/img/main-banner.jpg) !important;
       background-size: 100%;
    }
    .lets-talk{
       text-align: center;
       margin-bottom: 40px;
       font-size: 30px;
       font-weight: 700;
       color: #fff;
    }
    label {
       color: #fff;
    }
    .form-control {
       background-color: inherit;
       color: #fff;
    }
    .btn-default {
       color: #fff;
       background-color: inherit;
    }
    .btn-primary {
       color: #fff;
       background-color: #2196f3;
       border-color: #2196f3;
    }
  </style>
	<div class="container" style="margin-top: 15%;">
   <div class="row">
     <div class="col-md-6 col-md-offset-3">
      <h4 class="lets-talk">Lets talk!</h4>
       <form method="POST" action="https://formspree.io/archivefinearts@gmail.com">
         <div class="form-group">
            <label for="email" style="font-weight: 100">Email address:</label>
            <input type="email" class="form-control" name="email">
        </div>
         <div class="form-group">
            <label for="email" style="font-weight: 100">Your message:</label>
            <textarea name="message" class="form-control"></textarea>
        </div>
        <button class="btn btn-primary pull-right" type="submit">Send</button>
        <a class="btn btn-default pull-right" style="margin-right: 10px;" href="/">Back to Fine Arts Archive</a>
      </form>
     </div>
   </div> 
  </div>
@endsection