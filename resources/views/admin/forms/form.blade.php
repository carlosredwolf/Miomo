<form id="form-admin" class="formQuiniela" method="POST" action="{{url('admin')}}">
  @csrf
  <h3></h3>
  @foreach ($partidos as $partido)
    @php
      $i = 1;
    @endphp
    <fieldset >
    <div class="encuentros-info">
      <h2>{{date('M/d/Y',strtotime($partido->fecha_partido))}}<span>{{date('H:i A', strtotime($partido->hora_partido))}} CDT</span></h2>
      <h3><span class="nomEquipo1">{{$partido->local->nombre}}</span>  VS  <span class="nomEquipo2">{{$partido->visitante->nombre}}</span></h3>
      @if ($partido->grupo->id != 9)
        <h3>{{$partido->grupo->descripcion}}</h3>
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
      @if ($partido->local->pais->id == 1 && $partido->visitante->pais->id == 1)
        <ul>
          <li>
            <input type="text" name="local" id="local-input" value="" placeholder="local" style="visibility:hidden">
            <select name="local" id="select-local">
            </select>
          </li>
          <li>
            <input type="text" name="visitante" id="local-visitante" value="" placeholder="visitante" style="visibility:hidden">
            <select name="visitante" id="select-visitante">
            </select>
          </li>
        </ul>
      @endif
    </div>
    <div class="encuentro">
      <div>
        <label class="eEquipo1" for="score-{{$partido->id}}-{{$i}}"><img src="{{asset($route1)}}"> <span>{{$partido->local->nombre}}</span></label>
        @if ($partido->local->pais->id != 1)
            <input class="radio square" type="text" name="score-{{$partido->id}}-{{$i}}" maxlength="1" pattern="[0-9]+" value="{{$partido->score_local}}">
        @else
            <input class="radio square" type="text" name="score-{{$partido->id}}-{{$i}}" maxlength="1" pattern="[0-9]+" value="{{$partido->score_local}}" disabled>
        @endif

      </div>
      <div class ="deEmpate">
      </div>
      @php
        $i++;
      @endphp
      <div>
        @if ($partido->visitante->pais->id != 1)
          <input  class="radio square" type="text" name="score-{{$partido->id}}-{{$i}}" maxlength="1" pattern="[0-9]+" value="{{$partido->score_visitante}}">
        @else
          <input  class="radio square" type="text" name="score-{{$partido->id}}-{{$i}}" maxlength="1" pattern="[0-9]+" value="{{$partido->score_visitante}}" disabled>
        @endif
        <label class="eEquipo2" for="score-{{$partido->id}}-{{$i}}"><img src="{{asset($route2)}}" >	<span class="nomEquipo2">{{$partido->visitante->nombre}}</span></label>
      </div>
    </div>
    </fieldset>
  @endforeach
  <input type="hidden" name="idJ" value="{{$id}}">
  <input type="hidden" name="partidos" value="{{$partidosStr}}">
<div class="form-enviar">
  <input type="submit" value="Save">
</div>
</form>
