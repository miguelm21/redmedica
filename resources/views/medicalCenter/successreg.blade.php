@extends('layouts.app')

@section('content')
<div class="container">


<section>
  <div class="box-register">
    <div class="row">
      <div class="col-12 text-right">
        <div class="btn-group " role="group" aria-label="Basic example">
          <button type="button" class="btn btn-secondary">1</button>
          <button type="button" class="btn btn-config-blue">2</button>
          <button type="button" class="btn btn-secondary">3</button>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <div class="box-message">
          <div class="row">
            <div class="col-12">
              <h3>¡Muchas Felicidades!</h3>
            </div>
            <div class="col-12">

              <p><b>Ya eres un miembre de la mejor red de médicos y profesionales de la salud</b>.</p>
              <p>Solo falta que ingreses a tu cuenta de correo para que actives tu cuenta.</p><a href="{{route('home')}}">Ir a Inicio</a>
            </div>

            <div class="col-12">


              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalresendMailConfirm">
             Reenviar Correo de Confirmación
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</div>
@endsection
