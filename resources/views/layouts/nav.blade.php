<div class="d-flex flex-md-row align-items-center py-2 px-md-4 border-bottom shadow-sm sticky-top" style="background-color: #324A5E;">

    <ul class="navbar-nav ml-auto">
        <li class=" my-md-0">
            <a class="p-2 text-dark navtext" style="font-size: 13px;" href="{{ route('contact-us') }}">CONTACT US</a>
        @guest

            <a class="btn mx-2 navitext" href="{{ route('login') }}">{{ __('Login') }}</a>

            @if (Route::has('register'))

            <a class="btn navitext" href="{{ route('register') }}">{{ __('Register') }}</a>

            @endif
            @else

            <a class="p-2 text-dark navtext" style="font-size: 13px;" href="#">HISTORY</a>

            <a class="p-2 text-dark navtext dropdown-toggle" href="" style="font-size: 13px; text-transform: uppercase;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->firstname }}
            </a>

                    <div class="dropdown-menu dropdown-menu-right">

                        <a class="p-2 text-dark navtext dropdown-item" style="font-size: 13px;" href="{{url('user')}}">
                            <i class="fa fa-user-circle"></i> Profile
                        </a>

                        <a class="p-2 text-dark navtext dropdown-item" style="font-size: 13px;" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i>{{ __(' Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>

        @endguest
        </li>

    </ul>
    </div>
