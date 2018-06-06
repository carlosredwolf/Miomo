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
	<title>@yield('title')</title>

	{!!Html::style('css/html5reset-1.6.1.css')!!}
	{!!Html::style('css/style.css')!!}
	{!!Html::style('css/quiniela.css')!!}
	<!-- <link rel="stylesheet" href="css/responsive.css">-->
	{!!Html::script("https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js")!!}
	{!!Html::script("https://use.fontawesome.com/releases/v5.0.9/js/all.js",
		array('defer',
					'integrity' =>"sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl",
					'crossorigin' => "anonymous"))!!}

	<link rel="icon" href="{{URL::asset('/images/favicon@2x.png')}}"/>
</head>
<body>

  <div class="container">
    @yield('content')
  </div>


  <footer>
		<div class="container">
			<a href="#"><img src="{{URL::asset('/images//secondary-logo.svg')}}"/></a>
			<ul>
				{{-- <li><a href="#">Términos y condiciones</a></li>
				<li><a href="#">Política de privacidad</a></li> --}}
			</ul>
			<p>Copyright © miomo.net</p>
			<p><a href="mailto:contact@miomo.net" style="color:#ffffff; text-decoration:none;" target="_blank">contact@miomo.net</a></p>
		</div>
	</footer>
  {!!Html::script("js/quiniela.js", array('type' => "text/javascript"))!!}
</body>
<script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>
</html>
