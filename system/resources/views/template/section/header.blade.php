  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="{{url('login')}}" class="dropdown-item">
            <i class="fas fa-login-out"></i> Log Out
          </a>
          <a href="{{url('setting')}}" class="dropdown-item">
            <i class="fas fa-login-cog"></i> Setting
          </a>
      </li>
    </ul>
  </nav>