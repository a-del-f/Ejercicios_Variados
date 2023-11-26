<?php 
abstract class ReadingMaterial extends Publisher{
    private $id;
    private $title;
    private $pages;
    private $prices;

    private $publi =new Publisher();
    
    abstract  function añadirIVA():int;
    abstract function mostrarCategoria():string;
}
    
?>