<?php
//PDO=>php data objects 
//dsn= data source name
$dsn='mysql:host=localhost;dbname=adsi';
$user='root';
$psw='';
$conexion= 'a';
try{
$conexion= new PDO($dsn,$user,$psw);  
$statement=$conexion->prepare("SELECT * FROM aprendiz ORDER BY nombre");
$statement->execute();  
}
catch(PDOException $e){
    echo $e->getMessage();
}
foreach ($statement as $key) {
    echo 'Nombre: '.$key[0].'<br>';
    echo 'Documento: '.$key[1].'<br>';
    echo 'Formacion: '.$key[2].'<br>';
    echo 'Genero: '.$key[3].'<br>';
}
echo '<br>-----------<br>';
$statement->execute(); 
while ($key=$statement->fetch()) {
    echo $key['nombre'].'<br>';
}
echo '<br>-----------<br>';
$statement->execute();
$resultados=$statement->fetchAll();
//var_dump($resultados);
foreach ($resultados as $key) {
    //print_r($key);
    echo $key['documento'].'<br>';
}
echo '<br>-----------------NUM---------------<br>';
$statement->execute(); 
while ($key=$statement->fetch(PDO::FETCH_NUM)) {
    echo $key[0].'<br>';
}
echo '<br>-------------ASOCIATIVO------------<br>';
$statement->execute(); 
while ($key=$statement->fetch(PDO::FETCH_ASSOC)) {
    echo $key['nombre'].'<br>';
}
echo '<br>--------------OBJETOS--------------<br>'; 
$statement->execute();
while ($key=$statement->fetch(PDO::FETCH_OBJ)) {
    echo $key->documento.'<br>';
    echo $key->nombre.'<br>';
}


//var_dump($statement);
//print_r($statement);
?>