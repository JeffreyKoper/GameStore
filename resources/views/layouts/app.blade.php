<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>GameStore Homepage</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    </head>
    <body>

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="{{ route('home') }}">Game Store</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Over</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Winkel</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{route('allgames')}}">Alle Games</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="{{route('rating')}}">Best beoordeelde games</a></li>
                                <li><a class="dropdown-item" href="{{route('release')}}">Meest recent uitgebracht</a></li>
                            </ul>
                        </li>
                        
                        @auth
                        <li class="nav-item">
                            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                {{ __('Dashboard') }}
                            </x-responsive-nav-link>
                        </li>
                        <li class="nav-item">
                            <x-responsive-nav-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-responsive-nav-link>
                        </li>
                        <li class="nav-item">
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
                        </li>
                        @endauth
                        @guest
                        <li class="nav-item">
                            <div class="text-center"><x-responsive-nav-link :href="route('login')">inloggen </x-responsive-nav-link> </div>
                        </li>
                        <li class="nav-item">
                            <div class="text-center"><x-responsive-nav-link :href="route('register')">Registeren </x-responsive-nav-link></div>
                        </li>
                        @endguest
                    </ul>
                    <!-- Responsive Navigation Menu -->
                    
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <a href="" class="link-secondary"><i class="bi-cart-fill me-1"></i>
                            Winkelwagen</a>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-primary bg-gradient py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">

                    <p class="lead fw-normal text-white-50 mb-0">*Vertraging van game niet meegerekent bij bezorging.</p>
                </div>
            </div>
        </header>
    
        @yield('content')
        
        <!-- Footer-->
        <footer class="py-5 bg-primary bg-gradient">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Game Store 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>
