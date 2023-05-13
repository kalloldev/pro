@extends('layouts.nav')


@section('main')
<!-- <div class="mt-3"><a class="btn btn-primary"href="registration"> registration</a></div> -->


<div id="app" class="bg-dark">
    <nav class=" navbar navbar-expand-sm navbar-light  navbar-dark">
        <div class="container ">
            <a class="navbar-brand" href="{{ url('') }}">
                <!-- {{ config('app.name', 'Project') }} -->
                Home
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    <!-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->

                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>

<div class="container">
    <div class="row mt-4">
        <div class="col-md-8">
            <div class="card bg-info">
                <div class="card-header">
                    <div class="card-title">
                        Student Dashboard
                    </div>
                </div>
                <div class="card-body">

                    <div class="mt-3"><a class="btn btn-secondary" href="registration"> registration</a></div>
                    <div class="mt-3"><a class="btn btn-secondary" href="/show-data"> Assign_Teacher</a></div>



                    <div class="mt-3"><a class="btn btn-secondary" href="/update_show">Show_Work_Update</a></div>






                </div>


            </div>

        </div>
    </div>
</div>
@endsection