<?php

include("conexion.php");
$con=conectar();

$nombre_completo=$_POST['nombre_completo'];
$edad=$_POST['edad'];
$ciudad=$_POST['ciudad'];
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

$sql="UPDATE usuarios SET  edad='$edad',ciudad='$ciudad',usuario='$usuario',contrasena='$contrasena' WHERE nombre_completo='$nombre_completo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuario.php");
    }
?>