@extends('layouts.app')

@section('content')

  <h1>Crear Categoria</h1>

						{!!Form::open(['route'=>'specialty_categories.store','method'=>'POST'])!!}

								    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre'])!!}

								    {!!Form::text('description',null,['class'=>'form-control','placeholder'=>'descripción'])!!}

                     {!!Form::submit('Enviar')!!}
					{!!Form::close()!!}
			</div>
		</div>
	</section>
@endsection
