<?php
// ARCHIVO QUE ME PERMITE CONCTARME A LA BASE DE DATOS
//datos del servidor
 $server = "localhost";
 $username = "root";
 $password = "";
 $bd = "sawpi_bd";
 
// Creamos una conexion
$conn = mysqli_connect($server, $username,$password, $bd);

// 
if(!$conn){
    die("Conexión fallida:" . mysqli_connect_error());


}
?>