<!-- Logo -->
<a href="{{ url("/dashboard") }}" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><b>K</b></span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg">Karbala Dashboard</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
  <!-- Sidebar toggle button-->
  <a href="" class="sidebar-toggle" data-toggle="push-menu" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <div class="navbar-custom-menu" style="padding: 7px 7px 0 0px;">
    <!--<div class="btn btn-primary">Switch to Arabic</div>-->
    {{ Form::open(array('url' => 'switchlanguage/')) }}
       {{ Form::hidden('locale', $otherLocal) }}
       {{ Form::submit("Switch to $otherLocalName", array('class' => 'btn btn-info')) }}
    {{ Form::close() }}
    <!--
    <ul class="nav navbar-nav">
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src="{{ asset('img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
          <span class="hidden-xs">Alexander Pierce</span>
        </a>
        <ul class="dropdown-menu">
          <li class="user-header">
            <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">

            <p>
              Alexander Pierce - Web Developer
            </p>
          </li>
          <li class="user-footer">
            <div class="pull-left">
              <a href="#" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
              <a href="#" class="btn btn-default btn-flat">Sign out</a>
            </div>
          </li>
        </ul>
      </li>
    </ul>
    -->
  </div>
</nav>