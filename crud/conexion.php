<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="";
    $port="3307";

    $bd="login";

    $con=mysqli_connect($host,$user,$pass,$bd,$port);

    mysqli_select_db($con,$bd);

    return $con;
}
?>