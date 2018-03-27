<div class="text-justify">
  @if($medicosCount != 0)
  <h3>Medicos</h3>
  <table class="table table-bordered">
    <thead class="bg-primary text-white">
      <tr>
        <td>Nombre</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($medicos as $medico)
        <tr>
          <td>{{$medico->name}} {{$medico->lastName}}</td>
        </tr>
      @endforeach
    </tbody>
    <tfoot>
      <tr>
        <td>{{$medicos->links()}}</td>
      </tr>
    </tfoot>
  </table>
  @endif

  @if($medicalCentersCount != 0)
  <h3>Centros Medicos</h3>
  <table class="table table-bordered">
    <thead class="bg-primary text-white">
      <tr>
        <td>Nombre</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($medicalCenters as $mC)
        <tr>
          <td>{{$mC->name}}</td>
        </tr>
      @endforeach
    </tbody>
    <tfoot>
      <tr>
        <td>{{$medicalCenters->links()}}</td>
      </tr>
    </tfoot>
  </table>
@endif

@if($specialtyCount != 0)
<h3>Especialidades Médicas</h3>
<table class="table table-bordered">
  <thead class="bg-primary text-white">
    <tr>
      <td>Nombre</td>
    </tr>
  </thead>
  <tbody>
    @foreach ($specialties as $specialty)
      <tr>
        <td>{{$specialty->name}}</td>
      </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
      <td>{{$specialties->links()}}</td>
    </tr>
  </tfoot>
</table>
</div>
@endif


</div>




{{--
<div class="bg-primary">
  <div class="row">
  <div class="col-8">
    <input type="text" class="form-control search" placeholder="Buscar..." id="searchVar2">
  </div>
  <div class="col-4">
    <button type="button" class="btn btn-secondary" name="button">Buscar</button>
  </div>
</div>
</div>
<table class="table table-bordered text-justify">
   <thead class="bg-primary text-white">
      <tr>
         <th colspan="2">

       </th>

      </tr>
   </thead>
   <tbody>

     @foreach ($data as $d)

       @if($d->role == "medical_center")
       <tr>
          <td class="table">&nbsp;&nbsp;&nbsp;{{$d->name}} </td>
          <td>Centro Medico</td>
       </tr>
      @elseif($d->role == 'specialty')
        <tr>
           <td class="table">&nbsp;&nbsp;&nbsp;{{$d->name}}</td>
           <td>Especialidad Medica</td>
        </tr>
    @elseif($d->role == 'medico')
        <tr>
           <td class="table">&nbsp;&nbsp;&nbsp;{{$d->name}}</td>
           <td>Medico {{$d->medico_specialty}}</td>
        </tr>
        @endif
     @endforeach

   </tbody>
   <tfoot>

       <td colspan="2">
         <ul class="pagination">
           <li class="page-item"><button class="page-link" onclick="pag_prev()">Previous</button></li>
           <li class="page-item"><a class="page-link" href="#">1</a></li>
           <li class="page-item"><a class="page-link" href="#">2</a></li>
           <li class="page-item"><a class="page-link" href="#">3</a></li>
           <li class="page-item"><button class="page-link" onclick="pag_next()">Next</button></li>
         </ul>
       </td>

   </tfoot>
</table> --}}
