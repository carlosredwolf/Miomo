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
	<script src="js/videoScript.js" type="text/javascript" ></script>

</body>
</html>
