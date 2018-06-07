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
						Home
					</a>
				</li>
				<li>
					<a href="register#formRegistro">
						Register
					</a>
				</li>
				<li>
					<a href="#aboutMiomo">
						About us
					</a>
				</li>
				<li>
					<a href="quiniela">
						Pool
					</a>
				</li>
				{{-- <li>
					<a href="rules">
						World Cup Pool Rules
					</a>
				</li> --}}
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
									<a class="btn-light" href="login">Iniciar Sesión</a>
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
			<li><a href="login"><span id="login-btn">Sign in</span></a></li>
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
<!--		<div class="linkEncuesta">
			<a href="https://www.surveymonkey.com/r/7Q3DCCL" >AYÚDANOS CON UNA BREVE ENCUESTA</a>
		</div>-->
		<div class="container top-illustration">
			<ul class="banner-info">
				<li>
					<!-- <h1>regístrate</h1> -->
					<h1>REGISTER</h1>
				</li>
				<li>
					<h4>and be freaking cool</h4>
				</li>
				<li>
					<a class="btn-dark" href="register#formRegistro">REGISTER</a>
				</li>
				<li>
					<p>Join our World Cup pool,
						<span>You just have to register!</span></p>
					</li>
					<li class="extra">
						<p>Get the best odds for your bets. </p>
						<p>Only here in Miomo, you will find the best odds,
							and you will have the chance to choose the one
							you like the most, the first web page to let you
						create and choose your odds with BTC. </p>
					</li>
				</ul>

				<div class="proxPartidos">
					<div class="marco">
						<div class="cProxPartidos">
							<h2>Next matches</h2>
							<p>
	<!-- <span class="tam1">football soccer</span>
	<span class="tam2">champions league </span>
-->

</p>
</div>
<!-- Slideshow container -->
<div class="slideshow-container2">
	@foreach ($partidos as $partido)
	<div class="mySlides fade">
		<div>
			<img src="images/equipos/{{$partido->local->id}}.png" >
		</div>
		<div class="horarios">
			<h2>{{date('d/M/Y',strtotime($partido->fecha_partido))}}<span>{{date('H:i A', strtotime($partido->hora_partido))}}</span></h2>

			<h3> <span class="nomEquipo1">{{$partido->local->nombre}}</span>  VS  <span class="nomEquipo2">{{$partido->visitante->nombre}}</span></h3>
		</div>
		<div class="imagenpartidoder">
			<img src="images/equipos/{{$partido->visitante->id}}.png" >
		</div>
	</div>
	@endforeach
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
			<img src="images/repVideo.png" height="auto" width="100%" alt="">
			{{-- <video id="video" controls preload="metadata" poster="images/repVideo.png">
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
					</ul> --}}
				</div>

				<div class="cnt-banner">
					<h2><span class="tam1"> YOU´VE BEEN HEARD,</span>
						FIND
						<span class="tam2"> YOUR BEST ODDS </span>
						<span class=tam3>HERE!</span></h2>

						<ul class="adv-info-container">
							<li class="adv-info">

								<div class="slideshow-container">
									<!-- Slide 1 -->
									<div class="slide fade">
										<p class="slide-txt slide-one">Miomo is the first web page to create a market for odds. (Something that casinos don't want you to know).</p>
									</div>
									<!-- Slide 2 -->
									<div class="slide fade">
										<p class="slide-txt slide-two">Choose the odd that best fits you.</p>
									</div>
									<!-- Slide 3 -->
									<div class="slide fade">
										<p class="slide-txt slide-three">For the same bet your money will give you back more!</p>
									</div>
									<!-- Slide 4 -->
									<div class="slide fade">
										<p class="slide-txt slide-four">Stop searching, you will find the best option here.

										</p>
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
						<h2><span class="tam1">What is </span>
						Miomo?</h2>
						<p>We firmly believe that the real possibilities of you winning against the "casino" are very unfair,
						in order to ditch this, instead, we created Miomo which allows you to bet against a peer.</p>

						<ul>
							<h3>HOW DOES IT WORK?</h3>
							<li>
								<span>1)</span>A registered bookmaker in Miomo will make an offer, you may or may not like that offer.
							</li>
							<li>
								<span>2)</span>As a user you decide what odd you like the most.
							</li>
							<li>
								<span>3)</span>If you want to make a sports bet, you are not obliged to use the odds that all the other bookmakers use.
							</li>
							<li>
								<span>4)</span>The idea of creating a market for odds is that, as a user, you get the best offer at that time.
							</li>
							<li>
								<span>5)</span> Fund your account with BTC, and start betting.
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
	<footer>
		<div class="container">
			<a href="/"><img src="images/secondary-logo.svg" /></a>
			<ul>
					<!--<li><a href="terminos">Terms and conditions</a></li>
						<li><a href="privacidad">Política de privacidad</a></li>-->
					</ul>
					<p>Copyright © miomo.net</p>
					<p><a href="mailto:contact@miomo.net" style="color:#ffffff; text-decoration:none;" target="_blank">contact@miomo.net</a></p>
				</div>
			</footer>

			<script src="js/index.js" type="text/javascript" ></script>
			<script src="{{ asset('js/intereses.js') }}" defer></script>
			<script src="js/videoScript.js" type="text/javascript" ></script>
			<script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>
		</body>
		</html>
