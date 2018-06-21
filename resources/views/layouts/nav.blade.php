<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/html5reset-1.6.1.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/quiniela.css">
    <link rel="stylesheet" href="/css/responsive.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    <link rel="icon" href="/images/favicon@2x.png">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
            <section class="nav-left">
                    <a href="/" class="main-logo main-logo-sizeone">
                        <img src="images/main-logo.svg" />
                    </a>
            </section>

            <section class="header_quiniela main-menu-sizeone">

                    <div class="navbar margin-topone " id="menuDesktop">
                          <a class="active" href="quiniela">The pool</a>
                          <a href="misquinielas">My pools</a>
                          <a href="rules">World Cup Pool Rules</a>
                            @if ($data->id_rol == 1)
                                <a href="admin">admin</a>

                            @endif


                          {{-- <a href="resultados">Results</a>
                          <a href="proximos">Next matches</a> --}}

                       <button class="avatar">
                                  <i class="avatar fas fa-user-circle"></i>
                          </button>

                       <div class="dropdown user">
                            <button class="dropbtn">{{ Auth::user()->name }}
                                  <i class="fa fa-caret-down"></i>
                            </button>
                            <div class="dropdown-content">

                                      <a href="{{route('profile')}}">Profile</a>
                                      <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">Logout</a>
                            </div>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                          </div>
                      </div>
                      <div class="navbar margin-topone responsive" id="responsiveMenu">
                        <div class="dropdown options">
                            <button onclick="myFunction()" class="dropbtn">Options </button>
                              <div id="myDropdown" class="dropdown-content">
                                <a  class="active" href="quiniela">The pool</a>
                                <a href="misquinielas">My pools</a>
                                <a href="rules">World Cup Pool Rules</a>
                                  @if ($data->id_rol == 1)
                                      <a href="admin">admin</a>
                                  @endif
                                </div>
                        </div>
                        <!-- Boton de usuario -->
        				<div class="dropdown user">

        					<!-- Icono de perfil del usuario-->
        					<button class="avatar avatar-sizeone">
        						<i class="avatar fas fa-user-circle"></i>
        					</button>

        					<!-- Menú doropdown  -->
        					<div class="dropdown-content">
        						<a href="perfil">Profile</a>
        						<a href="{{ route('logout') }}" onclick="event.preventDefault();
        								document.getElementById('logout-form').submit();">Logout</a>
        					</div>

        					<!--funcionaloidad de boton logout-->
        					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        						@csrf
        					</form>

        				</div>
                </div>
                </section>
                <section class="quiniela">
                    <div class="container">
                        @yield('content')
                    </div>
                </section>
                @yield('footer');
</body>
</html>
