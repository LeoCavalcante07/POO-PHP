<?php

    class Caneta{
        public $modelo;
        public $cor;
        private $ponta;
        protected $carga;
        protected $tampada; 
        
        
        //método construtor
        public function __construct($modelo){ 
            $this->modelo = $modelo;
            $this->cor = "azul";            
            $this->tampar();
        }
        
        
        
        public function getModelo(){
            return $this->modelo;
        }
        
        public function setModelo($modelo){
            $this->modelo = $modelo;
        }
        
        
        
        public function getCor(){            
            return $this->cor;
        }
        
        public function setCor($cor){
           $this->cor = $cor; 
        }
        
        
        public function rabiscar(){
            
            if($this->tampada == true){
                echo("nao posso rabiscar");    
            }else{
                echo("rabiscando...");    
            }
            
            
        }
        
        
        private function tampar(){
            $this->tampada = true;
        }
        
        private     function destampar(){
            $this->tampada = false;
        }        
        
        
    }

?>