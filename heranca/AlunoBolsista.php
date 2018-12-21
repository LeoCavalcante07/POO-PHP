<?php
    require_once("Pessoa.php");
    class AlunoBolsista extends Pessoa{
        private $bolsa;
        
        
        
        function getBolsa(){
            return $this->bolsa;
        }
        
        
        function setBolsa($bolsa){
            $this->bolsa = $bolsa;
        }
        
        function renovarBolsa(){
            echo("<p>Bolsa renovada</p>");
        }
        
        
        function pagarMensalidade(){
            echo("<p>".$this->nome." é bolsista, entao tem desconto</p>");
        }
    }

?>