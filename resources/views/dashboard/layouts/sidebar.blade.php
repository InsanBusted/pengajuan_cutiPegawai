<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Sidebar -->
  <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
              <img src="{{ asset('assets/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
          </div>
          @auth
            <div class="info">
                <a href="#" class="d-block">{{ strtoupper(Auth::user()->name) }}</a>
                <p class="text-primary">Role: {{ Auth::user()->roles->pluck('name')->first() }}</p>
            </div>
            @endauth
            @guest
                <a href="" class="d-block">Guestrts</a>
            @endguest
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                  aria-label="Search">
              <div class="input-group-append">
                  <button class="btn btn-sidebar">
                      <i class="fas fa-search fa-fw"></i>
                  </button>
              </div>
          </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
              data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
              <li class="nav-item menu-open">
                  
                  <ul class="nav nav-treeview">
                      
                    @if (auth()->user()->hasRole('admin'))
                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                      <li class="nav-item">
                          <a href="{{ route('divisi.index') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Divisi</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('pengajuanCuti.index') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Pengajuan Cuti</p>
                          </a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('jatahCuti.index') }}" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Jatah Cuti</p>
                          </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{ route('pegawai') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pegawai</p>
                        </a>
                    </li>
                      <li class="nav-item">
                        <a href="{{ route('user.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Users</p>
                        </a>
                    </li>
                    @elseif (auth()->user()->hasRole('pegawai'))
                    <li class="nav-item">
                        <a href="{{ route('pegawai') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('pengajuanCuti.index') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Pengajuan Cuti</p>
                        </a>
                    </li>
                    @endif
                  </ul>
              </li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>