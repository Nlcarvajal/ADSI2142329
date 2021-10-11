<?php
    //print_r($_GET);
    if (!isset($_GET['id'])) {
        //exit();
        header("Location: index.php");
    }

    include '../modelo/conexion.php';
    $id = $_GET['id'];

    $sentencia = $bd->prepare("SELECT * FROM contacto WHERE id_contacto = ?;");
    $sentencia->execute([$id]);
    $usuario = $sentencia->fetch(PDO::FETCH_OBJ);
    //print_r($usuario);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar contactos</title>
    <link rel="stylesheet" href="../estilos/estilos.css">
</head>
<body>
    <center>
        <h2 id="h2">Editar contactos</h3>
        <form method="POST" action="editar_proceso.php">
            <table>
                    <tr>
                        <td>Nombre </td>
                        <td><input type="text" name="nombre" value="<?php echo $usuario->nombre ?>"></td>
                    </tr>
                    <tr>
                        <td>Correo </td>
                        <td><input type="text" name="correo" value="<?php echo $usuario->correo ?>"></td>
                    </tr>
                    <tr>
                        <td>peticion</td>
                        <td><input type="text" name="peticion" value="<?php echo $usuario->peticion ?>"></td>
                    </tr>
                    <tr>
                    <input type="hidden" name="oculto">
                    <input type="hidden" name="id2" value="<?php echo $usuario->id_contacto ?>">
                    <br>
                    <td><input type="submit" value="Guardar Cambios" id="cambios"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>