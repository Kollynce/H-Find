<nav class="navbar navbar-expand-lg navbar-dark bg-primary1 sticky-top">
    <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'H-Find') }}
    </a>

    <button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#navbarSupportContent">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/property') }}">Properties</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Agents</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="padding-right: 20px;" href="{{ url('/contact') }}">Contact Us</a>
            </li>

            @if(Auth::guest())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <img src="/uploads/avatar/{{ Auth::user()->avatar }}" alt="pic" style="width: 32px; height: 32px; position: absolute; top: 10px; bottom: 10px; border-radius: 50%;">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="position: relative; padding-left: 40px;">

                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right icon pb-2" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item icon-notification pb-2" href="#">  Notifications</a>
                        <a class="dropdown-item icon-profile pb-2" href="{{url('/profile')}}">  Profile</a>
                        <a class="dropdown-item icon-settings pd-2" href="{{route('users.index')}}">  Manage</a>
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item icon-lock" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endif
        </ul>

    </div>
</nav>

