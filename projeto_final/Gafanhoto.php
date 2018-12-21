<?php

    require("Pessoa.php");


    class Gafanhoto extends Pessoa{
        private $login;
        private $totAssistido;
        
        
        function viuMaisUm(){
            
        }
        
        
        function getLogin(){
            return $this->login;
        }
        
        
        function setLogin($login){
            $this->login = $login;
        }
        
        
        function getTotAssistido(){
            return $this->login;
        }
        
        
        function setTotAssistido($totAssistido){
            $this->totAssistido = $totAssistido;
        }        
        
    }
    

?>