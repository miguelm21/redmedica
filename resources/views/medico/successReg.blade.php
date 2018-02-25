@extends('layouts.app')

@section('content')

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
<footer>
  <div class="section-footer">
    <div class="row align-items-center nomargin p-1">
      <div class="col-lg-6 col-12 text-center nopadding">
        <a href="" class="p-2"><img class="buttons-footer" src="img/botones-medicossi-13.png" alt=""></a>
        <a href="" class="p-2"><img class="buttons-footer" src="img/botones-medicossi-14.png" alt=""></a>
        <a href="" class="p-2"><img class="buttons-footer" src="img/botones-medicossi-15.png" alt=""></a>
        <a href="" class="p-2"><img class="buttons-footer" src="img/botones-medicossi-16.png" alt=""></a>
      </div>
      <div class="col-lg-6 col-12 text-center nopadding">
        <span class="font-footer"><b>MedicosSi</b> siempre encontrarás tu mejor opción.</span>
      </div>
    </div>
  </div>
</footer>

@include('medico.modalresendMailConfirm')
@endsection
