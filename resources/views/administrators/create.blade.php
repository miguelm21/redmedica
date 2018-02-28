@extends('layouts.app')

@section('content')

  <h1>Crear Administrador</h1>

						{!!Form::open(['route'=>'administrators.store','method'=>'POST'])!!}

								    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre'])!!}

								    {!!Form::text('lastName',null,['class'=>'form-control','placeholder'=>'Apellido'])!!}

                    {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'email'])!!}

                    {!!Form::password('password',['class'=>'form-control','placeholder'=>'password'])!!}

                     {!!Form::submit('Enviar')!!}
					{!!Form::close()!!}
			</div>
		</div>
	</section>
@endsection
