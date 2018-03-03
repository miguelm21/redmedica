@extends('layouts.app')

@section('content')
<section class="box-register">
		<div class="container">
			<div class="register">
				<div class="row">
					<div class="col-12 mb-5">
						<h2 class="text-center font-title">Especialidades Medicas</h2>
					</div>
				</div>
				<a class="btn btn-primary" href="{{route('specialty.create')}}">Crear Nueva Especialidad</a>

				<div class="row">
						<table class="table table-responsive">
						  <thead class="thead-color">
						    <tr>
						      <th class="text-center">#</th>
						      <th class="text-center">Nombre</th>
						      <th class="text-center">Descripción</th>s
									 <th class="text-center">Categoria</th>
									<th class="text-center">Acciones</th>
						    </tr>
						  </thead>
						  <tbody>

								@foreach ($specialties as $specialty)
								<tr>
									<th scope="row">{{$specialty->id}}</th>
									<td class="text-center">{{$specialty->name}}</th>
									<td class="text-center">{{$specialty->description}}</td>
									<td class="text-center">{{$specialty->category->name}}</td>
									<td><div class="btn-group" role="group" aria-label="...">
										<div class="row">
											<div class="col-12">
												<a class="btn btn-secondary  text-center" data-toggle="tooltip" data-placement="top" title="Editar" role="button" href="{{route('specialty_categories.edit',$specialty->id)}}">Editar
												</a>
											</div>
										</div>
									</div>
								</td>
								@endforeach

						  </tbody>
              <tfoot>
                <tr>
                  <td colspan="4">{{ $specialties->links() }}</td>
                </tr>
              </tfoot>
						</table>
				</div>

			</div>
		</div>
	</section>

@endsection
