<!DOCTYPE html>
<html>

  @section('head')

  @show
    
    <body>
    <section id="app" class="section">
      <div class="container">
        <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a class="navbar-item" href="{{ url('/home') }}">
                      <h1 class="title">Salon App</h1>
                    </a>

                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                      <span aria-hidden="true"></span>
                      <span aria-hidden="true"></span>
                      <span aria-hidden="true"></span>
                    </a>
                  </div>

                  <div id="navbarBasicExample" class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item" href="{{ url('/home') }}">Home</a>

                      <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                          More
                        </a>
                        @if (Route::has('login'))
                          <div class="navbar-dropdown">   
                        @else
                          <a href="{{ route('login') }}">Login</a>
                          <a href="{{ route('register') }}">Register</a>
                        @endif
                        </div>
                      </div>
                    </div>

                    <div class="navbar-end">
                      <div class="navbar-item">
                        <div class="buttons">
                          @if (Auth::guest())
                            <a class="button is-primary" href="{{ route('register') }}">
                                <strong>Register</strong>
                            </a>
                            <a class="button is-light" href="{{ route('login') }}">Login</a>
                          @else
                            <a class="button is-dark" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
    
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
            </nav>

            <div>
              @yield('content')
            </div>
            
      </div>
    </section>
    </body>
</html>