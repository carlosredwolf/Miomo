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
						Home
					</a>
				</li>
				<li>
					<a href="register#formRegistro">
						Register
					</a>
				</li>
				<li>
					<a href="/#aboutMiomo">
						About us
					</a>
				</li>
				<li>
					<a href="quiniela">
						Pool
					</a>
				</li>
				<li>
					<!--<a href="terminos">
						Términos <span>y Condiciones</span>
					</a>-->
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
						<h2>Login</h2>
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
									<a class="btn-light" href="#">Login</a>
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

			<li><a href="register#formRegistro">Register</a></li>
			<li><a href="login"><span id="login-btn">Sign in </span></a></li>
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
					<h2>I want to be a  <span>user!</span></h2>
					<a class="btn-light" href="register#formRegistro">Register</a>
					<p>Create an account and from there you can make your sports bets, with the best odds.</p>
				</li>
				<li class="book">
					<img src="images/user2.png" />
					<h2>I want to be a <span>bookmaker!</span></h2>
					<a class="btn-light" href="register#formRegistro">Register</a>
					<p>You will be registered as a bookmaker where users will bet against your
					published odds. We will find you users to bet on you, and manage your payments.</p>
				</li>
			</ul>
		</div>
	</section>

	<section class="earn">
		<div class="container">
			<ul>
				<li>
					<h2><span class="tam1" >FIND A WAY TO MAKE SOME MONEY THIS SUMMER!

					</h2>
				</li>
				<li>
					<p>If you register now you can join the World Cup pool and win a price up to:</p>
				</li>
				<li>
					<h3>1.5 ETH</h3>
				</li>
				<li>
					<p>Consult terms and conditions of the World Cup pool</p>
				</li>
			</ul>
		</div>
	</section>

	<section class="quiniela-form">
		<div class="container">
			<div class="quiniela-form-info">
				<h2>REGISTER
					<span>TO THE WORLD CUP POOL</span></h2>
					<p>Compete in our World Cup pool to win up to 1.5 ETH.

 </p>
					<p>The only thing you have to do right now is to register, choose who you think the winners will be and that's it. If you win we will add it to your balance.</p>
					<p class="tam2">Participate for free! </p>
					<p>(for more information consult terms and conditions).</p>
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
					{{-- <li><a href="terminos">Términos y condiciones</a></li>
					<li><a href="privacidad">Política de privacidad</a></li> --}}
				</ul>
				<p>Copyright © miomo.net</p>
				<p><a href="mailto:contact@miomo.net" style="color:#ffffff; text-decoration:none;" target="_blank">contact@miomo.net</a></p>
			</div>
		</footer>

		<script src="js/index.js" type="text/javascript" ></script>
		<script src="js/videoScript.js" type="text/javascript" ></script>
		<script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>

	</body>
	</html>
