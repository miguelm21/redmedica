@extends('layouts.app')

@section('content')
  <a href="{{route('confirmMedicalCenter',['id'=>1,'code'=>1])}}">{{route('confirmMedicalCenter',['id'=>1,'code'=>2])}}</a>

  <h1>registro asistente</h1>


						{!!Form::open(['route'=>'assistant.store','method'=>'POST'])!!}

						    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre'])!!}
                 {!!Form::password('password',['class'=>'form-control','placeholder'=>'Contraseña'])!!}
                {!!Form::text('lastName',null,['class'=>'form-control','placeholder'=>'Apellido'])!!}
                 {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Email'])!!}

                {!!Form::select('medico_id',$medico,null,['class'=>'form-control','placeholder'=>'Medico Asociado'])!!}

                {!!Form::text('phone1',null,['class'=>'form-control','placeholder'=>'Teléfono 1'])!!}

                {!!Form::text('phone2',null,['class'=>'form-control','placeholder'=>'Teléfono 2'])!!}
                 {!!Form::submit('Enviar')!!}
					{!!Form::close()!!}
			</div>
		</div>
	</section>
@endsection
