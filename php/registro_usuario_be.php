<?php

include 'conexion_be.php';
    
$nombre_completo = $_POST['nombre_completo'];
$edad = $_POST['edad'];
$ciudad = $_POST['ciudad'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Encriptar contraseña
//$contrasena = hash('sha512',$contrasena);

$query = "INSERT INTO usuarios(nombre_completo,edad,ciudad,usuario,contrasena)VALUES('$nombre_completo','$edad','$ciudad','$usuario','$contrasena')";

// Verificar que el usuario no se repita en la bd

$verificar_usuario = mysqli_query($conexion,"SELECT*FROM usuarios WHERE usuario = '$usuario' ");

if(mysqli_num_rows($verificar_usuario) > 0){
    echo '<script>alert("Usuario existente, Intenta con otro usuario");
    window.location = "../index.php";
    </script>';

    exit();

}

$ejecutar = mysqli_query($conexion,$query);

if($ejecutar){
    echo '<script>alert("registro exitoso");
    window.location = "../index.php";
    </script>';
}else{
    echo '<script>alert("registro invalido , intentalo de nuevo");
    window.location = "../index.php";
    </script>';   
}

mysqli_close($conexion);

?>