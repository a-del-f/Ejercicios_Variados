<?php 
class Persona{
    public $nom;
    public $ape;
    function __construct($nom,$ape) {
       
        $this->nom = $nom;
        $this->ape = $ape;}
        function datosPersona(){
        return "Su nombre es". $this->nom." y su apellido es ".$this->ape;
    }

        function getNom(){
            $this->nom;
        }
        function getApe(){
            $this->ape;
        }
    }
    


?>