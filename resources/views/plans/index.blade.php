@extends('layouts.app')

@section('content')
<section class="box-register">

		<div class="container">
			<div class="register">
				<div class="row">
					<div class="col-12 mb-5">
						<h2 class="text-center font-title">Planes</h2>
					</div>
				</div>


				<div class="row">

          <div class="col-12 mb-5">
            <h3>Planes para Medicos y Especialistas</h3>
          </div>


						<table class="table table-responsive">
						  <thead class="thead-color">
						    <tr>
						      <th class="text-center">Nombre</th>
						      <th class="text-center">Aplicable a</th>
									<th class="text-center">Precio</th>
									<th class="text-center">Modules</th>
                  <th class="text-center">Ciudades</th>
                  <th class="text-center">Acciones</th>
						    </tr>
						  </thead>
						  <tbody>

								@foreach ($plans1 as $plan)
								<tr>
									<td>{{$plan->name}}</th>
									<td class="text-center">{{$plan->applicable}}</td>
									<td class="text-center">{{$plan->price}}</td>
                  <td class="text-center"></td>
                  <td class="text-center"></td>
									<td><div class="btn-group" role="group" aria-label="...">
										<div class="row">
											<div class="col-12">
                        <!-- Button trigger modal -->
                      <button onclick="edit($plan->price)"type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Editar Precio
                      </button>
											</div>
										</div>
									</div>
								</td>
								@endforeach

						  </tbody>
              <tfoot>
                <tr>

                </tr>
              </tfoot>
						</table>

            <div class="col-12 mb-5">
              <h3>Planes para Medicina Alternativa, Psicologos y Terapeutas</h3>
            </div>

            <table class="table table-responsive">
              <thead class="thead-color">
                <tr>
                  <th class="text-center">Nombre</th>
                  <th class="text-center">Aplicable a</th>
                  <th class="text-center">Precio</th>
                  <th class="text-center">Modules</th>
                  <th class="text-center">Ciudades</th>
                  <th class="text-center">Acciones</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($plans2 as $plan)
                <tr>
                  <td>{{$plan->name}}</th>
                  <td class="text-center">{{$plan->applicable}}</td>
                  <td class="text-center">{{$plan->price}}</td>
                  <td class="text-center"></td>
                  <td class="text-center"></td>
                  <td><div class="btn-group" role="group" aria-label="...">
                    <div class="row">
                      <div class="col-12">
                        <a class="btn btn-secondary  text-center" data-toggle="tooltip" data-placement="top" title="Editar" role="button" href="{{route('specialty_categories.edit',$plan->id)}}">Editar
                        </a>
                      </div>
                    </div>
                  </div>
                </td>
                @endforeach

              </tbody>
              <tfoot>
                <tr>

                </tr>
              </tfoot>
            </table>



            <div class="col-12 mb-5">
              <h3>Planes para Centros Medicos</h3>
            </div>

            <table class="table table-responsive">
              <thead class="thead-color">
                <tr>
                  <th class="text-center">Nombre</th>
                  <th class="text-center">Aplicable a</th>
                  <th class="text-center">Precio</th>
                  <th class="text-center">Modules</th>
                  <th class="text-center">Ciudades</th>
                  <th class="text-center">Acciones</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($plans3 as $plan)
                <tr>
                  <td>{{$plan->name}}</th>
                  <td class="text-center">{{$plan->applicable}}</td>
                  <td class="text-center">{{$plan->price}}</td>
                  <td class="text-center"></td>
                  <td class="text-center"></td>
                  <td><div class="btn-group" role="group" aria-label="...">
                    <div class="row">
                      <div class="col-12">
                        <a class="btn btn-secondary  text-center" data-toggle="tooltip" data-placement="top" title="Editar" role="button" href="{{route('specialty_categories.edit',$plan->id)}}">Editar
                        </a>
                      </div>
                    </div>
                  </div>
                </td>
                @endforeach

              </tbody>
              <tfoot>
                <tr>

                </tr>
              </tfoot>
            </table>
				</div>

			</div>
		</div>
	</section>

  {{-- modal-price edit --}}



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Precio plan: <span id="namePlan"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!!Form::open(['route'=>'assistant.store','method'=>'POST'])!!}
            <label for="">Precio de <span id="namePlan"></span></label>
            {!!Form::number('price',null,['class'=>'form-control','id'=>'price'])!!}

            {!!Form::hidden('plan_id',null,['class'=>'form-control','placeholder'=>'Apellido','id'=>'plan_id'])!!}

             {!!Form::submit('Establecer Precio',['class'=>'btn btn-primary'])!!}
             <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      {!!Form::close()!!}
      </div>
      <div class="modal-footer">


      </div>
    </div>
  </div>
</div>
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

@section('scriptJS')
  <script type="text/javascript">
    alert(sdsd)
  </script>
@endsection
