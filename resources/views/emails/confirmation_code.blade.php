<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
</head>
<link rel="stylesheet" href="css/html5reset-1.6.1.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/responsive.css">

<style>
.encabezado{
	color: #000;
	font-size: 15px;
	text-align: left;
}
.descripcion{
	color: #000;
	font-size: 25px;
}
.btnConfirm{
	text-align:center;
	display:block;
	padding:15px 25px;
	background-color:#8ab570;
	color:#ffffff;
	border-radius:3px;
	text-decoration:none;
	margin-top:20px
}
</style>

<body>
	<div class="container">
		<img alt="Miomo.net" src="https://www.bing.com/images/search?view=detailV2&ccid=OOtgiTvq&id=F1A40071743D0CCE93328B3139F99B4803CAFC2F&thid=OIP.OOtgiTvqbYT6wPOXWyP0HQHaHa&mediaurl=https%3a%2f%2fimg.imagenescool.com%2fic%2fdomingo%2fdomingo_136.jpg&exph=960&expw=960&q=imagenes&simid=607995547012696294&selectedIndex=0&ajaxhist=0" />
		<br><br>
		<p class="encabezado">{{ $name }},<br>Welcome to <strong>Miomo</strong> !</p>
		<br><br>
		<p class="descripcion">Please confirm your email.</p>
		<br><br>
		<p>To do this you simply have to click on the following link:</p>

		<a href="{{ url('/register/verify/' . $confirmation_code) }}" class="btnConfirm">
			Click for confirm your email
		</a>
		<br>
		<p>Si no puedes ver el boton haz copy/paste al siguiente link en tu navegador:</p>
		<br>
		<a href="{{ url('/register/verify/' . $confirmation_code) }}">{{ url('/register/verify/' . $confirmation_code) }}</a>
	</div>
</body>
</html>