<?php

    require_once("Pessoa.php");
    require_once("Publicacao.php");

    class Livro implements Publicacao{
        private $titulo;
        private $autor;
        private $totalPag;
        private $pagAtual;
        private $aberto;
        private $leitor;
        
        
        function Livro($titulo, $autor, $totalPag, $leitor){
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totalPag = $totalPag;
            $this->pagAtual = 0;
            $this->aberto = false;
            $this->leitor = $leitor;
            
        }
        
        
        
        function getTitulo(){
            return $this->titulo;
        }
        
        function setTitulo($titulo){
            $this->titulo = $titulo;
        }
        
        
        
        function getAutor(){
            return $this->autor;
        }
        
        function setAutor($autor){
            $this->autor = $autor;
        }
        
        
        
        function getTotalPag(){
            return $this->totalPag;
        }
        
        function setTotalPag($totalPag){
            $this->totalPag = $totalPag;
        }
        
        
        
        function getPagAtual(){
            return $this->pagAtual;
        }
        
        function setPagAtual($pagAtual){
            $this->pagAtual = $pagAtual;
        }
        
        
        
        function getAberto(){
            return $this->aberto;
        }
        
        function setAberto($aberto){
            $this->aberto = $aberto;
        }
        
        
        function getLeitor(){
            return $this->leitor;
        }
        
        function setLeitor($leitor){
            $this->leitor = $leitor;
        }
        
        
        function detalhes(){
            echo($this->leitor->getNome()." está lendo ".$this->titulo." escrito por ".$this->autor." contem ".$this->totalPag." páginas, sendo a página ".$this->pagAtual." a atual");
            
        }
        
        
        
        
        
        function abrir(){
            $this->abrir = true;
        }
        
        
        function fechar(){
            $this->abrir = false;
        }
        
        
        function avancarPag(){
            $this->pagAtual++;
        }
        
        
        function voltarPag(){
            $this->pagAtual--;
        }
        
        
        function folhear($p){
            $this->pagAtual += $p;
        }
        
        
        
        
      
        
    }

?>