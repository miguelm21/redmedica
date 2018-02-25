<table class="table table-striped">
   <thead>
      <tr>
         <th>nombre</th>
         <th>Apellido</th>
      </tr>
   </thead>
   <tbody>
   @foreach ($medicos as $medico)
   <tr>
      <td class="ltable">&nbsp;&nbsp;&nbsp;{{$medico->name}}</td>
      <td class="ltable">&nbsp;&nbsp;&nbsp;{{$medico->lastName}}</td>
   </tr>
   @endforeach
   @foreach ($medicalCenters as $medicalCenter)
   <tr>
      <td colspan="2" class="ltable">&nbsp;&nbsp;&nbsp;{{$medicalCenter->tradename}}</td>

   </tr>
   @endforeach
   </tbody>
   <tfoot>
      <tr>

      </tr>
   </tfoot>
</table>
