<?php
//CONEXIÓN A LA BASE DE DATOS
//Datos de conexión
$zz=$_POST["id"];

$hostname_db = "localhost";
$database_db = "aprendiz";
$username_db = "root";
$password_db = "";

// Creación del Objeto y entregando los datos a los atributos
$z = new mysqli($hostname_db, $username_db, $password_db,$database_db);
$sql = "select * from estudiantes where idcedula='$zz'";
$query=$z->query($sql);

if ($z->connect_errno) {
    printf("Fallo en la conexion a la base de datos: %s\n", $a->connect_error);
    exit();
}
// Consulta en SQL
	if($query->num_rows>0)
	{
		while($res=$query->fetch_array())
		{
			 
?>

<form name="form1" method="post" action="2actualizar.php?tipo=registrar">
  <p>Formulario de Actualizaci&oacute;n  </p>
  <table width="200" border="1">
    <tr>
      <td>C&eacute;dula:</td>
      <td><input type="text" name="id" nombre="id" value="<?php echo $res['idcedula'];?>"></td>
    </tr>
    <tr>
      <td>Nombre: </td>
      <td><input type="text" name="Nombre" id="Nombre" value="<?php echo $res['nombre'];?>"></td>
    </tr>
    <tr>
      <td><label for="direccion2">direccion: </label></td>
      <td><input type="text" name="direccion" id="direccion" value="<?php echo $res['direccion'];  ?>" ></td>
    </tr>
    <tr>
      <td><label for="telefono2">telefono: </label></td>
      <td><input type="text" name="telefono" id="telefono" value="<?php echo $res['telefono']; } } ?>" ></td>
    </tr>
    <tr>
      <td><label for="Fecha2">Fecha: </label></td>
      <td><input type="text" name="Fecha" id="Fecha"></td>
    </tr>
    <tr>
	
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><input type="submit" name="Guardar" id="Guardar" value="Actualizar"></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>
    <label for="Nombre"></label>
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
                     
                      
  
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>

