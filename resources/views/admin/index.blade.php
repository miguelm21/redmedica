@extends('layouts.app')

@section('title')
   Administrar Quiniela
@endsection
@section('content')
   <!-- Nav tabs -->
   <ul class="nav nav-tabs" role="tablist">
      <input type="hidden" name="" value="{{$var1 = 0}}">
      @foreach ($phases as $phase)
         @if(Session::Has('redirectPhase'))
            @if(Session::get('redirectPhase') == $phase->id)
               <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#{{$phase->name}}" role="tab">{{$phase->name}}</a>
               </li>
               @else
                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#{{$phase->name}}" role="tab">{{$phase->name}}</a>
                  </li>
               @endif

            @else
                  @if($var1 == 0)
                     <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#{{$phase->name}}" role="tab">{{$phase->name}}</a>
                     </li>
                     <input type="hidden" name="" value="{{$var1 = 1}}">
                     @else
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#{{$phase->name}}" role="tab">{{$phase->name}}</a>
                     </li>
                 @endif
            @endif

      @endforeach

   </ul>


   <!-- Tab panes -->
   <div class="tab-content">
      <input type="hidden" name="" value="{{$var = 0}}">
      @foreach ($phases as $phase)

         @if(Session::Has('redirectPhase'))
            @if(Session::get('redirectPhase') == $phase->id)
               <div class="tab-pane active" id="{{$phase->name}}" role="tabpanel">
                  <h2>{{$phase->name}}</h2>
               @else
                  <div class="tab-pane" id="{{$phase->name}}" role="tabpanel">
                     <h2>{{$phase->name}}</h2>
               @endif

            @else
                  @if($var == 0)
                        <div class="tab-pane active" id="{{$phase->name}}" role="tabpanel">
                           <h2>{{$phase->name}}</h2>
                        <input type="hidden" name="" value="{{$var = 1}}">
                     @else
                        <div class="tab-pane" id="{{$phase->name}}" role="tabpanel">
                           <h2>{{$phase->name}}</h2>
                 @endif
            @endif

                     <table class="table table-striped">
                        <thead>
                           <th>Nro.</th>
                           <th>Fecha</th>
                           <th>Hora</th>
                           <th>sede</th>
                           <th>Encuentro</th>
                           <th>Marcador</th>
                           <th>Apuesta</th>
                        </thead>
                        <tbody>
                           @foreach ($phase->match as $match)
                              <tr>
                                 <td>{{$match->number}}</td>
                                 <td>{{$match->date}}</td>
                                 <td>{{$match->hour}}</td>
                                 <td>{{$match->sede}}</td>
                                 <td>{{$match->team1}}:{{$match->goalsTeam1}}</div> vs {{$match->team2}}:{{$match->goalsTeam2}}</td>
                                 <td>
                                    @if(isset($match->goalsTeam2) and isset($match->goalsTeam1))
                                       <a href="{{route('setScore',$match->id)}}" class="btn btn-info btn-sm">Editar Puntaje</a>
                                    @else
                                       <a href="{{route('setScore',$match->id)}}" class="btn btn-info btn-sm">Establecer Puntaje</a>
                                    @endif
                                 </td>
                                 <td>@if($match->bet == 'Cerrada') <a href="{{route('betActivate',$match->id)}}" class="btn btn-success btn-sm">Abrir</a>@else <a href="{{route('betDesactivate',$match->id)}}" class="btn btn-warning btn-sm">Cerrar</a>@endif</td>
                                 </tr>

                              @endforeach
                           </tbody>
                        </table>
                     </div>
                  @endforeach


   </div>

@endsection
