<?php
    require_once("Animal.php");

    class Ave  extends Animal{
        private $corPena;
        
        
        function getCorPena(){
            return $this->corPena;
        }
        
        function setPena($corPena){
            $this->corPena = $corPena;
        }
        
        function fazerNinho(){
            echo("<p>Fazendo ninho</p>");
        }
    
        
        
        //metodos sobrepostos da classe mãe
        
        function alimentar(){
            echo("<p>Comendo vegetais</p>");
        }
        
        function emitirSom(){
            echo("<p>Som de ave</p>");
        }
        
        function locomover(){
            echo("<p>Voando</p>");
        }
        
        
                                            
    }
?>