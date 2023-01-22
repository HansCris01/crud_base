
<label for="fname">Nombre:</label><br>
  <input type="text" id="fname" name="nombre" id="nombre"
  value="{{ $persona->nombre }}"><br><br>
  <label for="lname">Apellido Paterno:</label><br>
  <input type="text" id="lname" name="apellido_paterno" id="apellido_paterno"
  value="{{ $persona->apellido_paterno }}"><br><br>
  <label for="lname">Apellido Materno:</label><br>
  <input type="text" id="lname" name="apellido_materno" id="apellido_materno"
  value="{{ $persona->apellido_materno }}"><br><br>
  <label for="lname">DNI:</label><br>
  <input type="text" id="lname" name="dni" id="dni"
  value="{{ $persona->dni }}"><br><br>
  <button>Modificar</button>
