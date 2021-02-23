 <!-- Sidebar -->
 <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset ('img/woman.png')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Admin</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{ route('admin.dashboard')}}" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p>
              DashBoard
            </p>
          </a>
        </li>
        <li class="nav-item">
        <a href="{{ route('admin.penyakit')}}" class="nav-link">
            <i class="nav-icon far fa-image"></i>
            <p>
             List Penyakit
            </p>
          </a>
        </li>
            <li class="nav-item">
              <a href="{{ route('admin.datauser')}}" class="nav-link">
                  <i class="nav-icon far fa-image"></i>
                  <p>
                    List Data User
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.edit')}}" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>
                      Edit
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('password.request') }}" class="nav-link">
                      <i class="nav-icon far fa-image"></i>
                      <p>
                       Ubah Password
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                  </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->