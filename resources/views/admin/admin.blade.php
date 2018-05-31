<!DOCTYPE html>
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<![endif]-->
<html lang="en">

<head>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width" name="viewport">
	<meta charset="utf-8">
	<title>Miomo</title>

	<link rel="stylesheet" href="css/html5reset-1.6.1.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/quiniela.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

	<link rel="icon" href="images/favicon@2x.png">
</head>

<body>
  <div class="container">

		<section class="nav-left">
			<a href="/" class="main-logo main-logo-sizeone">
				<img src="images/main-logo.svg" />
			</a>

		</section>



		<section class="header_quiniela main-menu-sizeone">

			<div class="navbar margin-topone" id="menuDesktop">
	  			<a href="quiniela">The pool</a>
					@if ($data->id_rol == 1)
						<a class="active" href="admin">admin</a>
					@endif
	  			{{-- <a href="resultados">Resultados</a>
	  			<a href="proximos">Próximos partidos</a> --}}

	  		 <button class="avatar">
	  					<i class="avatar fas fa-user-circle"></i>
	  			</button>

	  		 <div class="dropdown user">
	    			<button class="dropbtn">{{ Auth::user()->name }}
	      				<i class="fa fa-caret-down"></i>
	    			</button>
	    			<div class="dropdown-content">

		      				<a href="perfil">Profile</a>
		      				<a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
	    			</div>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
	  			</div>
	  		</div>
	  		<div class="navbar margin-topone responsive" id="responsiveMenu">
				<div class="dropdown">
					<button onclick="myFunction()" class="dropbtn">Resultados </button>
					  <div id="myDropdown" class="dropdown-content">
					    <a  class="active" href="quiniela">La quiniela</a>
					    {{-- <a href="resultados">Resultados</a>
	  					<a href="proximos">Próximos partidos</a> --}}
	  				  </div>
				</div>
		</div>
	  	</section>

    <section class="quiniela">
      <div class="container">
        <h1>Administrator Console</h1>
        {{-- @include('sections.containerResultados') --}}
        <div class="quiniela-container">
          <div class="contenido">

          <div class="titulo-quiniela">
            <img src="images/copa.png" alt="">
              <!-- <p>
              <span class="tam1">football soccer</span>
              <span class="tam2">champions league </span>
              </p> -->
            <div style="" class="navbar margin-topone" id="menuDesktop">
            @foreach ($jornadas as $jornada)
              <h4><span class="tam3"><a href="admin/{{$jornada->id}}">{{$jornada->descripcion}}</a></span>
								&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;
								@if ($jornada->status->id == 3)
									<span class="tam3"><a href="admin/activar/{{$jornada->id}}">Activate</a></span>
								@else
									<span class="tam3"><a href="admin/activar/{{$jornada->id}}">Desactivate</a></span>
								@endif
								&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;
								@if ($jornada->status->id == 1 || $jornada->status->id == 3)
									<span class="tam3"><a href="admin/abrir/{{$jornada->id}}">Close</a></span>
								@else
									<span class="tam3"><a href="admin/abrir/{{$jornada->id}}">Open</a></span>
								@endif
								&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;&thinsp;
								<span class="tam3"><a href="/puntosjornada/{{$jornada->id}}">Calculate</a></span>
							</h4>
            @endforeach
            </div>
          </div>
      </div>
      </div>
    </div>
    </section>
  </div>

  <footer>
		<div class="container">
			<a href="#"><img src="images/secondary-logo.svg" /></a>
			<ul>
				{{-- <li><a href="terminos">Términos y condiciones</a></li>
				<li><a href="privacidad">Política de privacidad</a></li> --}}
			</ul>
			<p>Copyright © miomo.net</p>
		</div>
	</footer>

	<script src="js/quiniela.js" type='text/javascript'></script>

</body>
</html>
