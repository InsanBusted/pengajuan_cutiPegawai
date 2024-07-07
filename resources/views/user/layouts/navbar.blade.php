<header class="header_section long_section px-0">
  <nav class="navbar navbar-expand-lg custom_nav-container ">
      <a class="navbar-brand" href="index.html">
          <span>
              Pengajuan Cuti Pegawai
          </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class=""> </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav   ">
                  <li class="nav-item active">
                      <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('about') }}"> About</a>
                  </li>
                  @auth
                  @if (Auth::user()->hasRole('pegawai'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('formCuti') }}">Form Pengajuan Cuti</a>
                  </li>
                  @endif
                  @endauth
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                  </li>
              </ul>
          </div>
          <div class="quote_btn-container">
              @auth
                  <a href="{{ route('profile.edit') }}">
                    <span>
                      Profile
                    </span>
                  </a>
                  @if (Auth::user()->hasRole('pegawai'))
                  <a href="{{ route('pegawai') }}">
                    <span>
                      Dashboard
                    </span>
                  </a>
                  @elseif (Auth::user()->hasRole('admin'))
                  <a href="{{ route('dashboard') }}">
                    <span>
                      Dashboard
                    </span>
                  </a>
                  @endif
                  <form method="POST" action="{{ route('logout') }}">
                    @csrf
                  <a href="route('logout')"
                  onclick="event.preventDefault();
                              this.closest('form').submit();">
                    <span>
                      Logout
                    </span>
                  </a>
              </form>
              @endauth
              @guest
                      <a href="{{ route('login') }}" >Login</a>
                      <a href="{{ route('register') }}" >
                      Register</a>
      
                  @endguest
              
              <form class="form-inline">
                <button class="my-2 btn my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </div>
      </div>
  </nav>
</header>