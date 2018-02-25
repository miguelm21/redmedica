@extends('layouts.app')

@section('content')
<section class="box-register">
  <div class="container">
    <div class="register">
      <div class="row">
        <div class="col-12 mb-3">
          <h2 class="text-center font-title">Registro de centro médico</h2>
        </div>
      </div>


        {!!Form::open(['route'=>'medicalCenter.store','method'=>'POST'])!!}
          <div class="row mt-2">
            <div class="col-lg-12 col-12">
              <div class="form-group">
                  {{Form::text('tradename',null,['class'=>'form-control','placeholder'=>'Nombre Comercial'])}}
              </div>
            </div>
            <!-- //////////////////////////////////AGREGAR ID DE CENTRO MEDICO -->
          </div>

          <div class="row">
            <div class="col-lg-6 col-12">
              <div class="form-group">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="emailAdmin" placeholder="Correo del Administrador">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputPassword1" name="nameAdmin" placeholder="Nombre del Administrador">
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="form-group">
                    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telefono">
                 </div>
                <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputPassword1" name="city" placeholder="Ciudad">
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 col-12">
              <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="billingData" placeholder="Datos de facturación">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Medios de registro" name="meansOfRecords">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="# de promotor" name="numberPromoter">
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-12 mt-2">
              <a href="#" class="btn-config-blue btn btn-block">Limpiar</a>
            </div>
            <div class="col-lg-6 col-12 mt-2">
              <button type="submit" class="btn-config-green btn btn-block">Registrar</button>
            </div>
          </div>
         {!!Form::close()!!}
    </div>
  </div>
</section>
@endsection
