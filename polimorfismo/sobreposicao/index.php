<!doctype html>
<html>
    <head>
    
    </head>
    <body>
        <?php
        
            include_once("Ave.php");
            include_once("Mamifero.php");                   include_once("Reptil.php");
            include_once("Peixe.php"); 
        
        
            include_once("Canguru.php");
            include_once("Tartaruga.php"); 
        
        
        
        
            $c = new Canguru();
        
            $t = new Tartaruga();
        
            $c->locomover();
            $t->locomover();
        
        ?>
    </body>
</html>