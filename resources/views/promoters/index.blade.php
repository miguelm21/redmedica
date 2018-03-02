@extends('layouts.app')

@section('content')
<section class="box-register">

		<div class="container">
			<div class="register">
				<div class="row">
					<div class="col-12 mb-5">
						<h2 class="text-center font-title">Promotores</h2>
					</div>
				</div>
				<a class="btn btn-primary" href="{{route('promoters.create')}}">Agregar Nuevo Promotor</a>


				<div class="row">
						<table class="table table-responsive">
						  <thead class="thead-color">
						    <tr>
									<th class="text-center">Inicio</th>
						      <th class="text-center">Nombre</th>
						      <th class="text-center">Apellido</th>
									<th class="text-center">Email</th>
									<th class="text-center">id#Promotor</th>
									<th class="text-center">Acciones</th>
						    </tr>
						  </thead>
						  <tbody>

								@foreach ($promoters as $promoter)
								<tr>
									<td class="text-center">{{$promoter->created_at->format('d-m-Y')}}</th>
									<td class="text-center">{{$promoter->name}}</th>
									<td class="text-center">{{$promoter->lastName}}</td>
									<td class="text-center">{{$promoter->email}}</td>
									<td class="text-center">{{$promoter->id_promoter}}</td>
									<td><div class="btn-group" role="group" aria-label="...">
										<div class="row">
											<div class="col-12">
												<a class="btn btn-secondary  text-center" data-toggle="tooltip" data-placement="top" title="Administrar Persmisos" role="button" href="{{route('listPermissionSet',$promoter->id)}}">Clientes
												</a>
												<a class="btn btn-secondary  text-center" data-toggle="tooltip" data-placement="top" title="Administrar Persmisos" role="button" href="{{route('listPermissionSet',$promoter->id)}}">Comisiones Pagadas
												</a>
												<a class="btn btn-secondary  text-center" data-toggle="tooltip" data-placement="top" title="Administrar Persmisos" role="button" href="{{route('listPermissionSet',$promoter->id)}}">Ciudades Atendidas
												</a>
												<a class="btn btn-secondary  text-center" data-toggle="tooltip" data-placement="top" title="Administrar Persmisos" role="button" href="{{route('listPermissionSet',$promoter->id)}}">Ciudades Atendidas
												</a>
												<a class="btn btn-secondary  text-center" data-toggle="tooltip" data-placement="top" title="Administrar Persmisos" role="button" href="{{route('listPermissionSet',$promoter->id)}}">Cuentas Bancarias
												</a>
												<a class="btn btn-secondary  text-center" data-toggle="tooltip" data-placement="top" title="Administrar Persmisos" role="button" href="{{route('listPermissionSet',$promoter->id)}}">Planes Que Puede Ofrecer
												</a>

											</div>
										</div>
									</div>
								</td>
								@endforeach

						  </tbody>
              <tfoot>
                <tr>
                  <td colspan="4">{{ $promoters->links() }}</td>
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
