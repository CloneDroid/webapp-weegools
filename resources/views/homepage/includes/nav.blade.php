<header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="index.html">
            <img src="{{ asset('assets/favicon.png') }}" width="40" alt="Weegool's Grill Haus Logo" loading="lazy"
            style="margin-top: -3px;" />
            {{ config('app.name') }}
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="/">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="services.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Explore</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="about.html">About Us</a>
                  <a class="dropdown-item" href="/menus">Menu</a>
                  <a class="dropdown-item" href="news.html">Announcements</a>        
                </div>
              </li>
              @if(Auth::check() && Auth::user()->user_type === 'Admin' or Auth::check() && Auth::user()->user_type === 'Establishment Clerk')
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="services.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="/admin" target="_blank">Dashboard</a>
                  <a class="dropdown-item" href="services.html">My Account</a>
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                </div>
              </li>
              @endif
            </ul>

            <ul class="navbar-nav ml-auto">
              <li class="nav-item cta-btn mx-1">
                <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
              </li>
              @guest 
              <li class="nav-item cta-btn mx-1">
							  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						  </li>
              @endguest
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->