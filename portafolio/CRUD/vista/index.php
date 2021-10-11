<?php
    include '../modelo/conexion.php';
    $sentencia = $bd->query("SELECT * FROM contacto;");
    $contacto = $sentencia->fetchAll(PDO::FETCH_OBJ);
    /*fetchAll guardar en formato de objeto 
    FETCH_OBJ sea de tipo objeto*/
   // print_r($contacto);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario de contacto</title>
    <link rel="stylesheet" href="../estilos/estio.css">
</head>
<body>
    <center>
        <table>
        <strong><h2>contactos</h2></strong>
            <tr id="header">
                <td><strong>id_contacto</strong></td>
                <td><strong>Nombre</strong></td>
                <td><strong>Correo</strong></td>
                <td><strong>Peticion</strong></td>
            </tr>
            <?php
                foreach ($contacto as $dato) {
                    ?>
                    <tr>
                        <td><?php echo $dato->id_contacto; ?></td>
                        <td><?php echo $dato->nombre; ?></td>
                        <td><?php echo $dato->correo; ?></td>
                        <td><?php echo $dato->peticion; ?></td>
                        <td><a href="editar.php?id=<?php echo $dato->id_contacto; ?>" id="editar">Editar</a></td>
                        <td><a href="eliminar.php?id=<?php echo $dato->id_contacto; ?>" id="eliminar">Eliminar</a></td>
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
            <div class="cols-6 float-start aling-items-center" style="width:750px;height:300px;">
             <table> 
                <tr>
                <label class="from-label"><strong>Nombres</strong></label>
                <input type="text" name="nombre" class="form-control" placeholder="nombre" style="border: solid darkgray;"> 
                </tr>
                <br>
                <br>   
                    <tr>
                    <label for="exampleinputEmail" class="from-label"><strong>Correo Electonico</strong></label>
                    <input type="email" name="correo" class="form-control" aria-describedby="emaihelp" placeholder="correo" style="border: solid darkgray;"> 
                    </tr>
                <br>
                <br>    
                    <tr>
                    <label for="exampleinputpassword1" class="from-label"><strong>peticion</strong></label>
                    <input type="text" name="peticion" class="form-control" style="border: solid darkgray;height: 50px;"> 
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