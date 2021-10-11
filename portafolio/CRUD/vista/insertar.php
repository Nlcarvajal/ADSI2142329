<?php
    //print_r($_POST);
    if (!isset($_POST['oculto'])) {
        exit();
    }

    include '../modelo/conexion.php';
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $peticion = $_POST['peticion'];

    $sentencia = $bd->prepare("INSERT INTO contacto (nombre,correo,peticion) VALUES (?,?,?);");
    $resultado = $sentencia->execute([$nombre,$correo,$peticion]);

    if ($resultado === TRUE) {
        //echo "<strong><h2>Los datos del usuario han sido ingresados exitosamente!!!</h2></strong>";
        header("Location: index.php");
    } else {
        echo "<h2>Ups! ocurrio un error al ingresar los datos del usuario</h2>";
    }
?>