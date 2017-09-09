<?php
// Recibe los datos enviados desde html
$a = $_POST['usuarios'];
$b = $_POST['contrasenas'];
$c = $_POST['nombre'];
$d = $_POST['apellidos'];
$e = $_POST['doc'];
$f = $_POST['dir'];
$g = $_POST['email'];

echo $a . "<br>";
echo $b . "<br>";
echo $c . "<br>";
echo $d . "<br>";
echo $e . "<br>";
echo $f . "<br>";
echo $g . "<br>";

//CONEXIÓN A LA BASE DE DATOS
//Datos de conexión
$hostname_db = "localhost";
$database_db = "mps";
$username_db = "root";
$password_db = "";
// Creación del Objeto y entregando los datos a los atributos
// Se crea el objeto a de la clase mysql
$z = new mysqli($hostname_db, $username_db, $password_db, $database_db);
// Se verifica si hay algún erro en la conexion

if ($z->connect_errno) {
    printf("Fallo en la conexion a la base de datos: %s\n", $a->connect_error);
    exit();
}
// Consulta en SQL
$query = "INSERT INTO `registro` (`usuarios`, `contrasenas`) VALUES ('$a', '$b','$c','$d','$e','$f','$g')";
$z->query($query);
//echo $z;
echo "Usuario Registrado";
