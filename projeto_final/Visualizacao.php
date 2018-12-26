<?php
    require_once("Video.php");
    require_once("Gafanhoto.php");

    class Visualizacao{
        public $expectador;
        public $video;
        
        function Visualizacao($expectador, $video){
            $this->expectador = $expectador;
            $this->video = $video;
            $this->expectador->setTotAssistido($this->expectador->getTotAssistido()+1);
            $this->video->setViews($this->video->getViews() + 1);
        }
        
        
        function avaliar(){
            $this->video->setAvaliacao(5);
        }
        
        function avaliarNota($avaliacao){
            $media = ($this->avaliacao + $avaliacao)/$this->views;
            $this->avaliacao = $media;
        }
        
        function avaliarPorc($porc){
            $nova = 0;
            if($porc <= 20){
                $nova = 3;
            }elseif($porc <= 50){
                $nova = 5;
            }elseif($porc <= 90){
                $nova = 8;
            }else{
                $nova = 10;
            }
            
            $this->video->setAvaliacao($nova);
        }
    }
    

?>