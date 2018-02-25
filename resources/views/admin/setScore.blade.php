@extends('layouts.app')

@section('title')
   Establecer Puntaje a Partido: {{$match->number}}
@endsection
@section('content')

   <div class="card" style="padding:20px;max-width:450px">
      <div class="card-block">

         {!!Form::model($match,['route'=>'setScoreStore','method'=>'post'])!!}
         <input type="hidden" name="match_id" value="{{$match->id}}">
         <label for="team1">{{$match->team1}}</label>

        <label for="team1"></label>
        {{Form::select('goalsTeam1',[0=>0,1=>1,2=>2,3=>3,4=>4,5=>5,6=>6,7=>7,8=>8,9=>9],null,['class'=>'form-control'])}}
        <label for="team1">{{$match->team2}}</label>


          {{Form::select('goalsTeam2',[0=>0,1=>1,2=>2,3=>3,4=>4,5=>5,6=>6,7=>7,8=>8,9=>9],null,['class'=>'form-control'])}}
         {!!Form::submit('Guardar',['class'=>'btn btn-primary','style'=>'margin-top:20px'])!!}
         <a href="{{route('home')}}" class="btn btn-secondary">Cancelar</a>

         {!!Form::close()!!}

      </div>
   </div>




@endsection
