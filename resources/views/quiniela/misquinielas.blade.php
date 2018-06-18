@extends('layouts.nav')

@section('content')
<h1>My pools</h1>
{{-- @include('sections.containerResultados') --}}
<div class="quiniela-container">
	<div class="contenido">

	<div class="titulo-quiniela">
		<img src="images/copa.png" alt="">
			<!-- <p>
			<span class="tam1">football soccer</span>
			<span class="tam2">champions league </span>
			</p> -->
		<div style="" class="navbar margin-topone">
		@foreach ($quinielas as  $quiniela)
			@if ($quiniela->jornada->id_status != 4)
				<h4><span class="tam3"><a href="quiniela/{{$quiniela->id}}/{{$quiniela->jornada->id}}">
					{{$quiniela->jornada->descripcion}} {{date('d/M/Y h:i A',strtotime('-5 hours',strtotime($quiniela->updated_at)))}}
				</a></span></h4>
			@else
				<h4><span class="tam3"><a href="quiniela/{{$quiniela->id}}/{{$quiniela->jornada->id}}" style="pointer-events:none; text-decoration:line-through;">
					{{$quiniela->jornada->descripcion}} {{date('d/M/Y h:i A',strtotime('-5 hours',strtotime($quiniela->updated_at)))}}
				</a></span></h4>
			@endif
		@endforeach
		</div>
	</div>
</div>
</div>
<footer>
				<div class="container">
						<a href="/"><img src="/images/secondary-logo.svg" /></a>
						<ul>
								{{-- <li><a href="/terminos">Términos y condiciones</a></li>
								<li><a href="/privacidad">Política de privacidad</a></li> --}}
						</ul>
						<p>Copyright © miomo.net</p>
						<p><a href="mailto:contact@miomo.net" style="color:#ffffff; text-decoration:none;" target="_blank">Contact us at contact@miomo.net</a></p>
				</div>
		</footer>
@stop
