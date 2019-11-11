<div class="d-flex flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom shadow-sm sticky-top">
    {{-- <h5   href="{{ route('/') }}">{{ config('app.name', 'ValuationCalc') }}</h5> --}}
    <nav role='navigation' class="my-0 mr-auto font-weight-normal">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>

            <ul id="menu">

                <a href="/"><li style="padding-left: 10px;">Home</li></a>
                <hr>
                <a href="http://127.0.0.1:8000/categories/4"><li style="padding-left: 10px;">Actuarial Principles and Practice</li></a>
                <hr>
                <a href="http://127.0.0.1:8000/categories/5"><li style="padding-left: 10px;">Economics</li></a>
                <hr>
                <a href="http://127.0.0.1:8000/categories/6"><li style="padding-left: 10px;">Financial Management</li></a>
                <hr>
                <a href="http://127.0.0.1:8000/categories/7"><li style="padding-left: 10px;">Financial Risk Management</li></a>
                <hr>
                <a href="http://127.0.0.1:8000/categories/8"><li style="padding-left: 10px;">International Finance</li></a>
                <hr>
                <a href="http://127.0.0.1:8000/categories/9"><li style="padding-left: 10px;">Investment Banking and Financial Services</li></a>
                <hr>
                <a href="http://127.0.0.1:8000/categories/10"><li style="padding-left: 10px;">Management Accounting</li></a>
                <hr>
                <a href="http://127.0.0.1:8000/categories/11"><li style="padding-left: 10px;">Portfolio Management</li></a>
                <hr>
                <a href="http://127.0.0.1:8000/categories/12"><li style="padding-left: 10px;">Project Management</li></a>
                <hr>
                <a href="http://127.0.0.1:8000/categories/13"><li style="padding-left: 10px;">Quantitative Methods</li></a>
                <hr>
                <a href="http://127.0.0.1:8000/categories/14"><li style="padding-left: 10px;">Security Analysis</li></a>
                <hr>
                <a href="http://127.0.0.1:8000/categories/15"><li style="padding-left: 10px;">Strategic Financial Management</li></a>

            </ul>
        </div>
    </nav>

    <ul class="navbar-nav ml-auto">
        <li class=" my-md-0">
            <a class="p-2 text-dark navtext" style="font-size: 13px;" href="#">SUBSCRIBE</a>

            <a class="p-2 text-dark navtext" style="font-size: 13px" href="#">CONTACT</a>

        @guest

            <a class="btn text-dark mx-2 navitext" href="{{ route('login') }}">{{ __('Login') }}</a>

            @if (Route::has('register'))

            <a class="btn text-dark navitext" href="{{ route('register') }}">{{ __('Register') }}</a>

            @endif
            @else

            <a class="p-2 text-dark navtext" style="font-size: 13px;" href="#">HISTORY</a>

            <a class="p-2 text-dark navtext dropdown-toggle" href="" style="font-size: 13px; text-transform: uppercase;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> <i class="fa fa-user"></i>
                {{ Auth::user()->firstname }}
            </a>

                    <div class="dropdown-menu dropdown-menu-right">

                        <a class="p-2 text-dark navtext dropdown-item" style="font-size: 13px;" href="{{url('user')}}">
                            Profile
                        </a>

                        <a class="p-2 text-dark navtext dropdown-item" style="font-size: 13px;" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>

        @endguest
        </li>

    </ul>
    </div>
