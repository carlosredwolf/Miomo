<form class="formQuiniela" method="post" action="{{url('editarQuiniela')}}">
  @csrf
  <h3>{{$name}}</h3>
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
        <label class="eEquipo1" for="radio-{{$partido->id}}"><img src="{{asset($route1)}}"> <span>{{$partido->local->nombre}}</span></label>
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
        <label  class ="eEmpate" for="radio-{{$partido->id}}">Empate</label>
      </div>
      <div>
        @if ($partido->resultado->id == 3)
          <input class="radio square" type="radio" name="radio-{{$partido->id}}" value=3 checked>
        @else
          <input class="radio square" type="radio" name="radio-{{$partido->id}}" value=3>
        @endif
        <label class="eEquipo2" for="radio-{{$partido->id}}"><img src="{{asset($route2)}}" >	<span class="nomEquipo2">{{$partido->visitante->nombre}}</span></label>
      </div>
    </div>
    </fieldset>
  @endforeach
  <input type="hidden" name="idJ" value="{{$id}}">
  <input type="hidden" name="idQ" value="{{$idQ}}">
  <input type="hidden" name="partidos" value="{{$partidosStr}}">
<div class="form-enviar">
  <input type="submit" value="Guardar">
</div>
</form>
