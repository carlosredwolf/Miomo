<form class="formQuiniela" method="post" action="{{url('editarQuiniela')}}">
  @csrf
  <a class="navBacka" href="/masalto/{{$id}}/">High scores</a>
  <h3>{{$name}}</h3>
  @foreach ($partidos as $partido)
    <fieldset >
    <div class="encuentros-info">
      <h2>{{date('M/d/Y',strtotime($partido->fecha_partido))}}<span>{{date('h:i A', strtotime($partido->hora_partido))}} CDT</span></h2>
      <h3><span class="nomEquipo1">{{$partido->local->nombre}}</span>  VS  <span class="nomEquipo2">{{$partido->visitante->nombre}}</span></h3>
      @if ($partido->grupo->id != 9)
        <h3>{{$partido->grupo->descripcion}}</h3>
      @endif
      @if ($partido->local->id != 1)
        @php
        $id1 = $partido->local->id;
        $id2 = $partido->visitante->id;
        $route1 = 'images/equipos/'.$id1.'.png';
        $route2 = 'images/equipos/'.$id2.'.png';
        @endphp
      @else
        @php
        $route1 = 'images/equipos/1.png';
        $route2 = 'images/equipos/1.png';
        @endphp
      @endif
    </div>
    <div class="encuentro">
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
        <label  class ="eEmpate" for="radio-{{$partido->id}}">Draw</label>
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
    @if(($partido->status->id == 2 || $partido->status->id == 3) || $resultado[$partido->id] == 0)
      <div class="resultadoError"></div>
    @endif
    @if($resultado[$partido->id] == 1)
      <div class="resultadoExito"></div>
    @endif
    @if (date('M/d/Y',strtotime($partido->fecha_partido)) == date('M/d/Y') && date('h') > date("h", strtotime('-1 hours',strtotime($partido->hora_partido))) )
      {{-- expr --}}
      <div class="resultadoError"></div>
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
