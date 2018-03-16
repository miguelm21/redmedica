@extends('layouts.app')

@section('content')

	<section class="box-register">
		<div class="container">
			<div class="register">

				<div class="row">
					<div class="col-12 text-right">
						<div class="btn-group " role="group" aria-label="Basic example">
						  <button type="button" class="btn btn-secondary">1</button>
						  <button type="button" class="btn btn-secondary">2</button>
						  <button type="button" class="btn btn-config-blue">3</button>
						</div>
					</div>
				</div>
				<div class="row mt-4">
					<div class="col-12 mb-3">
						<h5 class="text-center font-title">Ya eres miembro de la mejor red de médicos y profesionales de la salud</h5>
					</div>
				</div>
						<div class="row mt-3">
							<div class="col-6">


                @isset($photo)
                  <img src="{{asset($photo->path)}}" width="120px" height="80px" alt="">
                @endisset

                {!!Form::open(['route'=>'photo.store','method'=>'POST','files'=>true])!!}
                {!!Form::hidden('email',$medico->email)!!}
                {!!Form::hidden('medico_id',$medico->id)!!}
                {!!Form::file('image')!!}
                {!!Form::submit('Subir')!!}
                {!!Form::close()!!}
							</div>
							<div class="col-6 text-center">
								<label for="">Barra de progreso</label>
								<div class="progress">
								  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 25%; vertical-align: center;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
						</div>
						<hr>
            {!!Form::model($medico,['route'=>['medico.update',$medico],'method'=>'PUT','id'=>'person'])!!}

            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="form-group">
                    {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre'])!!}
                </div>
              </div>
                <div class="col-lg-6 col-12">
                  <div class="form-group">
                       {!!Form::text('lastName',null,['class'=>'form-control','placeholder'=>'Apellido'])!!}
                   </div>
                </div>
            </div>
            <div class="row">
              <div class="col-6">
                  <div class="form-group">
                      {!!Form::select('gender',['Masculino','Femenino'],null,['class'=>'form-control','placeholder'=>'Sexo'])!!}
                  </div>
              </div>
              <div class="col-6">
                    <div class="form-group">
                      {!!Form::select('city',$cities,null,['class'=>'form-control','placeholder'=>'Ciudad'])!!}
                  </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-12">
                <div class="form-group">
                    {!!Form::number('phone',null,['class'=>'form-control','placeholder'=>'Celular'])!!}
                </div>
              </div>
                <div class="col-lg-6 col-12">
                  <div class="form-group">
                     {!!Form::text('identification',null,['class'=>'form-control','placeholder'=>'cedula'])!!}

                   </div>
                </div>
            </div>

            <div class="">

                <div class="form-group">
                  <div class="row">
                      <div class="col-8" style="text-align:justify">
                        <p for="">¿Desea que su numero celular aparezca visible en formatos e información a pacientes?</p>
                      </div>
                      <div class="col-4">
                           {{Form::select('showNumber',['si'=>'si','no'=>'no'],null,['class'=>'form-control'])}}
                      </div>
                  </div>


                </div>
                <div class="row">
                  <div class="col-6">

                  </div>
                  <div class="col-6">
                    <button type="submit" name="button" class="btn btn-primary btn-block">Guardar Cambios</button>
                  </div>
                </div>
                   {!!Form::close()!!}
          </div>
          <hr>

          <div class="row">
            <div class="col-12">
              <h4 class="font-title-blue">Consultorios</h4>
            <hr>

              <table class="table config-table">
                <thead>
                  <th>Nombre Comercial</th>
                  <th>Tipo</th>
                  <th>Numero Ext.</th>
                  <th>Numero Int.</th>
                  <th>Ciudad</th>
                  <th>Estado</th>
                  <th>Clave Unica</th>
                  <th>Dirección</th>
                </thead>
                <tbody>
                  @foreach ($consulting_rooms as $consulting_room)
                    <tr>
                      @isset($consulting_room->tradeName)
                        <td>{{$consulting_room->tradeName}}</td>
                      @else
                        <td style="color:rgb(173, 173, 173)">N.P.</td>
                      @endisset
                      <td>{{$consulting_room->type}}</td>

                      @isset($consulting_room->numberExt)
                        <td>{{$consulting_room->numberExt}}</td>
                      @else
                        <td style="color:rgb(173, 173, 173)">N.P.</td>
                      @endisset

                      @isset($consulting_room->numberInt)
                        <td>{{$consulting_room->numberInt}}</td>
                      @else
                        <td style="color:rgb(173, 173, 173)">N.P.</td>
                      @endisset

                      <td>{{$consulting_room->city}}</td>
                      <td>{{$consulting_room->state}}</td>
                      @isset($consulting_room->passwordUnique)
                        <td>{{$consulting_room->passwordUnique}}</td>
                      @else
                        <td style="color:rgb(173, 173, 173)">N.P.</td>
                      @endisset
                        <td>{{$consulting_room->addres}}</td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <td colspan="7">{{$info_medico->links()}}</td>
                </tfoot>
              </table>
            </div>
          </div>
					<div class="row">
						<div class="col-12 text-right">
							<a href="{{route('consulting_room_create',$medico->id)}}" class="btn btn-config-blue">Agregar Consultorio</a>
						</div>
					</div>
          @if($consultingIsset == 0)

          @endif
								<hr>
                <div class="box-panel-register">
                   <div class="row mt-3">
                     <div class="col-12 text-center">
                       <h4 class="font-title-blue">Especialidad/Estudios Realizados</h4>
                     <hr>
                     </div>
                   </div>
                   <div class="row">
                     <div class="">
                           <table class="table table-config">
                             <thead>
                               <th>Tipo</th>
                               <th>Especialidad</th>
                               <th>Institución</th>
                               <th>Desde</th>
                               <th>Hasta</th>
                               <th>Estado</th>
                               <th>información Adicional</th>
                             </thead>
                             <tbody>
                               @foreach ($info_medico as $info)
                                 <tr>
                                   <td>{{$info->type}}</td>
                                   <td>{{$info->specialty}}</td>
                                   <td>{{$info->institution}}</td>
                                   <td>{{\Carbon\Carbon::parse($info->from)->format('m-d-Y')}}</td>
                                   <td>{{\Carbon\Carbon::parse($info->until)->format('m-d-Y')}}</td>
                                   <td>{{$info->state}}</td>
                                   @isset($info->aditional)
                                    <td>{{$info->aditional}}</td>
                                   @else
                                     <td style="color:rgb(173, 173, 173)">N.P.</td>
                                   @endisset

                                 </tr>
                               @endforeach
                             </tbody>
                             <tfoot>
                               <td colspan="7">{{$info_medico->links()}}</td>
                             </tfoot>
                           </table>
                     </div>
                   </div>
                   <div class="row">
                     <div class="col-12 text-right">
                       <a href="{{route('info_medicoCreate',$medico->id)}}" class="btn btn-config-blue">Agregar Especialidad/Estudios Realizados</a>
                     </div>
                   </div>
                 </div>

							<div class="row mt-3">
								<div class="col-12">
									<h4 class="font-title-blue">Servicios otorgados</h4>
									<hr>
								</div>
							</div>
              <div class="row" style="text-align:justify">
                <ul>
                @foreach ($medico_services as $service)
                  <li>{{$service->name}}</li>
                @endforeach
              </ul>
                </div>

							<div class="row">
						  		<div class="col-12 text-right">
						  			<a href="" data-toggle="modal" data-target="#modal-service2" class="btn btn-config-blue">Agregar servicio</a>
								<hr>
						  		</div>
						  	</div>
						  	</div>

						  	<div class="row mt-3">
								<div class="col-12">
									<h4 class="font-title-blue">Experiencia en transtornos mentales</h4>
									<hr>
								</div>
							</div>

              <div class="row">
                <div class="col-lg-10 col-12">
                  <div class="form-group">
                      {!!Form::open(['route'=>'medico_experience_store','method'=>'POST'])!!}
                      {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre del trastorno o enfermedad, en la que tengas mas experiencia.'])!!}
                      {!!Form::hidden('medico_id',$medico->id)!!}
                  </div>
                </div>
                  <div class="col-lg-2 col-12">
                    <div class="form-group">
                      <button type="submit" name="button" class="btn btn-primary">Agregar</button>
                      {!!Form::close()!!}
                     </div>
                  </div>
              </div>
              <div class="row" style="text-align:justify">
                <ul>
                @foreach ($medico_experience as $experience)
                    <li><p>{{$experience->name}}</p></li>
                @endforeach
              </ul>
              </div>

						  	<div class="row mt-3">
								<div class="col-12">
									<h4 class="font-title-blue">Agrega videos y fotos</h4>
									<hr>
								</div>
							</div>
							<div class="row">
								<div class="col-6">
								 <div class="form-group">
								    <input type="file" name="img[]" class="file">
								    <div class="input-group col-xs-12">
								      <span class="input-group-addon"><i class="fas fa-images"></i></span>
								      <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
								      <span class="input-group-btn">
								        <button class="browse btn btn-config-blue input-lg" type="button"> Agrega una imagen</button>
								      </span>
								    </div>
								  </div>
								</div>
								<div class="col-6">
									<div class="form-group">
									   <input type="file" name="img[]" class="file">
									   <div class="input-group col-xs-12">
									     <span class="input-group-addon"><i class="fas fa-video"></i></span>
									     <input type="text" class="form-control input-lg" disabled placeholder="Upload Video">
									     <span class="input-group-btn">
									       <button class="browse btn btn-config-blue input-lg" type="button"> Agrega un video</button>
									     </span>
									   </div>
									 </div>
								</div>
							</div>
							<hr>
							<div class="row mt-3">
								<div class="col-12">
									<h4 class="font-title-blue">Mis redes sociales</h4>
									<hr>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
                  <div class="row">
                    <div class="col-lg-3 col-12">
                      {!!Form::open(['route'=>'medico_social_network_store','method'=>'POST'])!!}
                      <div class="form-group">
                          {!!Form::select('name',['Facebook'=>'Facebook','Twiter'=>'Twiter','Instagram'=>'Instagram'],null,['class'=>'form-control','placeholder'=>'Red Social'])!!}
                      </div>
                    </div>
                    <div class="col-lg-7 col-12">
                      <div class="form-group">
                          {!!Form::text('link',null,['class'=>'form-control','placeholder'=>'Ingrese la Dirección Url del perfil de su Red Social,'])!!}
                          {!!Form::hidden('medico_id',$medico->id)!!}
                      </div>

                    </div>
                      <div class="col-lg-2 col-12">
                        <div class="form-group">
                          <button type="submit" name="button" class="btn btn-primary">Agregar</button>
                          {!!Form::close()!!}
                         </div>
                      </div>
                  </div>
                  @foreach ($social_networks as $social)
                    <div class="col-6">
                      <div class="form-group" style="text-align:justify">

                        <a href="{{$social->link}}" class="btn btn-primary">{{$social->name}}</a>
                      </div>
                    </div>
                  @endforeach

								</div>
							</div>

						  <div class="row mt-4">
								<div class="col-12">

								</div>
							</div>

  						</div>
					  </div>
				</form>
			</div>
		</div>
	</section>


    	<!-- Modal add service-->
<div class="modal fade" id="modal-service2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
	        <div class="row">

	        	<div class="col-12 text-center">
	        		<h4>Agregar Servicio o Terapia que atiendas</h4>
	        	</div>

				<div class="col-12 mt-3">
          {!!Form::open(['route'=>'service_medico_store','method'=>'POST'])!!}

           {!!Form::text('name',null,['class'=>'form-control'])!!}
          {!!Form::hidden('medico_id',$medico->id)!!}

				</div>

	        </div>
	        <div class="row mt-3">
	        	<div class="col-12">
              <button type="submit" name="button" class="btn btn-block btn-config-green">Agregar</button>
              {!!Form::close()!!}
	        	</div>
	        </div>
		</div>
    </div>
   </div>
  </div>

  <!-- Modal add service-->
<div class="modal fade" id="modal-service" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-body">
      <div class="row">
        <div class="col-12 text-center">
          <h4>Agregar otro servicio</h4>
        </div>
    <div class="col-12 mt-3">
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    </div>
      </div>
      <div class="row mt-3">
        <div class="col-12">
          <a href="" >Agregar</a>
        </div>
      </div>
</div>
</div>
</div>
</div>
@endsection
