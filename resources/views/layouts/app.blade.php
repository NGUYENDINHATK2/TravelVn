<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>
    <div id="app" class=""> 
        <nav class="navbar navbar-expand-sm    menuindex flex-top">
            <div class="container-fluid   " style="align-items: center; ">
              <a class="navbar-brand menuindex__logo" href="/" ><b class=" menuindex__logo--text1">Travel</b><b class=" menuindex__logo--text2">vn</b></a>
              <button class="navbar-toggler menuindex__btnmenu   text-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                {{-- <span class="navbar-toggler-icon menuindex__btnmenu  " ></span> --}}

                <i class="fas fa-bars navbar__toggler--icon  "></i>
              </button>


              <div class="collapse navbar-collapse     menuindex_item" id="collapsibleNavbar">
                <ul class="navbar-nav menumain     ">
                  <li class="nav-item pe-5    ">
                    <a class="{{request()->is('/')? 'nav-link text-dark   main__a  main  ' : 'nav-link text-dark menu__item    '}} " href="#" ><b>Trang Chủ</b></a>
                  </li>
                  <li class="nav-item pe-5">
                    <a class="{{request()->is('a')? 'nav-link text-dark  main__a  main    ' : 'nav-link text-dark menu__item  '}} " href="#"><b>Về Chúng Tôi</b></a>
                  </li>
                  <li class="nav-item pe-5">
                    <a class="{{request()->is('b')? 'nav-link text-dark  main__a  main  ' : 'nav-link text-dark menu__item  '}} " href="#"><b>Khám Phá</b></a>
                  </li>   
                  <li class="nav-item pe-5">
                    <a class="{{request()->is('c')? 'nav-link text-dark   main__a main'  : 'nav-link text-dark menu__item  '}} " href="#"><b>Khám Phá</b></a>
                  </li>  
                </ul>
                  
                <ul class="navbar-nav ml-auto ">
                  <!-- Authentication Links -->
                  @guest
                      @if (Route::has('login'))
                          <li class="nav-item">
                              <a class="nav-link text-dark " href="{{ route('login') }}"><b>{{ __('Đăng Nhập') }}</b></a>
                          </li>
                      @endif

                      @if (Route::has('register'))
                          <li class="nav-item">
                              <a class="nav-link text-dark " href="{{ route('register') }}"><b>{{ __('Đăng Ký') }}</b></a>
                          </li>
                      @endif
                  @else
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link text-dark dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              <b>{{ Auth::user()->name }}</b>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                 <b> {{ __('Đăng Xuất') }}</b>
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
                        
          
       
     		
    
       
      

        <main class="">
            @yield('content')
        </main>

        <div>
            {{-- @include('layouts.footer') --}}
        </div>

        
    </div>
</body>
</html>
