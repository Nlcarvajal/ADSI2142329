<?php
//Proceso actualizacion de datos del usuario
    //print_r($_POST);
    if (!isset($_POST['oculto'])) {
        //exit();
        header("Location: index.php");
    }
    include '../modelo/conexion.php';
    $id2 = $_POST['id2'];
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $peticion = $_POST['peticion'];

    $sentencia = $bd->prepare("UPDATE contacto SET  nombre             = ?,
                                                    correo             = ?,
                                                    peticion           = ?
                                                   WHERE id_contacto = ?; ");
    $resultado = $sentencia->execute([$nombre,$correo,$peticion,$id2]);
    
    if ($resultado === TRUE) {
        echo "<strong><h2>Los datos del usuario han sido actualizados exitosamente!!!</h2></strong>";
        header("Location: index.php");
    } else {
        echo "<h2>Ups! ocurrio un error al actualizar los datos del usuario</h2>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualización Usuario</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>
    
</body>
</html>