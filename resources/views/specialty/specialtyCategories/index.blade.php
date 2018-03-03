@extends('layouts.app')

@section('content')
<section class="box-register">
		<div class="container">
			<div class="register">
				<div class="row">
					<div class="col-12 mb-5">
						<h2 class="text-center font-title">Categorias de Especialidades Medicas</h2>
					</div>
				</div>
				<a class="btn btn-primary" href="{{route('specialty_categories.create')}}">Crear Nueva Categoria</a>

				<div class="row">
						<table class="table table-responsive">
						  <thead class="thead-color">
						    <tr>

						      <th class="text-center">Nombre</th>
						      <th class="text-center">Descripción</th>
									<th class="text-center">Acciones</th>
						    </tr>
						  </thead>
						  <tbody>

								@foreach ($categories as $category)
								<tr>

									<td class="text-center">{{$category->name}}</th>
									<td class="text-center">{{$category->description}}</td>

									<td><div class="btn-group" role="group" aria-label="...">
										<div class="row">
											<div class="col-12">
												<a class="btn btn-secondary  text-center" data-toggle="tooltip" data-placement="top" title="Editar" role="button" href="{{route('specialty_categories.edit',$category->id)}}">Editar
												</a>
											</div>
										</div>
									</div>
								</td>
								@endforeach

						  </tbody>
              <tfoot>
                <tr>
                  <td colspan="2">{{ $categories->links() }}</td>
                </tr>
              </tfoot>
						</table>
				</div>

			</div>
		</div>
	</section>
@endsection
