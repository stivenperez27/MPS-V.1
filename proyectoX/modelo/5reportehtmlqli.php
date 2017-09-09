<?php

$host     = "localhost";
$usuario  = "root";
$password = "";
$db       = "dml";

$conexion = new mysqli($host, $usuario, $password, $db);
$sql      = "select * from clientes";
$query    = $conexion->query($sql);

// $conexion = mysql_connect("localhost","root","");
//mysql_select_db("usuario",$conexion);
// $sql= mysql_query("select * from users");

//while($res=mysql_fetch_array($sql)){

//echo'<tr>
//        <td>'.$res['id'].'</td>
//        <td>'.$res['nombre'].'</td>
//        <td>'.$res['password'].'</td>
//    </tr>
//    ';
//    }

$tbHtml = "";

if ($query->num_rows > 0) {

    echo "<table border='2px'>
     	        <header>
                <tr>
                  <th>Limite Credito</th>
                  <th>Nombre</th>
                  <th>rep cliente</th>
                  <th>Num Cliente</th>
                </tr>
            </header>";

    while ($res = $query->fetch_array()) {
        echo '<tr>
		<td>' . $res['limitecredito'] . '</td>
		<td>' . $res['nombre'] . '</td>
		<td>' . $res['repclie'] . '</td>
		<td>' . $res['numclie'] . '</td>


	</tr>
	';
    }
    $tbHtml .= "</table>";
} else {
    echo "No hay resultados";
}
//cambiar los datos por productos
