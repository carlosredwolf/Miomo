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

	<link rel="stylesheet" href="{{asset('css/html5reset-1.6.1.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/quiniela.css')}}">
	<link rel="stylesheet" href="{{asset('css/responsive.css')}}">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

	<link rel="icon" href="{{asset('images/favicon@2x.png')}}">
</head>

<body>

	<!-- Sidebars -->
	<section class="nav-left">
		<a href="/" class="main-logo main-logo-sizeone">
			<img src="{{asset('images/main-logo.svg')}}" />
		</a>

	</section>

	<section class="header_quiniela main-menu-sizeone">

		<div class="navbar margin-topone" id="menuDesktop">
  			<a href="{{url('quiniela')}}">The pool</a>
  			<a href="{{url('resultados')}}">Results</a>
  			<a class="active" href="{{url('proximos')}}">Next matches</a>

  			<button class="avatar">
  					<i class="avatar fas fa-user-circle"></i>
  			</button>

  			<div class="dropdown user">
    			<button class="dropbtn">{{Auth::user()->name}}
      				<i class="fa fa-caret-down"></i>
    			</button>
    			<div class="dropdown-content">

	      				<a href="{{url('perfil')}}">Profile</a>
	      				<a href="{{route('logout')}}">Logout</a>
    			</div>
  			</div>
  		</div>
  		<div class="navbar margin-topone responsive" id="responsiveMenu">
			<div class="dropdown options">
				<button onclick="myFunction()" class="dropbtn">Options</button>
				  <div id="myDropdown" class="dropdown-content">
				    <a href="{{url('quiniela')}}">The pool</a>
				    <a href="{{url('resultados')}}">Results</a>
  					<a class="active" href="{{url('proximos')}}">Next matches</a>
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

	</section>

	<section class="quiniela proxPartidos">
		<div class="container">
			<h1>Next matches</h1>

			<div class="quiniela-container">

				<div class="contenido">

				<div class="titulo-proxPartidos">
					<img src="{{asset('images/copa.png')}}" alt="">
					<h3>{{$name}}</h3>
				</div>
				<!-- Day -->
				<div class="proxPContenedor">
	          @foreach ($partidos as $partido)
	            <div class="encuentro">
	              @php
	              $id1 = $partido->local->id;
	              $id2 = $partido->visitante->id;
	              $route1 = 'images/equipos/'.$id1.'.png';
	              $route2 = 'images/equipos/'.$id2.'.png';
	              @endphp
								<div>
	 								<img src="{{asset($route1)}}">
	 							</div>
								<div class="horarios">
		  							<h2>{{date('M/d/Y',strtotime($partido->fecha_partido))}}<span>{{date("H:i A", strtotime($partido->hora_partido))}} CDT</span></h2>
		  							<h3> <span class="nomEquipo1">{{$partido->local->nombre}}</span>  VS  <span class="nomEquipo2">{{$partido->visitante->nombre}}</span></h3>
		  					</div>
								<div>
	 								<img src="{{asset($route2)}}">
	 							</div>
	            </div>
	          @endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>

	<footer>
		<div class="container">
			<a href="/"><img src="../images/secondary-logo.svg" /></a>
			<ul>
				<!--<li><a href="terminos">Términos y condiciones</a></li>
				<li><a href="privacidad">Política de privacidad</a></li>-->
			</ul>
			<p>Copyright © miomo.net</p>
			<p><a href="mailto:contact@miomo.net" style="color:#ffffff; text-decoration:none;" target="_blank">contact@miomo.net</a></p>
		</div>
	</footer>


	<script>
	<!-- Make SPAN clickable on mobile devices -->
		$('span').each(function(){
			this.onclick = function() {}
		});

	// Shrink Logo
	$(function(){
	 var shrinkLogo = 10;
	  $(window).scroll(function() {
		var scroll = getCurrentScroll();
		  if ( scroll >= shrinkLogo ) {
			   $('.main-logo').addClass('main-logo-sizetwo');
			   $('.main-logo').removeClass('main-logo-sizeone');
			   $('.header_quiniela').addClass('main-menu-sizetwo');
			   $('.header_quiniela').removeClass('main-menu-sizeone');
			   $('.header_quiniela .navbar').addClass("margin-toptwo")
			   $('.header_quiniela .navbar').removeClass("margin-topone");
			}
			else {
			$('.main-logo').addClass('main-logo-sizeone');
			$('.main-logo').removeClass('main-logo-sizetwo');
			$('.header_quiniela').addClass('main-menu-sizeone');
			$('.header_quiniela').removeClass('main-menu-sizetwo');
			$('.header_quiniela .navbar').addClass("margin-topone");
			$('.header_quiniela .navbar').removeClass("margin-toptwo");
			}
	  });
	function getCurrentScroll() {
		return window.pageYOffset;
		}

		// $(".header_quiniela .navbar .avatar i:hover").clic(function(){
		// 	$(".header_quiniela .dropdown:hover .dropdown-content").addClass("dropDown");
		// });
		 // $(document).on("click", ".square-radio", function () {
   //     		 $(this).toggleClass("square-radio--clicked");
   //  	 });
   		$("#bloqueoDiv").click(function(){
			closeNav();
		});
	});

	<!-- Sidenav -->
	function openNav() {
		document.getElementById("sidenav").style.width = "100%";
	}

	function closeNav() {
		document.getElementById("sidenav").style.width = "0";
	}

	<!-- Modal Boxes -->
	var modal = document.getElementsByClassName('modal-box');
	var loginmodal = document.getElementById('login-modal');
	var loginbtn = document.getElementById("login-btn");
	var closelogin = document.getElementById("close-login-btn");

	loginbtn.onclick = function() {
		loginmodal.style.display = "block";
	}

	closelogin.onclick = function() {
		loginmodal.style.display = "none";
	}

	window.onclick = function(event) {
		if (event.target == loginmodal) {
			loginmodal.style.display = "none";
		}
	}

	</script>
</body>
</html>
