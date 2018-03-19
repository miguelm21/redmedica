@extends('layouts.app')
@section('css')
  <link rel="stylesheet" type="text/css" href="{{asset('fullcalendar/fullcalendar.min.css')}}">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-datetimepicker/2.7.1/css/bootstrap-material-datetimepicker.css"> --}}
  {{-- <link href='../fullcalendar.print.min.css' rel='stylesheet' media='print' /> --}}
  {{-- <style>

    body {
      margin: 40px 10px;
      padding: 0;
      font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
      font-size: 14px;
    }

    #calendar {
      max-width: 900px;
      margin: 0 auto;
    }

  </style> --}}
@endsection
{{-- ///////////////////////////////////////////////////////CONTENIDO//////////////////// --}}

  @section('content')

    <section class="section-dashboard">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-lg-3">
            <div id="dashboard">
              <img  class="img-dashboard" src="img/Medicossi-Marca original-04.png" alt="">
              <div class="col-12 border-head-panel">
                <span>Usuario firmado:</span>
                <span>{{$medico->email}}</span>
              </div>
              <div class="col-12 border-panel-green my-1">
                <a href="">
                  <span class="font-title">Otorgar horario de consulta</span>
                </a>
              </div>
              <div class="border-panel-blue my-1">
                <div class="col-12 box-control-panel ">
                  <a href="" id="blue">
                    <i class="fas fa-plus"></i>
                    <h5>Nueva consulta</h5>
                  </a>
                </div>
                <hr>
                <div class="col-12 box-control-panel text-center">
                  <a href="" id="green">
                    <i class="fas fa-plus"></i>
                    <h5>Dar un paciente de alta</h5>
                  </a>
                </div>
                <hr>
                <div class="col-12">
                  <div class="">
                    <div class="card-body p-2 text-center">
                      <h5>Paciente ya registrado</h5>
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-outline-primary" type="button"><i class="fas fa-plus"></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="col-12">
                  <div class="col-12 box-control-panel text-center">
                    <a href="" id="green">
                      <h5>Nueva nota médica</h5>
                      <i class="fas fa-plus-circle"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="border-panel-green">
                <div class="col-12">
                  <div class="row">
                    <div class="col-12 box-control-panel text-center">
                      <a href="">
                        <img src="img/botones-medicossi-26.png" alt="">
                        <h5>Agrega nueva cita</h5>
                      </a>
                    </div>
                    <div class="col-12">
                      <div class="col-lg-12 col-12 mt-2">
                        <button type="submit" class="btn-config-blue btn btn-block" data-toggle="modal" data-target="#modal-end-consult">Termino de consulta</button>
                      </div>
                      <div class="col-lg-12 col-12 mt-2">
                        <button type="submit" class="btn-config-green btn btn-block">Nuevo recordatorio</button>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="col-12">
                  <div class="row">
                    <div class="col-12 box-control-panel text-center">
                      <a href="">
                        <i class="fas fa-user-md"></i>
                        <h5>Mis calificaciones<i class="fas fa-bell icon-notification"></i></h5>
                      </a>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="col-12">
                  <div class="col-12 box-control-panel text-center">
                    <a href="">
                      <i class="fas fa-chart-line"></i>
                      <h5>Mis Estadisticas</h5>
                    </a>
                  </div>
                </div>
                <hr>
                <div class="col-12 box-control-panel text-center">
                  <a href="
                  "><label class="filebutton">
                    <img src="img/botones-medicossi-31.png" alt="">
                    <span><input type="file" id="myfile" name="myfile"></span>
                    <h5>Respaldar mi información</h5>
                  </label>
                </a>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <a href="" class="btn-config-green btn btn-block">Configuración</a>
                <a href="" class="btn-config-green btn btn-block">Atras</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-12 box-mesage text-center">
          <div class="register">
            <div class="row">
              <div class="col-12">
                <h2 class="text-center font-title">Profesionales</h2>
                <hr>
              </div>
            </div>
            <div class="row justify-content-center mb-2">
              <div class="col-10">
                <div class="row">
                  <div class="col-lg-4 col-6">
                    <img src="img/botones-medicossi-26.png" alt="">
                  </div>
                  <div class="col-lg-4 col-6">
                    <img src="img/botones-medicossi-27.png" alt="">
                  </div>
                  <div class="col-lg-4 mt-3 col-12">
                    <a href=""><img src="img/botones-medicossi-32.png" alt=""></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-12">
                {{-- <div class="align-items-center d-flex">
                  <span>Ver: </span>
                  <select class="custom-select">
                    <option selected>Dias/Mes/Semana/Año</option>
                    <option value="1">Día</option>
                    <option value="2">Mes</option>
                    <option value="3">Semana</option>
                    <option value="4">Año</option>
                    <option value="5">Fecha</option>
                  </select>
                </div> --}}
              </div>
              <div class="col-12 my-4">
                <div class="row text-center">
                  <div class="col">
                    <span class="checkbox-wrapper">
                      <input type="checkbox">
                    </span>
                    <label for="">Disponible</label>
                  </div>
                  <div class="col">
                    <span class="checkbox-wrapper">
                      <input type="checkbox">
                    </span>
                    <label for="">Cita por internet</label>
                  </div>
                  <div class="col">
                    <span class="checkbox-wrapper">
                      <input type="checkbox">
                    </span>
                    <label for="">Confirmada con paciente</label>
                  </div>
                  <div class="col">
                    <span class="checkbox-wrapper">
                      <input type="checkbox">
                    </span>
                    <label for="">Paciente valorado</label>
                  </div>
                  <div class="col">
                    <span class="checkbox-wrapper">
                      <input type="checkbox">
                    </span>
                    <label for="">Cita cerrada y cobrada</label>
                  </div>
                  <div class="col">
                    <span class="checkbox-wrapper">
                      <input type="checkbox">
                    </span>
                    <label for="">Pendiente por cobrar o aseguradora</label>
                  </div>
                  {{-- <div class="col">
                    <span class="checkbox-wrapper">
                      <input type="checkbox">
                    </span>
                    <label for="">Paciente cancelo</label> --}}
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <div id="example">
{{-- ////////////////////FULLCALENDAR  ////////////////////FULLCALENDAR  ////////////////////FULLCALENDAR --}}
              <div id='calendar' style=""></div>
{{-- ////////////////////FULLCALENDAR  ////////////////////FULLCALENDAR  ////////////////////FULLCALENDAR --}}


  <!-- 						<div id="team-schedule">
                <div id="people">
                  <input checked type="checkbox" id="alex" aria-label="Alex" value="1">
                  <input checked type="checkbox" id="bob" aria-label="Bob" value="2">
                  <input type="checkbox" id="charlie" aria-label="Charlie" value="3">
                </div>
              </div> -->
              {{-- <div id="scheduler"></div> --}}
            </div>
            <div class="row my-5">
              <div class="col-lg-10 col-12 align-items-center">
                <h6>¿Dese que se mande un mensaje de recordatorio a su paciente con estatus de cita confirmada?</h6>
              </div>
              <div class="col-lg-2 col-12">
                <div class="radio-switch">
                  <div class="radio-switch-field">
                    <input id="switch-off" type="radio" name="radio-switch" value="off" checked>
                    <label for="switch-off">No</label>
                  </div>
                  <div class="radio-switch-field">
                    <input id="switch-on" type="radio" name="radio-switch" value="on">
                    <label for="switch-on">Si</label>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                  <label class="custom-control-label" for="customRadioInline1">Una hora antes</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                  <label class="custom-control-label" for="customRadioInline2">5 horas antes</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                  <input type="radio" id="customRadioInline3" name="customRadioInline1" class="custom-control-input">
                  <label class="custom-control-label" for="customRadioInline3">1 dia antes</label>
                </div>
              </div>
            </div>
                      <div class="row my-5">
                          <div class="col-lg-10 col-12 align-items-center">
                              <h6>¿Dese que se mande un mensaje de confirmación a su paciente con estatus cita por internet??</h6>
                          </div>
                          <div class="col-lg-2 col-12">
                              <div class="radio-switch">
                                  <div class="radio-switch-field">
                                      <input id="switch-off1" type="radio" name="radio-switch1" value="off" checked>
                                      <label for="switch-off1">No</label>
                                  </div>
                                  <div class="radio-switch-field">
                                      <input id="switch-on1" type="radio" name="radio-switch1" value="on">
                                      <label for="switch-on1">Si</label>
                                  </div>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline5" name="customRadioInline2" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadioInline5">En cuanto se confirme su espacio</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline6" name="customRadioInline2" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadioInline6">5 horas antes</label>
                              </div>
                              <div class="custom-control custom-radio custom-control-inline">
                                  <input type="radio" id="customRadioInline7" name="customRadioInline2" class="custom-control-input">
                                  <label class="custom-control-label" for="customRadioInline7">1 dia antes</label>
                              </div>
                          </div>
                      </div>

      <!-- 					<div class="row">
              <div class="col-12">
                <h3 class="text-center"> Historia clínica</h3>
                <hr>
                <div class="row align-items-center mt-3">
                  <div class="col-6 col-lg-2 my-2 text-center">
                    <a href="#">
                      <div class=" button-panel">
                        <span><i class="fas fa-chart-line"></i>Nueva nota</span>
                      </div>
                    </a>
                  </div>
                  <div class="col-6 col-lg-2 my-2 text-center">
                    <a href="#">
                      <div class=" button-panel">
                        <span>Ultima nota médica</span>
                      </div>
                    </a>
                  </div>
                  <div class="col-6 col-lg-2 my-2 text-center">
                    <a href="#">
                      <div class=" button-panel">
                        <span>Nota anterior</span>
                      </div>
                    </a>
                  </div>
                  <div class="col-6 col-lg-2 my-2 text-center">
                    <a href="#">
                      <div class=" button-panel">
                        <span>Nota pasada a la anterior</span>
                      </div>
                    </a>
                  </div>
                  <div class="col-6 col-lg-2 my-2 text-center">
                    <a href="#">
                      <div class=" button-panel">
                        <span>Mas notas por fechas</span>
                      </div>
                    </a>
                  </div>
                  <div class="col-6 col-lg-2 my-2 text-center">
                    <a href="#">
                      <div class=" button-panel" id="hover-green">
                        <span>Adjntar archivo al</span>
                      </div>
                    </a>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-12">
                    <div class="card border-primary" style="width: 70%; margin: auto;">
                      <div class="card-title">
                        <h4>Tipo de consulta</h4>
                        <hr class="hr">
                      </div>
                      <div class="card-body py-3">
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                          <label class="custom-control-label" for="customRadioInline1">Primera Consulta</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                          <label class="custom-control-label" for="customRadioInline2">Consulta Sub-secuente </label>
                        </div>
                        <div class="card border-primary mt-3"  style="width: 70%; margin: auto;">
                          <div class="card-body my-3">
                            <div class="custom-control custom-radio">
                              <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                              <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                              <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                            </div>
                            <div class="custom-control custom-radio">
                              <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                              <label class="custom-control-label" for="customRadio3">Or toggle this other custom radio</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row my-3">
                  <div class="col-12">
                    <h3>Datos generales</h3>
                    <hr>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <h3>Alta de paciente</h3>
                    <hr>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="modal-end-consult" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title font-title" id="exampleModalLabel">Agregar monto de la consulta</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
      <div class="row">
          <div class="col-12">
             <label for="form-control">Indique precio de consulta</label>
         </div>
         <div class="input-group col-lg-8 col-12 mb-3">
             <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)">
             <div class="input-group-append">
                 <span class="input-group-text">$</span>
             </div>
         </div>
         <hr>
     </div>
     <div class="row">
         <div class="col-12">
             <label for="" class="font-title">Confirmada con paciente</label>
         </div>
     </div>
  </div>
  <div class="modal-footer">
      <button type="button" class="btn btn-config-green" data-dismiss="modal">Atras</button>
      <button type="button" class="btn btn-config-blue">Confirmar pago</button>
  </div>
  </div>
  </div>
  </div>

  <!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalCreate">
  Launch demo modal
</button> --}}

<!-- ///////////////////////////Modal CREATE-->
<div class="modal fade" id="ModalCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="text-align:justify">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary" style="color:white">
        <h5 class="modal-title" id="exampleModalLabel">Crear Evento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!!Form::open(['route'=>'medico_diary.store','method'=>'POST'])!!}
        {!!Form::hidden('medico_id',$medico->id)!!}
        <div class="form-group">
          <label for="">Titulo</label>
          {!!Form::text('title',null,['class'=>'form-control','id'=>'title'])!!}
        </div>
        <div class="form-group">
          <label for="">Tipo de Evento</label>
          {!!Form::select('eventType',['Normal'=>'Normal','Importante'=>'Importante','Recordatorio'=>'Recordatorio'],null,['class'=>'form-control','id'=>'title'])!!}
        </div>
        <div class="form-group">
          <label for="">Fecha de inicio</label>
          {!!Form::date('date_start',null,['class'=>'form-control','id'=>'date_start'])!!}
        </div>
        <div class="form-group">
          <div class="form-inline">
          <label for="">Hora de Inicio</label>
            {!!Form::select('hourStart',['00'=>'00','01'=>'01','02'=>'02','03'=>'03','04'=>'04','05'=>'05','06'=>'06','07'=>'07','08'=>'08','09'=>'09','10'=>'10','11'=>'11','12'=>'12','13'=>'13','14'=>'14','15'=>'15','16'=>'16','17'=>'17','18'=>'18','19'=>'19','20'=>'20','21'=>'21','22'=>'22','23'=>'23','24'=>'24'],null,['class'=>'form-control','id'=>'date_start'])!!}
              {!!Form::select('minsStart',['00'=>'00','01'=>'01','02'=>'02','03'=>'03','04'=>'04','05'=>'05','06'=>'06','07'=>'07','08'=>'08','09'=>'09','10'=>'10','11'=>'11','12'=>'12','13'=>'13','14'=>'14','15'=>'15','16'=>'16','17'=>'17','18'=>'18','19'=>'19','20'=>'20','21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28','29'=>'29','30'=>'30','31'=>'31','32'=>'32','33'=>'33','34'=>'34','35'=>'35','36'=>'36','37'=>'37','38'=>'38','39'=>'39','40'=>'40','41'=>'41','42'=>'42','43'=>'43','44'=>'44','45'=>'45','46'=>'46','47'=>'47','48'=>'48','49'=>'49','50'=>'50','51'=>'51','52'=>'52','53'=>'53','54'=>'54','55'=>'55','56'=>'56','57'=>'57','58'=>'58','59'=>'59'],null,['class'=>'form-control','id'=>'date_start'])!!}
            </div>
        </div>
        <div class="form-group">
          <label for="">Fecha de Culminación (Opcional)</label>
          {!!Form::date('date_End',null,['class'=>'form-control','id'=>'date_start'])!!}
        </div>
        <div class="form-group">
          <div class="form-inline">
          <label for="">Hora de Culminación (Opcional)</label>
            {!!Form::select('hourEnd',['--'=>'--','01'=>'01','02'=>'02','03'=>'03','04'=>'04','05'=>'05','06'=>'06','07'=>'07','08'=>'08','09'=>'09','10'=>'10','11'=>'11','12'=>'12','13'=>'13','14'=>'14','15'=>'15','16'=>'16','17'=>'17','18'=>'18','19'=>'19','20'=>'20','21'=>'21','22'=>'22','23'=>'23','24'=>'24'],null,['class'=>'form-control','id'=>'date_start'])!!}
              {!!Form::select('minsEnd',['--'=>'--','00'=>'00','01'=>'01','02'=>'02','03'=>'03','04'=>'04','05'=>'05','06'=>'06','07'=>'07','08'=>'08','09'=>'09','10'=>'10','11'=>'11','12'=>'12','13'=>'13','14'=>'14','15'=>'15','16'=>'16','17'=>'17','18'=>'18','19'=>'19','20'=>'20','21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28','29'=>'29','30'=>'30','31'=>'31','32'=>'32','33'=>'33','34'=>'34','35'=>'35','36'=>'36','37'=>'37','38'=>'38','39'=>'39','40'=>'40','41'=>'41','42'=>'42','43'=>'43','44'=>'44','45'=>'45','46'=>'46','47'=>'47','48'=>'48','49'=>'49','50'=>'50','51'=>'51','52'=>'52','53'=>'53','54'=>'54','55'=>'55','56'=>'56','57'=>'57','58'=>'58','59'=>'59'],null,['class'=>'form-control','id'=>'date_start'])!!}
            </div>
        </div>

        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
        {!!Form::close()!!}
      </div>
    </div>
    </div>
  </div>


  <!-- /////////Modal EDITARRRR-Modal EDITARRRR-Modal EDITARRRR-///////////////////Modal EDITARRRR-->
  <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="text-align:justify">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h5 class="modal-title" id="exampleModalLabel" style="color:white">Editar Evento</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {!!Form::open(['route'=>['medico_diary.update',$medico->id],'method'=>'PUT'])!!}
          {!!Form::hidden('medico_id',$medico->id)!!}
          {!!Form::hidden('event_id',null,['id'=>'event_id'])!!}
          <div class="form-group">
            <label for="">Titulo</label>
            {!!Form::text('title',null,['class'=>'form-control','id'=>'titleUp'])!!}
          </div>
          <div class="form-group">
            <label for="">Tipo de Evento</label>
            {!!Form::select('eventType',['Normal'=>'Normal','Importante'=>'Importante','Recordatorio'=>'Recordatorio'],null,['class'=>'form-control','id'=>'eventTypeUp'])!!}
          </div>
          <div class="form-group">
            <label for="">Fecha de inicio</label>
            {!!Form::date('date_start',null,['class'=>'form-control','id'=>'dateStartUp'])!!}
          </div>
          <div class="form-group">
            <div class="form-inline">
            <label for="">Hora de Inicio:</label>
              {!!Form::select('hourStart',['00'=>'00','01'=>'01','02'=>'02','03'=>'03','04'=>'04','05'=>'05','06'=>'06','07'=>'07','08'=>'08','09'=>'09','10'=>'10','11'=>'11','12'=>'12','13'=>'13','14'=>'14','15'=>'15','16'=>'16','17'=>'17','18'=>'18','19'=>'19','20'=>'20','21'=>'21','22'=>'22','23'=>'23','24'=>'24'],null,['class'=>'form-control','id'=>'hourStartUp'])!!}
                {!!Form::select('minsStart',['00'=>'00','01'=>'01','02'=>'02','03'=>'03','04'=>'04','05'=>'05','06'=>'06','07'=>'07','08'=>'08','09'=>'09','10'=>'10','11'=>'11','12'=>'12','13'=>'13','14'=>'14','15'=>'15','16'=>'16','17'=>'17','18'=>'18','19'=>'19','20'=>'20','21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28','29'=>'29','30'=>'30','31'=>'31','32'=>'32','33'=>'33','34'=>'34','35'=>'35','36'=>'36','37'=>'37','38'=>'38','39'=>'39','40'=>'40','41'=>'41','42'=>'42','43'=>'43','44'=>'44','45'=>'45','46'=>'46','47'=>'47','48'=>'48','49'=>'49','50'=>'50','51'=>'51','52'=>'52','53'=>'53','54'=>'54','55'=>'55','56'=>'56','57'=>'57','58'=>'58','59'=>'59'],null,['class'=>'form-control','id'=>'minsStartUp'])!!}
              </div>
          </div>
          <div class="form-group">
            <label for="">Fecha de Culminación (Opcional)</label>
            {!!Form::date('date_End',null,['class'=>'form-control','id'=>'dateEndUp'])!!}
          </div>
          <div class="form-group">
            <div class="form-inline">
            <label for="">Hora de Culminación (Opcional): </label>
              {!!Form::select('hourEnd',['00'=>'00','01'=>'01','02'=>'02','03'=>'03','04'=>'04','05'=>'05','06'=>'06','07'=>'07','08'=>'08','09'=>'09','10'=>'10','11'=>'11','12'=>'12','13'=>'13','14'=>'14','15'=>'15','16'=>'16','17'=>'17','18'=>'18','19'=>'19','20'=>'20','21'=>'21','22'=>'22','23'=>'23','24'=>'24'],null,['class'=>'form-control','id'=>'hourEndUp'])!!}
                {!!Form::select('minsEnd',['--'=>'--','00'=>'00','01'=>'01','02'=>'02','03'=>'03','04'=>'04','05'=>'05','06'=>'06','07'=>'07','08'=>'08','09'=>'09','10'=>'10','11'=>'11','12'=>'12','13'=>'13','14'=>'14','15'=>'15','16'=>'16','17'=>'17','18'=>'18','19'=>'19','20'=>'20','21'=>'21','22'=>'22','23'=>'23','24'=>'24','25'=>'25','26'=>'26','27'=>'27','28'=>'28','29'=>'29','30'=>'30','31'=>'31','32'=>'32','33'=>'33','34'=>'34','35'=>'35','36'=>'36','37'=>'37','38'=>'38','39'=>'39','40'=>'40','41'=>'41','42'=>'42','43'=>'43','44'=>'44','45'=>'45','46'=>'46','47'=>'47','48'=>'48','49'=>'49','50'=>'50','51'=>'51','52'=>'52','53'=>'53','54'=>'54','55'=>'55','56'=>'56','57'=>'57','58'=>'58','59'=>'59'],null,['class'=>'form-control','id'=>'minsEndUp'])!!}
              </div>
          </div>

          </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Actualizar</button>

          {!!Form::close()!!}
          {!!Form::open(['route'=>['medico_diary.destroy',$medico->id],'method'=>'DELETE'])!!}
            {!!Form::hidden('event_id',null,['id'=>'event_id_destroy'])!!}

            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estas Segur@ de querer Eliminar este Evento?')">Eliminar</button>
          {!!Form::close()!!}
        </div>
      </div>
      </div>
    </div>

@endsection
{{-- ///////////////////////////////////////////////////////CONTENIDO//////////////////// --}}

@section('scriptJS')
  {{-- <script src="{{asset('fullcalendar/lib/jquery.min.js')}}"></script> --}}
  <script src="{{asset('fullcalendar/lib/moment.min.js')}}"></script>
  <script src="{{asset('fullcalendar/fullcalendar.js')}}"></script>
  <script src='{{asset('fullcalendar/locale/es.js')}}'></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-datetimepicker/2.7.1/js/bootstrap-material-datetimepicker.js"></script> --}}
  <script type="text/javascript">

    $(document).ready(function(){

      $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay,listWeek'
        },
        // defaultDate: '2018-03-12',
        navLinks: true, // can click day/week names to navigate views
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        selectable: true, //permite seleccionar campos
        selectHelper: true, //permite agregar nuevos eventos

        select:function(start){
          start = moment(start.format());
          $('#date_start').val(start.format('YYYY-MM-DD'));
          $('#ModalCreate').modal('show');

        },

        events: "{{route('medico_diary_events',$medico->id)}}",

        eventClick: function(event, jsEvent, view){
            var start = $.fullCalendar.moment(event.start).format('YYYY-MM-DD');
            var end = $.fullCalendar.moment(event.end).format('YYYY-MM-DD');
            $('#ModalEdit').modal('show');
            $('#titleUp').val(event.title);
            $('#eventTypeUp').val(event.eventType);

            $('#dateStartUp').val(start);
            $('#hourStartUp').val(event.hourStart);
            $('#minsStartUp').val(event.minsStart);
            $('#dateEndUp').val(end);
            $('#hourEndUp').val(event.hourEnd);
            $('#minsEndUp').val(event.minsEnd);
            $('#event_id').val(event.id);
            $('#event_id_destroy').val(event.id);


        }
      });

    });

    // $('#hour_start').bootstrapMaterialDatepicker({
    //   date:false,
    //   shortTime:false,
    //   format: 'HH-mm-ss',
    // });

  </script>
@endsection
