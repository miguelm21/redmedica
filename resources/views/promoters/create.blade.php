@extends('layouts.app')

@section('content')

  <h1>Crear Nuevo Promotor</h1>

						{!!Form::open(['route'=>'promoters.store','method'=>'POST'])!!}

                  {!!Form::text('id_promoter',null,['class'=>'form-control','placeholder'=>'id Promotor'])!!}

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
