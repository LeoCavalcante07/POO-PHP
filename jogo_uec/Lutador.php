<?php

    class Lutador{
        
        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;
        
        function Lutador($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates){

            $this->setNome($nome);
            $this->setNacionalidade($nacionalidade);
            $this->setIdade($idade);
            $this->setAltura($altura);
            $this->setPeso($peso);
            $this->setVitorias($vitorias);
            $this->setDerrotas($derrotas);
            $this->setEmpates($empates);
        }
        
        
        function getNome(){
            return $this->nome;
        }
        
        function setNome($nome){
            $this->nome = $nome;
        }
        
        
        function getNacionalidade(){
            return $this->nacionalidade;
        }
        
        function setNacionalidade($nacionalidade){
            $this->nacionalidade = $nacionalidade;
        }
        
        
        
        function getIdade(){
            return $this->idade;
        }
        
        function setIdade($idade){
            $this->idade = $idade;
        }
        
        
        
        function getAltura(){
            return $this->altura;
        }
        
        function setAltura($altura){
            $this->altura = $altura;
        }
        
        
        
        function getPeso(){            
            return $this->peso;
        }
        
        function setPeso($peso){
            $this->peso = $peso;
            $this->setCategoria();

            
        }
        
        
        
        function getCategoria(){
            return $this->categoria;
        }
        
        function setCategoria(){
            if($this->peso<50){
                $this->categoria = "Inválido";   
            }else if($this->peso<70){
                $this->categoria = "Leve";
            }else if($this->peso<80){
                $this->categoria = "Médio";
            }else if($this->peso<120){
                $this->categoria = "Pesado";
            }else{
                $this->categoria = "Inválido";
            }                   
        }
        
        
        function getVitorias(){
            return $this->vitorias;
        }
        
        function setVitorias($vitorias){
            $this->vitorias = $vitorias;
        }
        
        function getDerrotas(){
            return $this->derrotas;
        }
        
        function setDerrotas($derrotas){
            $this->derrotas = $derrotas;
        }
        
        function getEmpates(){
            return $this->empates;
        }
        
        function setEmpates($empates){
            $this->empates = $empates;
        }
        
        
        function ganharLuta(){
            $this->setVitorias($this->getVitorias() + 1);
        }
        
        function perderLuta(){
            $this->setDerrotas($this->getDerrotas() + 1);
        }
        

        function empateLuta(){
            $this->setEmpates($this->getEmpates() + 1);
        }
        
        
        function apresentar(){
            echo("<p>".$this->getNome()."</p>");
            echo("<p>Origem: ".$this->getNacionalidade()."</p>");
            echo("<p>Idade: ".$this->getIdade()."</p>");
            echo("<p>Peso: ".$this->getPeso()."</p>");
            echo("<p>Altura: ".$this->getAltura()."</p>");
            echo("<p>Categoria: ".$this->getCategoria()."</p>");
        }
        
        
        function status(){
            echo("-------------------------------");
            echo("<p>Vitórias: ".$this->getVitorias()."</p>");
            echo("<p>Derrotas: ".$this->getDerrotas()."</p>");
            echo("<p>Empates: ".$this->getEmpates()."</p>");
        }
        
                
        
    }

?>