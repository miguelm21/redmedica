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

              <p><b>Tu Cuenta a sido Confirmada, solo falta esperar la  Autorización del medico Profesional: {{$assistant->medico->name}} {{$assistant->medico->lastName}},para que puedas acceder a sus archivos. Una vez se halla dado la autorizacion  podras usar tu cuenta.</b>.
            </div>
            <a href="{{route('home')}}">Ir a Inicio</a>

            <div class="col-12">

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


@endsection
