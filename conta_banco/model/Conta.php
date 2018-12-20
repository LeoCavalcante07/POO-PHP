<?php

    class Conta{
        
        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;
        
        
        
        public function Conta($numConta, $tipo, $dono){
            
            $this->abrirConta();
            
            $this->numConta = $numConta;
            
            $this->dono = $dono;
            
            $this->tipo = $tipo;
            
            if($tipo == "cc"){
                $this->saldo = 100;
            }
            
            else if($tipo == "c"){
                $this->saldo = 150;
            }
        }
        
        
        
        
        
        public function getNumConta(){            
            return $this->numConta;
        }
        
        public function setNumConta($numConta){
            $this->numConta = $numConta;
        }
        
        
        
        public function getTipo(){            
            return $this->tipo;
        }
        
        public function setTipo($tipo){
            $this->tipo = $tipo;
        }
        
        
        
        
        public function getDono(){            
            return $this->dono;
        }
        
        public function setDono($dono){
            $this->dono = $dono;
        }
        
        
        public function getSaldo(){            
            return $this->saldo;
        }
        
        public function setSaldo($saldo){
            $this->saldo = $saldo;
        }
        
        
        
        public function getStatus(){            
            return $this->status;
        }
        
        public function setStatus($status){
            $this->status = $status;
        }  
        
        
        
        
        
        
        public function abrirConta(){
            $this->status = true;
            
        }
        
        
        public function fecharConta(){
            if($this->saldo == 0){
                $this->status = false;    
            }else if($this->saldo>0){
                echo( "<p>há dinheiro na conta</p>");
            }else{
                echo( "<p>há debito na conta</p>");
            }
            
        }
        
        
        
        public function depositar($deposito){
            $this->saldo = $this->saldo + $deposito;
        }
        
        
        
        public function sacar($saque){
         
            $this->saldo = $this->saldo - $saque;    
           
            
        }     
        
        
        
        public function pagarMensal(){
            $this->saldo = $this->saldo - 10;
        }
        
        
        
        
        
        
        
        
        
    }

?>