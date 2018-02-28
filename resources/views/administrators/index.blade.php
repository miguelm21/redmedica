@extends('layouts.app')

@section('content')
<section class="box-register">
		<div class="container">
			<div class="register">
				<div class="row">
					<div class="col-12 mb-5">
						<h2 class="text-center font-title">Administradores</h2>
					</div>
				</div>
				<a class="btn btn-primary" href="{{route('administrators.create')}}">Crear Nuevo Administrador</a>


				<div class="row">
						<table class="table table-responsive">
						  <thead class="thead-color">
						    <tr>
						      <th class="text-center">#</th>
						      <th class="text-center">Nombre</th>
						      <th class="text-center">Apellido</th>
									<th class="text-center">Email</th>
									<th class="text-center">Permisos Otorgados</th>
									<th class="text-center">Ciudades Atendidas</th>
									<th class="text-center">Acciones</th>
						    </tr>
						  </thead>
						  <tbody>

								@foreach ($administrators as $admin)
								<tr>
									<th scope="row">{{$admin->id}}</th>
									<td class="text-center">{{$admin->name}}</th>
									<td class="text-center">{{$admin->lastName}}</td>
									<td class="text-center">{{$admin->email}}</td>
									<td class="text-center">
										<ul>
											<li>permiso 1</li>
											<li>permiso 2</li>
										</ul>
									</td>
									<td class="text-center">
										<ul>
											<li>ciudad 1</li>
											<li>ciudad 2</li>
										</ul>
									</td>
									<td><div class="btn-group" role="group" aria-label="...">
										<div class="row">
											<div class="col-12">
												<a class="btn btn-secondary  text-center" data-toggle="tooltip" data-placement="top" title="Editar" role="button" href="{{route('specialty_categories.edit',$admin->id)}}">Editar
												</a>
												<a class="btn btn-secondary  text-center" data-toggle="tooltip" data-placement="top" title="Administrar Persmisos" role="button" href="{{route('listPermissionSet',$admin->id)}}">Administrar Persmisos
												</a>
												<a class="btn btn-secondary  text-center" data-toggle="tooltip" data-placement="top" title="Administrar Ciudades" role="button" href="">Administrar Ciudades
												</a>
											</div>
										</div>
									</div>
								</td>
								@endforeach

						  </tbody>
              <tfoot>
                <tr>
                  <td colspan="4">{{ $administrators->links() }}</td>
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
