<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="{{ asset('images/default.jpg') }}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>Hello Admin,</p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      <small>Administrator</small>
    </div>
  </div>
  <ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="{{ Route::currentRouteNamed('dashboard') ? 'active' : ''}}">
      <a href="{{ url('admtbe/dashboard')}}">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
      </a>
    </li>
  </ul>
</section>
