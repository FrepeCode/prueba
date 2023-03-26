<?php

include 'conexion.php';
    
$nombre_completo = $_POST['nombre_completo'];
$edad = $_POST['edad'];
$ciudad = $_POST['ciudad'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Encriptar contraseña
//$contrasena = hash('sha512',$contrasena);

$query = "INSERT INTO usuarios(nombre_completo,edad,ciudad,usuario,contrasena)VALUES('$nombre_completo','$edad','$ciudad','$usuario','$contrasena')";

if($query){
    Header("Location: alumno.php");
    
}else {
}
?>

