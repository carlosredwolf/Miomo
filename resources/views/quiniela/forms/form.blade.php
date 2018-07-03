<form class="formQuiniela" method="POST" action="{{url('quiniela')}}">
  @csrf
  <h3>{{$name}}</h3>
  @foreach ($partidos as $partido)
    <fieldset >
    <div class="encuentros-info">
      <h2>{{date('M/d/Y',strtotime($partido->fecha_partido))}}<span>{{date('h:i A', strtotime($partido->hora_partido))}} CDT</span></h2>
      <h3><span class="nomEquipo1">{{$partido->local->nombre}}</span>  VS  <span class="nomEquipo2">{{$partido->visitante->nombre}}</span></h3>
      @if ($partido->grupo->id != 9)
        <h3>{{$partido->grupo->descripcion}}</h3>
      @endif
      {{-- @php
        date_default_timezone_set('America/Mexico_City');
      @endphp --}}
    </div>
    @if(date('m/d/Y H:i') >= date('m/d/Y H:i',strtotime($partido->fecha_partido.$partido->hora_partido)))
      @php
        $required = '';
      @endphp
    @else
      @php
        $required = '';
      @endphp
    @endif
    <div class="encuentro">
      <div>
        <label class="eEquipo1" for="radio-{{$partido->id}}"><img src="{{asset('images/equipos/'.$partido->local->id.'.png')}}"> <span>{{$partido->local->nombre}}</span></label>
        <input class="radio square" type="radio" name="radio-{{$partido->id}}" value=1 {{$required}}>
      </div>
      <div class ="deEmpate">
        <input class="radio square" type="radio" name="radio-{{$partido->id}}" value=2 {{$required}}>
        <label  class ="eEmpate" for="radio-{{$partido->id}}">Draw</label>
      </div>
      <div>
        <input  class="radio square" type="radio" name="radio-{{$partido->id}}" value=3 {{$required}}>
        <label class="eEquipo1" for="radio-{{$partido->id}}"><img src="{{asset('images/equipos/'.$partido->visitante->id.'.png')}}"> <span>{{$partido->visitante->nombre}}</span></label>
      </div>
    </div>
    @if(date('m/d/Y H:i') >= date('m/d/Y H:i',strtotime($partido->fecha_partido.$partido->hora_partido)))
      <div class="resultadoError"></div>
    @endif
    </fieldset>
  @endforeach
  <input type="hidden" name="idJ" value="{{$id}}">
  <input type="hidden" name="partidos" value="{{$partidosStr}}">
<div class="form-enviar">
  <input type="submit" value="Save">
</div>
</form>
