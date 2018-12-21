<?php

    require_once("Lutador.php");
    class Luta{
        
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovada;
        
        
        public function marcarLuta($l1, $l2){
            if($l1->getCategoria() ===  $l2->getCategoria() && $l1 != $l2){
                
                $this->aprovada = true;
                $this->desafiado = $l1;
                $this->desafiante = $l2;
                
            }else{
                $this->aprovada = false;
                $this->desafiado = null;
                $this->desafiante = null;
            }
            
        }
        
        public function lutar(){
            if($this->getAprovada()){
                $this->desafiado->apresentar();
                echo("--------------------");
                $this->desafiante->apresentar();
                echo("--------------------");
                $vencedor = rand(0,2);
                
                switch($vencedor){
                    case 0:
                        echo("<br>Luta empatada");
                        $this->desafiado->empateLuta();
                        $this->desafiante->empateLuta();
                        break;
                        
                    case 1:
                        echo("<br>".$this->desafiado->getNome()." venceu");
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        break;
                        
                    case 2:
                        echo("<br>".$this->desafiante->getNome()." venceu");
                        $this->desafiado->perderLuta();
                        $this->desafiante->ganharLuta();
                        break;
                }
                
                
                
            }else{
                echo("<br>Luta não foi aprovada");
            }
        }
        
        
        public function getDesafiado(){
            return $this->desafiado;
        }
        
        public function setDesafiado($desafiado){
            $this->desafiado = $desafiado;
        }
        
        
        public function getDesafiante(){
            return $this->desafiante;
        }
        
        public function setDesafiante($desafiante){
            $this->desafiante = $desafiante;
        }
        
        
        public function getRounds(){
            return $this->rounds;
        }
        
        public function setRounds($rounds){
            $this->rounds = $rounds;
        }        
        
        
        
        public function getAprovada(){
            return $this->aprovada;
        }
        
        public function setAprovada($aprovada){
            $this->aprovada = $aprovada;        
        }
        
        
    }

?>