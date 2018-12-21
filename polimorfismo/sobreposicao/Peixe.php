<?php
    require_once("Animal.php");

    class Peixe extends Animal{
        private $corEscama;
        
        
        function getCorEscama(){
            return $this->corEscama;
        }
        
        function setCorEscama($corEscama){
            $this->corEscama = $corEscama;
        }
        
    
        function soltaBolhas(){
            echo("<p>soltando bolhas</p>");
        }
        
        
        //metodos sobrepostos da classe mãe
        
        function alimentar(){
            echo("<p>Comendo vegetais</p>");
        }
        
        function emitirSom(){
            echo("<p>Som de reptil</p>");
        }
        
        function locomover(){
            echo("<p>Rastejando</p>");
        }
        
        
                                            
    }
?>