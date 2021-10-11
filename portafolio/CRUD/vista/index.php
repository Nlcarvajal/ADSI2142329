<?php
    include '../modelo/conexion.php';
    $sentencia = $bd->query("SELECT * FROM contacto;");
    $usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
    /*fetchAll guardar en formato de objeto 
    FETCH_OBJ sea de tipo objeto*/
    //print_r($usuarios);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portafolio</title>
    <link rel="stylesheet" href="../estilos/estilo.css">
</head>
<body>
    <center>
        <table>
        <strong><h2>contactos</h2></strong>
            <tr id="header">
                <td><strong>id</strong></td>
                <td><strong>nombre</strong></td>
                <td><strong>correo</strong></td>
                <td><strong>peticion</strong></td>
            </tr>
            <?php
                foreach ($usuarios as $dato) {
                    ?>
                    <tr>
                        <td><?php echo $dato->id; ?></td>
                        <td><?php echo $dato->nombre; ?></td>
                        <td><?php echo $dato->correo; ?></td>
                        <td><?php echo $dato->peticion; ?></td>
                        <td><a href="editar.php?id=<?php echo $dato->id; ?>" id="editar">Editar</a></td>
                        <td><a href="eliminar.php?id=<?php echo $dato->id; ?>" id="eliminar">Eliminar</a></td>
                    </tr>
                    <?php
                }
            ?>
        </table>
        <!-- inicio insert -->
            <hr>
            <form method="POST" action="insertar.php">
            <strong id="form"><h1>CONTACTO</h1>
            <h3>Diligencia el siguiente formulario si quieres adquirir mis servicios </h3></strong>
                <table>
                    <tr>
                        <td>Nombre </td>
                        <td><input type="text" name="nombre"></td>
                    </tr>
                    <tr>
                        <td>Correo </td>
                        <td><input type="text" name="correo"></td>
                    </tr>
                    <tr>
                    <td>Peticion</td>
                    <textarea name="comentarios" rows="10" cols="40">Escribe aquí tu peticion</textarea>
                    </tr>
                    <input type="hidden" name="oculto" value="1">
                    <tr>
                        <td><input type="reset" id="reset"></td>
                        <td><input type="submit" value="Registrar Datos" id="enviar"></td>
                    </tr>
                </table>
            </form>
        <!-- fin del insert -->
    </center>
</body>
</html>