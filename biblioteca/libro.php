<?php 

include_once ('material.php');

class Libro extends Material{
    
     private $editorial; 
     private $numeroPaginas;
     private $numeroCapitulos;
        
function __construct($tipoMaterial,$codigo,$autor,$titulo,$status,$editorial,$numeroPaginas,$numeroCapitulos){
    parent::__construct($tipoMaterial,$codigo,$autor,$titulo,$status);
    $this->editorial=$editorial;
    $this->numeroPaginas=$numeroPaginas;
    $this->numeroCapitulos=$numeroCapitulos;
}
    function setEditorial($editorial){        
        $this->editorial=$editorial;
    }
    function setnumeroPaginas($numeroPaginas){
        $this->numeroPaginas=$numeroPaginas;
    }
    function setnumeroCapitulos($numeroCapitulos){
        $this->numeroCapitulos=$numeroCapitulos;
    }
    function getEditorial(){
        return $this->editorial;
    }
    function getnumeroPaginas(){
        return $this->numeroPaginas;
    }
    function getnumeroCapitulos(){
        return $this->numeroCapitulos;
    }

    function getAutor(){
        return $this->autor;
    }
}
$ob=new Libro('Papel','ISBN 978-958-42-2789-8','Iván Gutiérrez',' por qué le pasan cosas malas a la gente buena','Buen estado','Editorial Planeta','297','19');
echo $ob->datos();
echo '<br>';
echo 'EDITORIAL: '.$ob->getEditorial();
echo '<br>';
echo 'NUMERO DE PAGINAS: '.$ob->getnumeroPaginas();
echo '<br>';    
echo 'NUMERO DE CAPITULOS: '.$ob->getnumeroCapitulos();
echo '<br>';
?>