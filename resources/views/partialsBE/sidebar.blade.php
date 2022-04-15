<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="#" class="brand-link">
    <img src="{{secure_asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
         class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Admin Manage</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item user-panel">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Account
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Info</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Sign Out</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="{{route('main.index')}}" class="nav-link">
            <i class="fas fa-bible nav-icon"></i>
            <p>
              Main
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('about.index')}}" class="nav-link">
            <i class="fas fa-bible nav-icon"></i>
            <p>
              About
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Contact
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('portfolio.index')}}" class="nav-link">
            <i class="fas fa-laptop-medical nav-icon"></i>
            <p>
              Portfolio
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('service.index')}}" class="nav-link">
            <i class="fas fa-laptop-medical nav-icon"></i>
            <p>
              Service
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
