<div class="col-md-3 left_col menu_fixed">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="" class="site_title"> <span>Dashboard</span></a>
    </div>

    <div class="clearfix"></div>

    <div class="profile">
      <div class="profile_pic">
        <img src="{{ asset('backend/images/').'/'.Auth::user()->avatar }}" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Hai,</span>
        <h2>{{ Auth::user()->name }}</h2>
      </div>
    </div>

    <br />

    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
          <li class="{{ Route::is('backend.user.*') ? 'active' : '' }}">
            <a href="{{ route('backend.user') }}"><i class="fa fa-envelope"></i> Manage Account</a>
          </li>
          <li class="{{ Route::is('backend.gallery') ? 'active' : '' }}">
            <a href="{{ route('backend.gallery') }}"><i class="fa fa-envelope"></i> Gallery</a>
          </li>
      {{--
          <li class="{{ Route::is('account*') ? 'active' : '' }}">
            <a>
              <i class="fa fa-gear"></i> General <span class="fa fa-chevron-down"></span>
            </a>
            <ul class="nav child_menu" style="{{ Route::is('general.*') ? 'display: block;' : '' }}">
              <li class="{{ Route::is('general.menu') ? 'current-page' : '' }}"><a href="{{ route('general.menu') }}">Menu</a></li>
              <li class="{{ Route::is('general.email') ? 'current-page' : '' }}"><a href="{{ route('general.email') }}">Email</a></li>
            </ul>
          </li>
      --}}
        </ul>
      </div>
    </div>

    {{-- <div class="sidebar-footer hidden-small">
      <a href="" data-toggle="tooltip" data-placement="top" title="Users">
        <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
      </a>
      <a href="" data-toggle="tooltip" data-placement="top" title="Inbox">
        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
      </a>
      <a href="" data-toggle="tooltip" data-placement="top" title="Profile">
        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
      </a>
      <a href="" data-toggle="tooltip" data-placement="top" title="Logout">
        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
      </a>
    </div> --}}
  </div>
</div>
