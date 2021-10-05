<?php 
class Material{
protected $tipoMaterial='';
protected $codigo='';
protected $autor='';
protected $titulo='';
protected $status='';

function __construct($tipoMaterial,$codigo,$autor,$titulo,$status){
$this->tipoMaterial=$tipoMaterial;
$this->codigo=$codigo;
$this->autor=$autor;
$this->titulo=$titulo;
$this->status=$status;
}

 function datos(){
     return '<br>'.'TIPO DE MATERIAL: '.$this->tipoMaterial.'<br>'. 'CODIGO: '.
     $this->codigo.'<br>'. 'AUTOR: '.$this->autor.'<br>'. 'TITULO: '.$this->titulo.
     '<br>'. 'STATUS: '.$this->status;
 }

}
?>