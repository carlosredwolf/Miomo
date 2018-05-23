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

  <link rel="stylesheet" href="../../css/html5reset-1.6.1.css">
	<link rel="stylesheet" href="../../css/style.css">
	<link rel="stylesheet" href="../../css/quiniela.css">
	<!-- <link rel="stylesheet" href="css/responsive.css">-->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

	<link rel="icon" href="images/favicon@2x.png">
</head>

<body>
  <div class="container">

    <section class="nav-left">
  		<a href="/" class="main-logo main-logo-sizeone">
  			<img src="../../images/main-logo.svg" />
  		</a>

  	</section>



  	<section class="header_quiniela main-menu-sizeone">

  		<div class="navbar margin-topone" id="menuDesktop">
    			<a class="active" href="../../admin">La quiniela</a>
    			<a href="../../admin/resultados">Resultados</a>
    			<a href="../../admin/proximos">Próximos partidos</a>

    			{{-- <button class="avatar">
    					<i class="avatar fas fa-user-circle"></i>
    			</button> --}}

    			{{-- <div class="dropdown user">
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
  				<button onclick="myFunction()" class="dropbtn">Resultados </button>
  				  <div id="myDropdown" class="dropdown-content">
  				    <a  class="active" href="../admin">La quiniela</a>
  				    <a href="../../admin/resultados">Resultados</a>
    					<a href="../../admin/proximos">Próximos partidos</a>
    				  </div>
  			</div>
  	</div>
    	</section>

  <section class="quiniela">
    <div class="container">

      <h1>La Quiniela</h1>

      {{-- @include('sections.containerResultados') --}}
      <div class="quiniela-container">

        <div class="contenido">

        <div class="titulo-quiniela">
          <img src="{{asset('images/copa.png')}}" alt="">
            <!-- <p>
            <span class="tam1">football soccer</span>
            <span class="tam2">champions league </span>
            </p> -->

        <a class="nav-link" href="/admin">Regresar</a>
        </div>
        <!-- Day -->
        <form class="formQuiniela">
        {{-- @include('quiniela.encuentros') --}}
					<h3>{{$name}}</h3>
					@php
						$i = 0;
					@endphp
          @foreach ($partidos as $partido)
            <fieldset >
            <div class="encuentros-info">
              <h2>{{date('d/M/Y',strtotime($partido->fecha_partido))}}<span>{{date('H:i A', strtotime($partido->hora_partido))}}</span></h2>
              <h3><span class="nomEquipo1">{{$partido->local->nombre}}</span>  VS  <span class="nomEquipo2">{{$partido->visitante->nombre}}</span></h3>
							@if ($partido->grupo->id != 9)
								<h3>{{$partido->grupo->descripcion}}</h3>
							@endif
            </div>
            <div class="encuentro">
              @php
              $id1 = $partido->local->id;
              $id2 = $partido->visitante->id;
              $route1 = 'images/equipos/'.$id1.'.png';
              $route2 = 'images/equipos/'.$id2.'.png';
              @endphp
              <div>
                <label class="eEquipo1" for="radio-{{$i}}"><img src="{{asset($route1)}}"> <span>{{$partido->local->nombre}}</span></label>
								{{-- {{ Form::radio('radio-'.$i, 'local', ['class' => 'radio square']) }} --}}
								<input class="radio square" type="radio" name="radio-{{$i}}" >
              </div>
							@php
								$i++;
							@endphp
              <div class ="deEmpate">
                <input class="radio square" type="radio" name="radio-{{$i}}" >
                <label  class ="eEmpate" for="radio-{{$i}}">Empate</label>
              </div>
							@php
								$i++;
							@endphp
              <div>
                <input  class="radio square" type="radio" name="radio-{{$i}}" >
                <label class="eEquipo2" for="radio-{{$i}}"><img src="{{asset($route2)}}" >	<span class="nomEquipo2">{{$partido->visitante->nombre}}</span></label>
              </div>
            </div>
            </fieldset>
						@php
							$i++;
						@endphp
          @endforeach
        <div class="form-enviar">
          <input type="submit" value="Guardar">
        </div>
      </form>
    </div>
    </div>
  </div>
  </section>
</div>

<footer>
  <div class="container">
    <a href="#"><img src="../../images/secondary-logo.svg" /></a>
    <ul>
      <li><a href="../../terminos">Términos y condiciones</a></li>
      <li><a href="../../privacidad">Política de privacidad</a></li>
    </ul>
    <p>Copyright © miomo.mx</p>
  </div>
</footer>

<script src="../../js/quiniela.js" type='text/javascript'></script>

</body>
</html>