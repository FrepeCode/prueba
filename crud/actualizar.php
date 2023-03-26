<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM usuarios WHERE nombre_completo='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                        <h2>Editar información</h2>
                        <input type="text" placeholder="Nombre completo" name="nombre_completo" value="<?php echo $row['nombre_completo']  ?>">
                        <input type="text" placeholder="Edad" name="edad" value="<?php echo $row['edad']  ?>">
                        <input type="text" placeholder="Ciudad" name="ciudad" value="<?php echo $row['ciudad']  ?>">
                        <input type="text" placeholder="Usuario" name="usuario" value="<?php echo $row['usuario']  ?>">
                        <input type="password" placeholder="Contraseña" name="contrasena"value="<?php echo $row['contrasena']  ?>">
                       
                                
                        <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>