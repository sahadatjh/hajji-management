<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('assets/images/logo2.png')}}" alt=" Logo" cass="brand-image img-circle elevation-3" style="height: 40px; width: 50px;opacity: .8">
      <span class="brand-text font-weight-light">Tamanna Hajj Group</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
     {{-- @include('partials.sidebar-user') --}}


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
            
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Masterdata
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('packages.index')}}" class="nav-link">
                  <i class="fas fa-arrows-alt nav-icon"></i>
                  <p>Packages</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-star"></i>
              <p>
                Manage Hajji
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('pre-register-hajjis.index')}}" class="nav-link">
                  <i class="fas fa-arrows-alt nav-icon"></i>
                  <p>Pre Register Hajjis</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>