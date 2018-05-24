<form id="form-admin" class="formQuiniela" method="POST" action="{{url('admin')}}">
  @csrf
  <h3></h3>
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
      $route1 = 'images/equipos/'.$partido->local->id.'.png';
      $route2 = 'images/equipos/'.$partido->visitante->id.'.png';
      @endphp
      <div>
        <label class="eEquipo1" for="score-{{$i}}"><img src="{{asset($route1)}}"> <span>{{$partido->local->nombre}}</span></label>
        <input class="radio square" type="number" name="score-{{$i}}" >
      </div>
      <div class ="deEmpate">

      </div>
      <div>
        <input  class="radio square" type="number" name="score-{{$i}}" >
        <label class="eEquipo2" for="score-{{$i}}"><img src="{{asset($route2)}}" >	<span class="nomEquipo2">{{$partido->visitante->nombre}}</span></label>
      </div>
    </div>
    </fieldset>
    @php
      $i++;
    @endphp
  @endforeach
  <input type="hidden" name="partidos" value="{{$partidosStr}}">
<div class="form-enviar">
  <input type="submit" value="Guardar">
</div>
</form>
