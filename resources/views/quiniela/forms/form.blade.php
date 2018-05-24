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
      <div class ="deEmpate">
        <input class="radio square" type="radio" name="radio-{{$i}}" >
        <label  class ="eEmpate" for="radio-{{$i}}">Empate</label>
      </div>
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
