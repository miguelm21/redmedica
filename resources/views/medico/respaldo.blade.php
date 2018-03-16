@extends('layouts.app')

@section('content')

  <!-- Large modal -->
  <button class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>


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
              ///////////////
              </div>
              <div class="col-6 text-center">
                <label for="">Barra de progreso</label>
                <div class="progress">
                  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 25%; vertical-align: center;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
            <hr>






            <div class="row">
              <div class="col-12">
                <span>Consultorio(s)</span>
              <hr>

              </div>
            </div>
            @if($consultingIsset == 0)
              No existen consultorios registrados
            @endif


            {{-- CONSULTORIOS CREADOS --}}
            @foreach ($consulting_room as $c)
              <div class="modal-content">
                <div class="col-12 text-center">
                  <h4>Consultorio: {{$c->id}}</h4>
                </div>
                <div class="box-form">
                  {!!Form::model($c,['route'=>['consulting_room.update',$c],'method'=>'POST'])!!}
                  <div class="row">

                    <div class="m-3">
                      {{Form::radio('type','Medicina General o Familiar')}}
                      <span for="">Medicina General o Familiar</span>span
                      {{Form::radio('type','Consultorio de especialidades')}}
                      <span for="">Consultorio de especialidades</span>

                      {{Form::radio('type','Consultorio odontologica')}}
                      <span for="">Consultorio odontologica</span>

                      <div class="form-inline">
                        {{Form::radio('type','other')}}
                        <span for="">Otro tipo de servicio, especifique:</span>{!!Form::text('other',null,['class'=>'form-control'])!!}
                      </div>
                    </div>
                    <div class="col-lg-4 col-12">
                      <div class="row">
                        <div class="col-12">
                           {!!Form::text('tradeName',null,['class'=>'form-control','placeholder'=>'Nombre comercial(opcional)'])!!}
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-12">
                      <div class="row">
                        <div class="col-12">
                           {!!Form::text('addres',null,['class'=>'form-control','placeholder'=>'Dirección'])!!}
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-12">
                      <div class="row">
                        <div class="col-12">
                        {!!Form::text('colony',null,['class'=>'form-control','placeholder'=>'colonia'])!!}
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-12">
                      <div class="row">
                        <div class="col-12">
                        {!!Form::text('numberExt',null,['class'=>'form-control','placeholder'=>'numero Ext(Opcional)'])!!}
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-12">
                      <div class="row">
                        <div class="col-12">
                        {!!Form::text('numberInt(Opcional)',null,['class'=>'form-control','placeholder'=>'numero Int'])!!}
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-4 col-12">
                      <div class="row">
                        <div class="col-12">
                        {!!Form::select('city',['Guanare','Acarigua'],null,['class'=>'form-control','placeholder'=>'Ciudad'])!!}
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-12">
                      <div class="row">
                        <div class="col-12">
                        {!!Form::select('state',['portuguesa','lara'],null,['class'=>'form-control','placeholder'=>'Estado'])!!}
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-12">
                      <div class="row">
                        <div class="col-12">
                        {!!Form::text('passwordUnique',null,['class'=>'form-control','placeholder'=>'Clave Unica (Opcional)'])!!}
                        </div>
                      </div>
                    </div>
                  </div>
                  {!!Form::hidden('medico_id',$medico->id)!!}
                  {!!Form::submit('Guardar')!!}
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                  </div>
                    {!!Form::close()!!}
                </div>
            @endforeach

            {{-- >Especialidad/Estduios Realizados////////////////////////////////// --}}

              <div class="row mt-3">
                <div class="col-12">


                  <h4 class="font-title-blue">Tipos de consultorios</h4>
                  <hr>
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <div class="custom-controls-stacked">
                    <label class="custom-control custom-radio">
                      <input id="radioStacked1" name="radio-stacked" type="radio" class="custom-control-input">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Medicina general o familiar</span>
                    </label>
                    <label class="custom-control custom-radio">
                      <input id="radioStacked2" name="radio-stacked" type="radio" class="custom-control-input">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Consultorio de especialidades</span>
                    </label>
                    <label class="custom-control custom-radio">
                      <input id="radioStacked1" name="radio-stacked" type="radio" class="custom-control-input">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Consultorio odontologica</span>
                    </label>
                    <label class="custom-control custom-radio">
                      <input id="radioStacked2" name="radio-stacked" type="radio" class="custom-control-input">
                      <span class="custom-control-indicator"></span>
                      <span class="custom-control-description">Otro tipo de servicio, especifique:</span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-12 text-right">
                    <a href="" data-toggle="modal" data-target="#modal-service" class="btn btn-config-blue">Especifique el típo de servicio</a>
                  <hr>
                  </div>
                </div>
              <div class="row mt-3">
                <div class="col-12">
                  <h4 class="font-title-blue">Servicios otorgados</h4>
                  <hr>
                </div>
              </div>
              <div class="row">
                <div class="col-7">
                  <div class="col-12">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa aquí el servicio o terapia que atiendas">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa aquí el servicio o terapia que atiendas">
                     </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa aquí el servicio o terapia que atiendas">
                     </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa aquí el servicio o terapia que atiendas">
                     </div>
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-12 text-right">
                    <a href="" data-toggle="modal" data-target="#modal-service2" class="btn btn-config-blue">Agregar servicio</a>
                    <button type="submit" class="btn btn-config-green">Guardar</button>
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
                <div class="col-12">
                  <div class="col-12">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa aquí el transtorno o enfermedad en la que tengas mas experiencía o por el que te busquen mas">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa aquí el transtorno o enfermedad en la que tengas mas experiencía o por el que te busquen mas">
                     </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa aquí el transtorno o enfermedad en la que tengas mas experiencía o por el que te busquen mas">
                     </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa aquí el transtorno o enfermedad en la que tengas mas experiencía o por el que te busquen mas">
                     </div>
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-12 text-center">
                    <a href="" data-toggle="modal" data-target="#modal-service2" class="btn btn-config-green">Guardar</a>
                    <hr>
                  </div>
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
                  <div class="col-6">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Facebook">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Twitter">
                     </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Google+">
                     </div>
                  </div>
                </div>
              </div>
              <div class="row">
                  <div class="col-12 text-center">
                    <button type="submit" class="btn btn-config-green">Guardar</button>
                <hr>
                  </div>
                </div>
              <div class="row mt-3">
                <div class="col-12">
                  <h4 class="font-title-blue">Mis redes sociales</h4>
                  <hr>
                </div>
              </div>

              </div>
            </div>
        </form>
      </div>
    </div>
  </section>


  <!-- Modal add consulting_room-->

  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">


    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="col-12 text-center">
          <h4>Agregar Consultorio Medico</h4>
        </div>
        <div class="box-form">
          {!!Form::open(['route'=>'consulting_room.store','method'=>'POST'])!!}
          <div class="row">

            <div class="m-3">
              {{Form::radio('type','Medicina General o Familiar')}}
              <span for="">Medicina General o Familiar</span>span
              {{Form::radio('type','Consultorio de especialidades')}}
              <span for="">Consultorio de especialidades</span>

              {{Form::radio('type','Consultorio odontologica')}}
              <span for="">Consultorio odontologica</span>

              <div class="form-inline">
                {{Form::radio('type','other')}}
                <span for="">Otro tipo de servicio, especifique:</span>{!!Form::text('other',null,['class'=>'form-control'])!!}
              </div>
            </div>


            <div class="col-lg-4 col-12">
              <div class="row">
                <div class="col-12">
                   {!!Form::text('tradeName',null,['class'=>'form-control','placeholder'=>'Nombre comercial(opcional)'])!!}
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-12">
              <div class="row">
                <div class="col-12">
                   {!!Form::text('addres',null,['class'=>'form-control','placeholder'=>'Dirección'])!!}

                </div>
              </div>
            </div>
            <div class="col-lg-4 col-12">
              <div class="row">
                <div class="col-12">
                {!!Form::text('colony',null,['class'=>'form-control','placeholder'=>'colonia'])!!}
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-12">
              <div class="row">
                <div class="col-12">
                {!!Form::text('numberExt',null,['class'=>'form-control','placeholder'=>'numero Ext(Opcional)'])!!}
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-12">
              <div class="row">
                <div class="col-12">
                {!!Form::text('numberInt(Opcional)',null,['class'=>'form-control','placeholder'=>'numero Int'])!!}
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-12">
              <div class="row">
                <div class="col-12">
                {!!Form::select('city',['Guanare','Acarigua'],null,['class'=>'form-control','placeholder'=>'Ciudad'])!!}
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-12">
              <div class="row">
                <div class="col-12">
                {!!Form::select('state',['portuguesa','lara'],null,['class'=>'form-control','placeholder'=>'Estado'])!!}
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-12">
              <div class="row">
                <div class="col-12">
                {!!Form::text('passwordUnique',null,['class'=>'form-control','placeholder'=>'Clave Unica (Opcional)'])!!}
                </div>
              </div>
            </div>
          </div>

          </div>
            {!!Form::hidden('medico_id',$medico->id)!!}
            {!!Form::submit('Guardar')!!}
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            {!!Form::close()!!}
        </div>

      </div>
    </div>
  </div>








<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="" id="info">

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection
