
        <div class="box-dashboard hide mb-5" id="dashboard">
          <div class="row px-1">
            <img  class="img-dashboard" src="{{asset('img/Medicossi-Marca original-05.png')}}" alt="">
          </div>
          <div class="row">
            {{-- <div class="col-12 px-1">
              <a href="#" class="btn btn-block btn-config-dashboard"><i class="far fa-thumbs-up"></i><span>Me gusta</span></a>
            </div>
            <div class="col-12 px-1">
              <a href="#" class="btn btn-block btn-config-dashboard"><i class="fas fa-gift"></i><span>Compartir</a>
            </div> --}}
          </div>
          <div class="row p-1">
            <div class="col-12 nopadding">
              <a href="{{route('home')}}" class="btn btn-block btn-config-dashboard"><i class="fas fa-home fa-2"></i><span>Inicio</a>
            </div>
            {{-- <div class="col-12 nopadding">
              <a href="#" class="btn btn-block btn-config-dashboard"><i class="fas fa-chart-bar fa-2"></i><span>Dashboard</a>
            </div> --}}
          </div>
          <div class="row px-1">
            <div class="col-12 nopadding">
              <a href="{{route('administrators.index')}}" class="btn btn-block btn-config-dashboard"><i class="fas fa-users fa-2"></i><span>Administradores</a>
            </div>
            <div class="col-12 nopadding">
              <a href="{{route('promoters.index')}}" class="btn btn-block btn-config-dashboard"><i class="fas fa-users"></i><span>Promotores</span></a>
            </div>
            <div class="col-12 nopadding">
              <a href="{{route('plans.index')}}" class="btn btn-block btn-config-dashboard"><i class="fas fa-briefcase"></i><span>Planes</span></a>
            </div>
          </div>
          <div class="row p-1">
            <div class="col-12 nopadding">
              <a href="{{route('MedicalCenterList')}}" class="btn btn-block btn-config-dashboard"><i class="fas fa-building"></i><span>Centros Medicos</span></a>
            </div>
            <div class="col-12 nopadding">
              <a href="{{route('medicosList')}}" class="btn btn-block btn-config-dashboard"><i class="fas fa-user-md"></i><span style="margin-left: 2%;">Profesionales  <br> de la salud</span></a>
            </div>
            <div class="col-12 nopadding">
              <a href="#" class="btn btn-block btn-config-dashboard"><i class="fas fa-user"></i><span>Asistentes</span></a>
            </div>
          </div>
          <div class="row px-1">
            {{-- <div class="col-12 nopadding">
              <a href="#" class="btn btn-block btn-config-dashboard"><i class="fab fa-accessible-icon"></i><span>Pacientes</a>
            </div> --}}
          </div>
          <div class="row px-1">
            <div class="col-12 nopadding">
              <a href="#" class="btn btn-block btn-config-dashboard"><i class="fas fa-table"></i><span>Categorias</span></a>
            </div>
            <div class="col-12 nopadding">
              <a href="#" class="btn btn-block btn-config-dashboard"><i class="fas fa-table"></i><span>Especialidad</span></a>
            </div>
            <div class="col-12 nopadding">
              <a href="#" class="btn btn-block btn-config-dashboard"><i class="fas fa-th-list"></i><span>Sub-Especialidad</span></a>
            </div>
          </div>
        </div>
