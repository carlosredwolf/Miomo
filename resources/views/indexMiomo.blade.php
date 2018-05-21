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
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>Miomo</title>

	<link rel="stylesheet" href="css/html5reset-1.6.1.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/videoMedia.css">
	<link rel="stylesheet" href="css/responsive.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<link rel="icon" href="images/favicon@2x.png">
</head>

<body>

	<!-- Menu Overlay -->
	<div id="bloqueoDiv"></div>
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
					<a href="#formRegistro">
						Regístrate
					</a>
				</li>
				<li>
					<a href="#aboutMiomo">
						Sobre <span>nosotros</span>
					</a>
				</li>
				<li>
					<a href="quiniela">
						Quiniela
					</a>
				</li>
				<li>
					<a href="terminos">
						Términos <span>y Condiciones</span>
					</a>
				</li>
			</ul>
		</div>

	</section>

	<!-- Login Modal -->
	<div id="login-modal" class="modal-box">
		<div class="modal-content">
			<div>
			<span class="close-btn" id="close-login-btn"></span>
			<ul>
				<li class="login-form-title">
					<h2>Inicia Sesión</h2>
				</li>
				<li class="login-form-form">
					<form>
						<ul>
							<li>
								<input type="text" name="" id="" value="" placeholder="Usuario">
							</li>
							<li >
								<input type="text" name="" id="" value="" placeholder="Contraseña">
							</li>
							<li>
								<a class="btn-light" href="#">Iniciar Sesión</a>
							</li>
						</ul>
					</form>
				</li>
			</ul>
			</div>
		</div>
	</div>


	<!-- Sidebars -->
	<section class="nav-left">
		<a href="/" class="main-logo main-logo-sizeone">
			<img src="images/main-logo.svg" />
		</a>

		<ul>

			<li><a href="#formRegistro">regístrate</a></li>
			<li><span id="login-btn">inicia sesión</span></li>
		</ul>
	</section>

<section class="nav-right">
		 <div class="menu" onclick="openNav()">
			<span class="first"></span>
			<span class="second"></span>
			<span class="third"></span>
		</div>

		<ul>
			<li><a href="https://www.facebook.com/Miomo2/">Facebook</a></li>
		</ul>
	</section>

	<section class="banner">
		<div class="linkEncuesta">
			<a href="https://www.surveymonkey.com/r/7Q3DCCL" >AYÚDANOS CON UNA BREVE ENCUESTA</a>
		</div>
		<div class="container top-illustration">
			<ul class="banner-info">
				<li>
					<!-- <h1>regístrate</h1> -->
					<h1>Regístrate</h1>
				</li>
				<li>
					<h4>y obtén grandes beneficios</h4>
				</li>
				<li>
					<a class="btn-dark" href="#formRegistro">regístrate</a>
				</li>
				<li>
					<p>Participa en una quiniela gratis,
					<span>¡Sólo tienes que registrarte!</span></p>
				</li>
				<li class="extra">
					<p>Obtén mejores  probabilidades a la hora de hacer tu apuesta! </p>
					<p>Sólo aquí vas a encontrar los mejores momios y tendrás la opción de escoger de entre ellos el que más te convenga. Primera página del mundo en tener apuestas deportivas en ETH y BTC </p>
				</li>
			</ul>

<div class="proxPartidos">
<div class="marco">
<div class="cProxPartidos">
	<h2>Próximos Partidos</h2>
	<p>
	<!-- <span class="tam1">football soccer</span>
	<span class="tam2">champions league </span>
	 --><span class="tam3">JORNADA 1 DE 3</span>

	</p>
</div>
<!-- Slideshow container -->
<div class="slideshow-container2">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
  	<div>
  		<img src="images/equipos/4694.png" >

  	</div>
  	<div class="horarios">
  		<h2>14 JUNIO 2018<span>10:00 A.M.</span></h2>

		<h3> <span class="nomEquipo1">RUSIA</span>  VS  <span class="nomEquipo2">ARABIA SAUDITA</span></h3>
  	</div>
  	<div>
  		<img src="images/equipos/4778.png" >
  	</div>
</div>

<div class="mySlides fade">
  <div>
  		<img src="images/equipos/4758.png" >

  	</div>
  	<div class="horarios">
  		<h2>15 JUNIO 2018 <span>07:00 A.M.</span></h2>
  		<h3> <span class="nomEquipo1">EGIPTO</span>  VS  <span class="nomEquipo2"> URUGUAY </span></h3>
  	</div>
  	<div>
  		<img src="images/equipos/4725.png" >
  	</div>
</div>

 <div class="mySlides fade">
  	<div>
  		<img src="images/equipos/4717.png" >
  	</div>
  	<div class="horarios">
  		<h2>15 JUNIO 2018 <span>10:00 A.M.</span></h2>
  		<h3> <span class="nomEquipo2">MARRUECOS </span>  VS  <span class="nomEquipo1">IRÁN</span></h3>
  	</div>
  	<div>
  		<img src="images/equipos/4766.png" >
  	</div>
</div>
<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
	<!-- The dots/circles -->
	<div class="slide-nav2">
		<div class="dot2" onclick="currentSlide2(1)"></div>
		<div class="dot2" onclick="currentSlide2(2)"></div>
		<div class="dot2" onclick="currentSlide2(3)"></div>
	</div>
</div>
</div>
</section>

	<section class="advantages">
		<div class="container">

			<div class="cnt-video" id ="videoContainer">
				<video id="video" controls preload="metadata" poster="images/repVideo.png">
					  <source src="video/bitcoin.mp4" type="video/mp4" >
					  <source src="video/bitcoin.mp4" type="video/ogg">
				</video>
				<ul id="video-controls" class="controls">
					<li><button id="play-pause" class="plasy play" type="button"></button></li>
					<li><button id="mute" class="sound" type="button"></button></li>
					<li class="progress">
						<input type="range" id="progressBar" value="0">
						<!-- <span  id="progressBar"></span> -->
					</li>
				</ul>
			</div>

			<div class="cnt-banner">
				<h2><span class="tam1"> ¡No busques más,</span>
				 encuentra
				 <span class="tam2">tu mejor momio</span>
				<span class=tam3>aquí!</span></h2>

			<ul class="adv-info-container">
				<li class="adv-info">

					<div class="slideshow-container">
						<!-- Slide 1 -->
						<div class="slide fade">
							<p class="slide-txt slide-one">Miomo es la primer página que crea un mercado de momios. (Algo que las casas de apuestas no quieren que sepas).</p>
						</div>
						<!-- Slide 2 -->
						<div class="slide fade">
							<p class="slide-txt slide-two">Escoge el momio que más te convenga.</p>
						</div>
						<!-- Slide 3 -->
						<div class="slide fade">
							<p class="slide-txt slide-three">Por la misma apuesta tu dinero te rendirá más.</p>
						</div>
						<!-- Slide 4 -->
						<div class="slide fade">
							<p class="slide-txt slide-four">Deja de buscar en otras páginas. Aquí encontrarás la mejor opción.</p>
						</div>
					</div>
					<!-- The dots/circles -->
					<div class="slide-nav">
						<div class="dot" onclick="currentSlide(1)"></div>
						<div class="dot" onclick="currentSlide(2)"></div>
						<div class="dot" onclick="currentSlide(3)"></div>
						<div class="dot" onclick="currentSlide(4)"></div>
					</div>
				</li>
			</ul>
			</div>
		</div>
	</section>

	<section id="aboutMiomo" class="about">
		<div class="container">
			<div class="about-info">
				<h2><span class="tam1">¿Qué es </span>
				Miomo?</h2>
				<p>En Miomo creemos que muchas veces son injustas las posibilidades reales que tienes a la hora de apostar y consideramos que la mejor opción es con una mejor oferta a través de un mercado de momios.</p>

				<ul>
					<h3>¿Cómo funciona?</h3>
					<li>
						<span>1)</span>Cada book registrado en Miomo hará una oferta al mercado; esa oferta te podrá gustar o no.
					</li>
					<li>
						<span>2)</span>Tú decides como usuario que momio te conviene más.
					</li>
					<li>
						<span>3)</span>Si quieres apostar, no estás obligado a utilizar los momios que utilizan todas las casas de apuestas.
					</li>
					<li>
						<span>4)</span>La idea de crear un mercado de momios es que tú, como usuario, tengas la mejor opción a la hora de realizar una apuesta.
					</li>
					<li>
						<span>5)</span> Fondea tu cuenta en ETH o BTC y empieza a apostar.
					</li>
				</ul>
			</div>
			<!-- <div class="about-img">
				<img src="images/about-img.png" />
			</div>-->
		</div>
	</section>

	<section class="user-type">
		<div class="container">
			<!-- <img src="images/bottom-illustration.png" /> -->
			<ul>
				<li class="usuario">
					<img src="images/user.png" />
					<h2>¡Quiero ser <span>usuario!</span></h2>
					<a class="btn-light" href="#formRegistro">regístrate</a>
					<p>Se creará una cuenta y desde ahí podrás realizar tus apuestas, con los mejores momios. (Para más información consulta términos y condiciones).</p>
				</li>
				<li class="book">
					<img src="images/user2.png" />
					<h2>¡Quiero ser <span>book!</span></h2>
					<a class="btn-light" href="#formRegistro">regístrate</a>
					<p>A través de la plataforma encontrarás usuarios que quieran jugar contra ti sin que tengas que buscarlos gestionaremos los pagos por ti, publicarás tus momios y tú solo verás los beneficios. Cupo limitado (Para más información consulta términos y condiciones).</p>
				</li>
			</ul>
		</div>
	</section>

	<section class="earn">
		<div class="container">
			<ul>
				<li>
					<h2><span class="tam1" >Descubre cómo</span>
					ganar más dinero</h2>
				</li>
				<li>
					<p>Los nuevos usuarios participan por premios de hasta</p>
				</li>
				<li>
					<h3>1.5 ETH</h3>
				</li>
				<li>
					<p>Consulta términos y condiciones de la quiniela</p>
				</li>
			</ul>
		</div>
	</section>

	 <section class="quiniela-form">
		<div class="container">
			<div class="quiniela-form-info">
					<h2>Regístrate  <span>a la quiniela deportiva</span></h2>
					<p>Compite en nuestra quieniela con un premio de 1.5 ETH al que resulte ganador de la quiniela.</p>
					<p>Lo único que tienes que hacer es registrarte, elegir quinenes crees que sean los ganadores de los partidos y listo. Si eres el ganador te asignaremos a tu saldo.</p>
					<p class="tam2">¡Participa gratis! </p>
					<p>(Para más información consulta los Términos y condiciones).</p>
			</div>

			<div class="quiniela-form-form" id="formRegistro">
			@yield('content')
					<form id="form-register" method="POST" action="{{ route('register') }}">
						@csrf
						<h2>Datos Generales</h2>
						<ul>
							<li class="twoInputs">
								<!-- <label for="nombre">Nombre(s)</label> -->
								<input type="text" name="nombres" id="" value="" placeholder="Nombre(s)" required>
								<input type="text" name="apellidos" id="" value="" placeholder="Apellidos" required>
							</li>
							<li>
								<!-- <label for="nombre">Apellidos</label> -->
								<input type="text" name="pais" id="" value="" placeholder="País">
							</li>
							<li>
								<!-- <label for="nombre">Apellidos</label> -->
								<input type="text" name="Estado" id="" value="" placeholder="Estado">
							</li>

							<li class="twoInputs tooltip" >
								<!-- <label for="nombre">Correo electrónico</label> -->
								 <span class="tooltiptext"> Fecha de nacimiento</span>
								<input type="date" name="fecha_nacimiento" id="" value="" placeholder="Fecha de Nacimiento" >
								<input type="text" name="telefono" id="" value="" placeholder="Teléfono">
							</li>

						</ul>
						<h2>Tipo de usuario</h2>
						<ul class="tipoUsuario">
							<li>
								<label for="tuser1" class="checkbox">
        						<input type="checkbox" class="checkbox" id="tuser1" name="check_tuser[]" value="apostador" />Usuario</label>
							</li>
							<li>
								<label for="tuser2" class="checkbox">
        						<input type="checkbox" class="checkbox" id="tuser2" name="check_tuser[]" value="book" />Book</label>
							</li>
							<li>
								<label for="tuser3" class="checkbox">
        						<input type="checkbox" class="checkbox" id="tuser3" name="check_tuser[]" value="visitante"  />Solo me interesa la quiniela</label>
							</li>

							<!-- <li class="selectOps styled-select slate">
								<select name="tipo_usuario">
									<option value="opcion1">Apostador</option>
									<option value="opcion2">Visitante</option>
									<option value="opcion3">Solo me interesa la quiniela</option>
								</select>
							</li> -->
						</ul>
						<h2>Datos de Usuario</h2>
						<ul>
							<li><input type="text" name="name" id="" value="" placeholder="Nombre de Usuario"></li>
							<li>
								<!-- <label for="nombre">Dirección</label> -->
								<input type="email" name="correo_electronico" id="" placeholder="Correo Electrónico" required>
							</li>
							<li><input type="password" name="password" id="" placeholder="Contraseña" required></li>
							<li><input type="password" name="password_confirmation" id="" placeholder="Repetir contraseña" required></li>
							<li>
								 <button class="btn-light" id="btn-registro" type="submit">Enviar</button>
						
							</li>
						</ul>
					</form>
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

	<script src="js/index.js" type="text/javascript" ></script>
	<script src="{{ asset('js/intereses.js') }}" defer></script>
	<script src="js/videoScript.js" type="text/javascript" ></script>

</body>
</html>
