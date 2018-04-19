<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav">
            @guest
                <li><a class="nav-link" href="{{ route('employers') }}">Employers</a></li>
                <li><a class="nav-link" href="{{ route('students') }}">Students</a></li>
            @else
                <li><a class="nav-link" href="#">Link</a></li>
            @endguest
            </ul>






            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Authentication Links -->
                @guest
                    <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @else

                    <li class="nav-item dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        @can('users.index')
                            <li><a class="dropdown-item" href="{{ route ('admin.users.index') }}">Users</a></li>
                        @endcan
                        @can('roles.index')
                            <li><a class="dropdown-item" href="{{ route ('admin.roles.index') }}">Roles</a></li>
                        @endcan
                        @can('permissions.index')
                            <li><a class="dropdown-item" href="{{ route ('admin.permissions.index') }}">Permissions</a></li>
                        @endcan
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a class="dropdown-item" href="#">One more separated link</a></li>
                      </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
            </ul>
        </div>
    </div>
</nav>