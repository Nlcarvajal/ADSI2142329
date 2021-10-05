<?php
include_once ('libro.php');
include_once ('revista.php');
class Biblioteca{
    private $coleccion;    

    function __construct(){
        $this->coleccion=array();
    }
    
    function adicionar($material){
        array_push($this->coleccion,$material);
    }

    function verMateriales(){
        for ($i=0; $i <count($this->coleccion) ; $i++) {
            echo $this->coleccion[$i]->getAutor();
            }
                   
    }
    
}



$biblio=new Biblioteca();
$ob1=new Libro('papel','ISBN 978-958-42-5000-1','Mario Mendoza','la melancolía de los feos',2016,'Buen estado','Editorial Planeta','224','20');
$ob1=new Libro('virtual','ISBN 978-958-42-5000-1','Mario Mendoza','la melancolía de los feos',2016,'Buen estado','Editorial Planeta','224','20');
$ob2=new Revista('Papel estucado','ISSN 0011-1708','Miguel Santiago Valencia ','Cromos','Buen estado',' estilo ','16-01-1916','Colombia','19');


$biblio->adicionar($ob);
$biblio->adicionar($ob1);
$biblio->adicionar($ob2);


$biblio->verMateriales();



?>
