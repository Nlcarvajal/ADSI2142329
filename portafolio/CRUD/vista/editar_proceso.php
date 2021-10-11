<?php //Proceso actualizacion de datos del usuario
    //print_r($_POST);
    if (!isset($_POST['oculto'])) {
        //exit();
        header("Location: index.php");
    }
    include '../modelo/conexion.php';
    $edit_id = $_POST['edit_id'];
    $edit_nombre = $_POST['edit_nombre'];
    $edit_correo = $_POST['edit_correo'];
    $edit_peticion = $_POST['edit_peticion'];

    $sentencia = $bd->prepare("UPDATE contacto SET   nombre             = ?,
                                                      correo             = ?,
                                                      peticion         = ?
                                WHERE id = ?; ");
    $resultado = $sentencia->execute([$edit_nombre,$edit_correo,$edit_peticion,$edit_id]);
    
    if ($resultado === TRUE) {
        //echo "<strong><h2>Los datos del usuario han sido actualizados exitosamente!!!</h2></strong>";
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