<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@hasSection('title') @yield('title') | @endif {{ config('app.name', 'Diseturno') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    @livewireStyles
</head>
<body>

<body>
  <header>



  <nav class="navbar navbar-expand-md" style="background-color:#003660 !important">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   <img src="https://losangeles.udec.cl/wp-content/themes/portal/img/LogoUdeCLetrasBlancas.png" alt="" srcset="" height="100" width="250">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                    <!-- Left Side Of Navbar -->
					@auth()
                    <ul class="navbar-nav mr-auto">
						<!--Nav Bar Hooks - Do not delete!!-->
						<li class="nav-item">
                            <a href="{{ url('/boxes') }}" class="nav-link  text-white"><i class="fab fa-laravel text-info"></i> Boxes</a> 
                        </li>
						<li class="nav-item">
                            <a href="{{ url('/turnos') }}" class="nav-link text-white"><i class="fab fa-laravel text-info"></i> Turnos</a> 
                        </li>
						<li class="nav-item">
                            <a href="{{ url('/especialidads') }}" class="nav-link  text-white"><i class="fab fa-laravel text-info"></i> Especialidad</a> 
                        </li>
						<li class="nav-item">
                            <a href="{{ url('/empleados') }}" class="nav-link  text-white"><i class="fab fa-laravel text-info"></i> Empleados</a> 
                        </li>
						<li class="nav-item">
                            <a href="{{ url('/estudiantes') }}" class="nav-link  text-white"><i class="fab fa-laravel text-info"></i> Estudiantes</a> 
                        </li>
                    </ul>
					@endauth()

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
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
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

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #003660;">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="../img/Logowhite.png" alt="Logo" width="220" height="100"class="mt-2" style="margin-left: 10px;">
        </a>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="#" class="text-white" class="nav-link active">Inicio</a></li>
          <li class="nav-item"><a href="#" class="text-white" class="nav-link">Características</a></li>
        </ul>
        <button type="button" class="btn btn-warning ml-2">Cerrar Sesión</button>
      </div>
    </nav>
  </header>
    <div id="app">
   

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @livewireScripts
    <script type="module">
        const addModal = new bootstrap.Modal('#createDataModal');
        const editModal = new bootstrap.Modal('#updateDataModal');
        window.addEventListener('closeModal', () => {
           addModal.hide();
           editModal.hide();
        })
    </script>
</body>
</html>