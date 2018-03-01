@extends('layouts.app')

@section('content')
<section class="box-register">
		<div class="container">
			<div class="register">
				<div class="row">
					<div class="col-12 mb-5">
						<h2 class="text-center font-title">Ciudades asiganadas a: {{$administrator->name}} {{$administrator->lastName}}</h2>
					</div>
				</div>


				<div class="card">
					{!!Form::open(['route'=>'citiesAdminStore','method'=>'POST'])!!}
					<label for="">Asignar Ciudad a: {{$administrator->name}} {{$administrator->lastName}}</label>
					{!!Form::select('name',$citiesAll,null,['class'=>'form-control','placeholder'=>'Seleccioanr Ciudad'])!!}
					{!!Form::hidden('administrator_id',$administrator->id)!!}
					{!!Form::submit('Asignar Ciudad')!!}
					{!!Form::close()!!}

				</div >
				<div class="row" style="margin-top:30px">
						<table class="table table-responsive">
						  <thead class="thead-color">
						    <tr>
						      <th class="text-center">Nombre</th>
									<th class="text-center">dehabilitar</th>
						    </tr>
						  </thead>
						  <tbody>

								@foreach ($cities as $city)
								<tr>
									<td class="text-center">{{$city->name}}</td>
									<td class="text-center"><a onclick="return confirm('Esta Seguro de Deshabilitar esta Ciudad.')" href="{{route('deleteCityAdmin',$city->id)}}">Eliminar</a></td>
								</tr>
								@endforeach

						  </tbody>
              <tfoot>
                <tr>
                  <td colspan="4">{{ $cities->links() }}</td>
                </tr>
              </tfoot>
						</table>
				</div>

			</div>
		</div>
	</section>

<footer>
	<div class="section-footer">
		<div class="row align-items-center nomargin p-1">
			<div class="col-lg-6 col-sm-6 col-12 text-center nopadding">
				<a href="" class="p-2"><img class="buttons-footer" src="img/botones-medicossi-13.png" alt=""></a>
				<a href="" class="p-2"><img class="buttons-footer" src="img/botones-medicossi-14.png" alt=""></a>
				<a href="" class="p-2"><img class="buttons-footer" src="img/botones-medicossi-15.png" alt=""></a>
				<a href="" class="p-2"><img class="buttons-footer" src="img/botones-medicossi-16.png" alt=""></a>
			</div>
			<div class="col-lg-6 col-sm-6 col-12 text-center nopadding">
				<span class="font-footer"><b>MedicosSi</b> siempre encontrarás tu mejor opción.</span>
			</div>
		</div>
	</div>
</footer>
@endsection
