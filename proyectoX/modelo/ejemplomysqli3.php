<?php

//CONEXI�N A LA BASE DE DATOS

//Datos de conexi�n
$hostname_db = "localhost";
$database_db = "base_prueba";
$username_db = "root";
$password_db = "";

// Creaci�n del Objeto y entregando los datos a los atributos
// Se crea el objeto a de la clase mysql
$a = new mysqli($hostname_db, $username_db, $password_db,$database_db);

// Se verifica si hay alg�n erro en la conexion

if ($a->connect_errno) {
    printf("Fallo en la conexion a la base de datos: %s\n", $a->connect_error);
    exit();
}

// Consulta en SQL
$query = "SELECT * FROM usuario";

if ($result = $a->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc())
	{
	//Imprimiendo los datos
	
		printf ("%s (%s)\n", $row["contrase�a"], $row["nombre"]);
		echo "<br>";
	}

    // Dejar libre la conexi�n
    $result->free();
}

// cerrar la conexi�n
$a->close();

?>