<?php

    require("Pessoa.php");


    class Gafanhoto extends Pessoa{
        private $login;
        private $totAssistido;
        
        
 
        function Gafanhoto($nome, $idade, $sexo, $login){
            parent::Pessoa($nome, $idade, $sexo);
            $this->login = $login;
            $this->totAssistido = 0;
        }
        
        
        function getLogin(){
            return $this->login;
        }
        
        
        function setLogin($login){
            $this->login = $login;
        }
        
        
        function getTotAssistido(){
            return $this->totAssistido;
        }
        
        
        function setTotAssistido($totAssistido){
            $this->totAssistido = $totAssistido;
        }   
        
        
        
        function viuMaisUm(){
            $this->totAssistido++;
        }        
        
        function ganharExp($p){
            $this->experiencia += $p;
        }
        
    }
    

?>