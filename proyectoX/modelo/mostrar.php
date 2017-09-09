<?php
 
$host="localhost";
$usuario="root";
$password="";
$db="aprendiz";

$conexion = new mysqli($host,$usuario,$password,$db);
$sql = "select * from estudiantes";
$query=$conexion->query($sql);
 
// $conexion = mysql_connect("localhost","root","");
//mysql_select_db("usuario",$conexion);
// $sql= mysql_query("select * from users");

//while($res=mysql_fetch_array($sql)){
	
//echo'<tr>
//		<td>'.$res['id'].'</td>
//		<td>'.$res['nombre'].'</td>
//		<td>'.$res['password'].'</td>
//	</tr>
//	';
//	}
	
	
	echo "<p>Aprendices Registrados</p>";	
	$tbHtml="";
	
	if($query->num_rows>0){
		
	        echo "<table border='1px'>
             <header>
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Direccion</th>
              
                  </tr>
            </header>";
		
		while($res=$query->fetch_array())
		{
         echo '<tr>
		<td>'.$res['idcedula'].'</td>
		<td>'.$res['nombre'].'</td>
		<td>'.$res['direccion'].'</td>
	</tr>
	';
		}
		$tbHtml.= "</table>";
	}
	else
	{
	echo "No hay resultados";
	}
	//cambiar los datos por productos
	
?>
 
