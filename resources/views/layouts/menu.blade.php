
<nav class="navbar navbar-expand-lg navbar-light bg-light" style=" height:200px;
background-image: url('https://cdn.freelance.ru/img/portfolio/pics/00/21/CA/2214477.jpg?mt=ee96da18'); background-size: contain;
">
    <div class="top-left links" >
        @if (Route::has('login'))
            <a class="nav-link" href="/">HOME</a>
    </div>
    <div class="top-right links">
    @auth
        <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"
                             onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <center style="cursor:pointer">{{ __('Logout') }}</center>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
    @endif
</nav>
<nav  class="navbar navbar-default" role="navigation" style="margin-top:-70px;">
    {!! menu('main','bootstrap') !!}
</nav>
