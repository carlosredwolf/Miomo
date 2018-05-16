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
	<!-- <link rel="stylesheet" href="css/responsive.css">-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

	<link rel="icon" href="images/favicon@2x.png">
</head>

<body>

	<!-- Menu Overlay -->
	<section class="sidenav" id="sidenav">
		<div onclick="closeNav()" class="close-menu">
			<img src="images/cross.svg" />
		</div>
		<div class="mini-container">
			<ul>
				<li>
					<a href="/">
						Inicio
					</a>
				</li>
				<li>
					<a href="#">
						Regístrate
					</a>
				</li>
				<li>
					<a href="#">
						Sobre nosotros
					</a>
				</li>
				<li>
					<a href="quiniela">
						Quiniela
					</a>
				</li>
				<li>
					<a href="#">
						Términos y Condiciones
					</a>
				</li>
			</ul>
		</div>
	</section>



	<!-- Sidebars -->
	<section class="nav-left">
		<a href="/" class="main-logo main-logo-sizeone">
			<img src="images/main-logo.svg" />
		</a>

	</section>

	<section class="header_quiniela main-menu-sizeone">

		<div class="navbar margin-topone" id="menuDesktop">
  			<a href="/quiniela">La quiniela</a>
  			<a href="/resultados">Resultados</a>
  			<a class="active" href="/proximos">Próximos partidos</a>

  			{{-- <button class="avatar">
  					<i class="avatar fas fa-user-circle"></i>
  			</button>

  			<div class="dropdown user">
    			<button class="dropbtn">John Doe
      				<i class="fa fa-caret-down"></i>
    			</button>
    			<div class="dropdown-content">

	      				<a href="#">Perfil</a>
	      				<a href="#">Salir</a>
    			</div>
  			</div> --}}
  		</div>
  		<div class="navbar margin-topone responsive" id="responsiveMenu">
			<div class="dropdown">
				<button onclick="myFunction()" class="dropbtn">Próximos partidos </button>
				  <div id="myDropdown" class="dropdown-content">
				    <a href="quiniela">La quiniela</a>
				    <a href="resultados">Resultados</a>
  					<a class="active" href="proximos">Próximos partidos</a>
  				  </div>
			</div>

	</section>

	<section class="quiniela proxPartidos">
		<div class="container">
			<h1>Próximos Partidos</h1>

			<div class="quiniela-container">

				<div class="contenido">

				<div class="titulo-proxPartidos">
					<img src="images/copa.png" alt="">
					<h3>JORNADAS {{$id}} DE {{$numJ}}</h3>
				</div>
				<!-- Day -->
				<div class="proxPContenedor">
					@foreach ($resultados as $grupo)
	          {{-- <h2>GRUPO {{$grupo[0]->tournament_round->group}}</h2> --}}
	          @foreach ($grupo as $partido)
	            <div class="encuentro">
	              @php
	              $id1 = explode(":", $partido->competitors[0]->id);
	              $id2 = explode(":", $partido->competitors[1]->id);
	              $route1 = 'images/equipos/'.$id1[2].'.png';
	              $route2 = 'images/equipos/'.$id2[2].'.png';
	              @endphp
								<div>
	 								<img src="{{asset($route1)}}">
	 							</div>
								<div class="horarios">
		  							<h2>{{date('d/M/Y',strtotime($partido->scheduled))}}<span>{{date("H:i A", strtotime('-5 hours',strtotime($partido->scheduled)))}}</span></h2>
		  							<h3> <span class="nomEquipo1">{{$partido->competitors[0]->name}}</span>  VS  <span class="nomEquipo2">{{$partido->competitors[1]->name}}</span></h3>
		  					</div>
								<div>
	 								<img src="{{asset($route2)}}">
	 							</div>
	            </div>
	          @endforeach
	        @endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>

	<footer>
		<div class="container">
			<a href="/"><img src="images/secondary-logo.svg" /></a>
			<ul>
				<li><a href="terminos">Términos y condiciones</a></li>
				<li><a href="privacidad">Política de privacidad</a></li>
			</ul>
			<p>Copyright © miomo.mx</p>
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
