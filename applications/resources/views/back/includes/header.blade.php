<a href="{{ url('')}}" class="logo">
  <!-- mini logo for sidebar mini 50x50 pixels -->
  <span class="logo-mini"><b>TBE</b></span>
  <!-- logo for regular state and mobile devices -->
  <span class="logo-lg" style="font-size:18px;"><b>Toby's Estate</b> Indonesia</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
  <!-- Sidebar toggle button-->
  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- User Account: style can be found in dropdown.less -->
      <li class="dropdown user user-menu">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{ asset('images/default.jpg') }}" class="user-image" alt="User Image">
          <span class="hidden-xs">
            Hello Admin,
          </span>
        </a>
        <ul class="dropdown-menu">
          <!-- User image -->
          <li class="user-header">
            <img src="{{ asset('images/default.jpg') }}" class="img-circle" alt="User Image">
            <p>
              Hello Admin,
              <small>Administrator</small>
            </p>
          </li>

          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
              <a href="" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
              <a href="" class="btn btn-default btn-flat">Sign out</a>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
