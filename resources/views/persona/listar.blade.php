<link href="css/bootstrap-grid.css" rel="stylesheet" type="text/css"/>
  <link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css"//>
  <link href="css/bootstrap-reboot.css" rel="stylesheet" type="text/css"//>
  <link href="css/bootstrap-rebbot.min.css" rel="stylesheet" type="text/css"//>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css"//>
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"//>

  <script src="js/bootstrap.bundle.js" type="text/javascript"></script>
  <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>

<a class="btn btn-primary" href="{{ url('/persona'.'/create') }}">Agregar</a>

<table class="table table-bordered table-dark">
<thead>
  <tr> 
    <th>#</th>  
    <th>Nombre</th>
    <th>Apellido Paterno</th>      
    <th>Apellido Materno</th>
    <th>Dni</th>
    <th>Acciones</th>
  </tr> 
<thead>
<tbody>
    @foreach( $personas as $persona )
   <tr>
      <td> {{ $persona->id }} </td>
      <td> {{ $persona->nombre }}</td>
      <td> {{ $persona->apellido_paterno }}</td>
      <td> {{ $persona->apellido_materno }}</td>
      <td> {{ $persona->dni }}</td>
      <td>
      <a class="btn btn-secondary" href="{{ url('/persona/'.$persona->id.'/edit') }}"> Editar </a>
      ||
      <form action="{{ url('/persona/'.$persona->id ) }}" method="post">
      @csrf
      {{ method_field('PATCH') }}
      <input type="hidden" value="0" name="estado"/>
      <input type="submit" class="btn btn-danger" onclick="return confirm('Quieres borrar?')" value="borrar"/>
     </form>
      </td>
   </tr>
   @endforeach
</tbody>
</table>
