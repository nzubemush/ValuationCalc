<div class="d-flex flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm sticky-top">
    {{-- <h5   href="{{ route('/') }}">{{ config('app.name', 'ValuationCalc') }}</h5> --}}
    <nav role='navigation' class="my-0 mr-auto font-weight-normal">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>

            <ul id="menu">

                <a href="/"><li>Home</li></a>
                <hr>
                <a href="http://127.0.0.1:8000/categories/4"><li>Actuarial Principles and Practice</li></a>
                <hr>
                <a href="http://127.0.0.1:8000/categories/5"><li>Economics</li></a>
                <hr>
                <a href="http://127.0.0.1:8000/categories/6"><li>Financial Management</li></a>
                <hr>
                <a href="http://127.0.0.1:8000/categories/7"><li>Financial Risk Management</li></a>
                <hr>
                <a href="http://127.0.0.1:8000/categories/8"><li>International Finance</li></a>
                <hr>
                <a href="http://127.0.0.1:8000/categories/9"><li>Investment Banking and Financial Services</li></a>
                <hr>
                <a href="http://127.0.0.1:8000/categories/10"><li>Management Accounting</li></a>
                <hr>
                <a href="http://127.0.0.1:8000/categories/11"><li>Portfolio Management</li></a>
                <hr>
                <a href="http://127.0.0.1:8000/categories/12"><li>Project Management</li></a>
                <hr>
                <a href="http://127.0.0.1:8000/categories/13"><li>Quantitative Methods</li></a>
                <hr>
                <a href="http://127.0.0.1:8000/categories/14"><li>Security Analysis</li></a>
                <hr>
                <a href="http://127.0.0.1:8000/categories/15"><li>Strategic Financial Management</li></a>

            </ul>
        </div>
    </nav>

    <nav class="my-2 my-md-0">
        <a class="p-2 text-dark navtext" style="font-size: 13px;" href="#">SUBSCRIBE</a>
        <a class="p-2 text-dark navtext" style="font-size: 13px" href="#">CONTACT</a>
    </nav>
    @guest

        <a class="btn text-dark mx-2 navitext" href="{{ route('login') }}">{{ __('Login') }}</a>

        @if (Route::has('register'))

            <a class="btn text-dark navitext" href="{{ route('register') }}">{{ __('Register') }}</a>

        @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
    @endguest
</div>
