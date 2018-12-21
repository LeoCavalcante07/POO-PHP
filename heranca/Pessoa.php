<?php

    abstract class Pessoa{
        
        protected $nome;
        protected $idade;
        protected $sexo;
        
        
        function getNome(){
            return $this->Nome;
        }
        
        function setNome($nome){
            $this->nome = $nome;
        } 
        
        
        function getIdade(){
            return $this->idade;
        }
        
        function setIdade($idade){
            $this->idade = $idade;
        } 
        
        
        function getSexo(){
            return $this->sexo;
        }
        
        function setSexo($sexo){
            $this->sexo = $sexo;
        }         

        
        final function fazerAniversario(){
            $this->idade++;
        }
        
    }


?>