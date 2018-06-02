<section class="sidebar">
  <!-- Sidebar user panel -->
  <!--
  <div class="user-panel">
    <div class="pull-left image">
      <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>Alexander Pierce</p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>
  -->
  <ul class="sidebar-menu" data-widget="tree">
    <li class="active treeview"><a href="/"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
    <li><a href="/places"><i class="fa fa-book"></i> <span>Users</span></a></li>
    <li><a href="/users"><i class="fa fa-book"></i> <span>Arts</span></a></li>
    <li>
      <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        <i class="fa fa-book"></i><span>Sign out</span>
      </a>
    </li>
  </ul>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
  </form>
</section>