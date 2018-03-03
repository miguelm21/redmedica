@extends('layouts.app')

@section('content')
<section class="box-register">
		<div class="container">
			<div class="register">
				<div class="row">
					<div class="col-12 mb-5">
						<h2 class="text-center font-title">En Desarrollo/No funciona</h2>
					</div>
				</div>

				<div class="row mb-3">
					<div class="col-12 text-right">
						<a class="btn btn-secondary" href="{{route('home')}}">Atras</a>
					</div>
				</div>

				<div class="row">
						<table class="table table-responsive table-config">
						  <thead class="thead-color">
						    <tr>
						      <th class="text-center">#</th>
						      <th class="text-center">Nombre</th>
						      <th class="text-center">Descripción</th>
						      <th class="text-center">Acciones</th>
						    </tr>
						  </thead>
						  <tbody>

								@foreach ($permissions as $permission)
								<tr>

									<th scope="row">{{$permission->id}}</th>
									<td class="text-center">{{$permission->name}}</th>
									<td class="text-center">{{$permission->description}}</td>

									<td>

                    <a href="{{route('PermissionSetStore',['permission'=>$permission->name,'admin_id'=>$admin->id])}}" class="btn btn-success">Asignar</a>
                    <a href="#" class="btn btn-warning">Deshacer</a>
								</td>
								@endforeach

						  </tbody>
              <tfoot>
                <tr>
                  <td colspan="4">{{ $permissions->links() }}</td>
                </tr>
              </tfoot>
						</table>
				</div>

			</div>
		</div>
	</section>


@endsection