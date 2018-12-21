<?php

    include_once("Pessoa.php");

    class Professor extends Pessoa{
        private $salario;
        private $especialidade;
        
        
        function getSalario(){
            return $this->salario;
        }
        
        function setSalario($salario){
            $this->salario = $salario;
        }
        
        function getEspecialidade(){
            return $this->especialidade;
        }
        
        function setEspecialidade($especialidade){
            $this->especialidade = $especialidade;
        }        
            
            
            
        
        function cancelarMatricula() {
            echo("matricula cancelada");
        }
    }

?>