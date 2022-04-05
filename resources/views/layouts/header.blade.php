<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-dark" style="background: rgb(255,223,0);
background: linear-gradient(90deg, rgba(255,223,0,1) 1%, rgba(0,0,0,1) 99%);">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 pt-4" style="background: rgb(0,0,0);
  background: linear-gradient(90deg, rgba(0,0,0,1) 4%, rgba(255,223,0,1) 89%);">
    <!-- Brand Logo -->
    <a href="/" class="pt-3">
      <img src="/images/AdminVentas.png" alt="LogoStudio" class="brand-image img-circle elevation-3"
           style="display: block;opacity: .8;width: 64%;margin: auto;">
      {{-- <span class="brand-text font-weight-light"></span> --}}
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/images/default-person.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info pt-2"> Alexander Pierce</div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="/blog" class="nav-link">
                <i class="nav-icon fa fa-newspaper" aria-hidden="true"></i>
                <p>Testimonial</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/artistas" class="nav-link">
                <i class="nav-icon fa fa-users"></i>
                <p>Artistas</p>
                </a>
            </li>
            <!-- <li class="nav-item">
                <a href="/carusel" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>Carusel</p>
                </a>
            </li> -->
            <li class="nav-item">
                <a href="/eventos" class="nav-link">
                <i class="nav-icon fa fa-calendar-check" aria-hidden="true"></i>
                <p>Eventos</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/productos" class="nav-link">
                <i class="nav-icon fa fa-cubes" aria-hidden="true"></i>
                <p>Productos</p>
                </a>
            </li>
            {{-- <li class="nav-item">
                <a href="/videos" class="nav-link">
                <i class="nav-icon fa fa-video" aria-hidden="true"></i>
                <p>Videos</p>
                </a>
            </li> --}}
        </ul>
      </nav>
    </div>
</aside>
