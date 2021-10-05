<?php 
include_once ('material.php');
class Revista extends Material{
     private $tema; 
     private $fechaPublicacion;
     private $LugarPublicacion;
     private $numeroEdicion;
        
function __construct($tipoMaterial,$codigo,$autor,$titulo,$status,$tema,$fechaPublicacion,$LugarPublicacion,$numeroEdicion){
    parent::__construct($tipoMaterial,$codigo,$autor,$titulo,$status);
    $this->tema=$tema;
    $this->fechaPublicacion=$fechaPublicacion;
    $this->lugarPublicacion=$LugarPublicacion;
    $this->numeroEdicion=$numeroEdicion;
}
    function setTema($tema){
        $this->tema=$tema;
    }
    function setFechaPublicacion($fechaPublicacion){
        $this->fechaPublicacion=$fechaPublicacion;
    }
    function setLugarPublicacion($LugarPublicacion){
        $this->lugarPublicacion=$LugarPublicacion;
    }
    function setNumeroEdicion($numeroEdicion){
        $this->numeroEdicion=$numeroEdicion;
    }
    function getTema(){
        return $this->tema;
    }
    function getFechaPublicacion(){
        return $this->fechaPublicacion;
    }
    function getLugarPublicacion(){
        return $this->lugarPublicacion;
    }
    function getNumeroEdicion(){
        return $this->numeroEdicion;
    }
    function getAutor(){
        return $this->autor;
    }
}
$ob=new Revista('Papel estucado','ISSN 0011-1708','Miguel Santiago Valencia ','Cromos','Buen estado',' moda y estilo ','16-01-1916','Colombia','19');
echo $ob->datos();
echo '<br>';
echo 'Tema: '.$ob->getTema();
echo '<br>';
echo 'Fecha de publicación: '.$ob->getFechaPublicacion();
echo '<br>';    
echo 'Lugar de publicacion: '.$ob->getLugarPublicacion();
echo '<br>';
echo 'Numero de edición: '.$ob->getNumeroEdicion();
echo '<br>';
?>