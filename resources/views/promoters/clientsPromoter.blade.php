@extends('layouts.app')

@section('content')
<section class="box-register">

		<div class="container">
			<div class="register">
				<div class="row">
					<div class="col-12 mb-5">
						<h2 class="text-center font-title">Cleintes de: {{$promoter->name}} {{$promoter->lastName}}</h2>
					</div>
				</div>

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

								@foreach ($medicalCenters as $mC)
								<tr>
									<td class="text-center">{{$mC->created_at->format('d-m-Y')}}</th>
									<td class="text-center">{{$mC->name}}</th>
									<td class="text-center">{{$mC->lastName}}</td>
									<td class="text-center">{{$mC->email}}</td>
									<td class="text-center">{{$mC->id_promoter}}</td>
                </tr>
								@endforeach

						  </tbody>
              <tfoot>
                <tr>
                  <td colspan="4">{{ $medicalCenters->links() }}</td>
                </tr>
              </tfoot>
						</table>
				</div>

			</div>
		</div>
	</section>


@endsection
