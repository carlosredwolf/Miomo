<form class="formQuiniela" method="post" action="{{url('editarQuiniela')}}">
  @csrf
  {{-- <a class="navBacka" href="/masalto/{{$id}}/">High scores</a> --}}
  <h3>{{$name}}</h3>
  @foreach ($partidos as $partido)
    <fieldset >
    <div class="encuentros-info">
      <h2>{{date('M/d/Y',strtotime($partido->fecha_partido))}}<span>{{date('h:i A', strtotime($partido->hora_partido))}} CDT</span></h2>
      <h3><span class="nomEquipo1">{{$partido->local->nombre}}</span>  VS  <span class="nomEquipo2">{{$partido->visitante->nombre}}</span></h3>
      @if ($partido->grupo->id != 9)
        <h3>{{$partido->grupo->descripcion}}</h3>
      @endif
    </div>
    <div class="encuentro">
      <div>
        <label class="eEquipo1" for="radio-{{$partido->id}}"><img src="{{asset('images/equipos/'.$partido->local->id.'.png')}}"> <span>{{$partido->local->nombre}}</span></label>
        @if ($partido->resultado->id == 1)
            <input class="radio square" type="radio" name="radio-{{$partido->id}}" value=1 checked>
        @else
            <input class="radio square" type="radio" name="radio-{{$partido->id}}" value=1>
        @endif
      </div>
      <div class ="deEmpate">
        @if ($partido->resultado->id == 2)
          <input class="radio square" type="radio" name="radio-{{$partido->id}}" value=2 checked>
        @else
          <input class="radio square" type="radio" name="radio-{{$partido->id}}" value=2>
        @endif
        <label  class ="eEmpate" for="radio-{{$partido->id}}">Draw</label>
      </div>
      <div>
        @if ($partido->resultado->id == 3)
          <input class="radio square" type="radio" name="radio-{{$partido->id}}" value=3 checked>
        @else
          <input class="radio square" type="radio" name="radio-{{$partido->id}}" value=3>
        @endif
        <label class="eEquipo2" for="radio-{{$partido->id}}"><img src="{{asset('images/equipos/'.$partido->visitante->id.'.png')}}" >	<span class="nomEquipo2">{{$partido->visitante->nombre}}</span></label>
      </div>
    </div>
    {{-- @php
      date_default_timezone_set('America/Mexico_City');
    @endphp --}}
    @if(date('m/d/Y H:i') >= date('m/d/Y H:i',strtotime($partido->fecha_partido.$partido->hora_partido)))
      <div class="resultadoError"></div>
    @endif
    @if($resultado[$partido->id] == 1)
      <div class="resultadoExito"></div>
    @endif
    </fieldset>
  @endforeach
  <input type="hidden" name="idJ" value="{{$id}}">
  <input type="hidden" name="idQ" value="{{$idQ}}">
  <input type="hidden" name="partidos" value="{{$partidosStr}}">
<div class="form-enviar">
  <input type="submit" value="SAVE">
</div>
</form>
