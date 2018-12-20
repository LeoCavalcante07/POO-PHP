

<!doctype html>

<html>

    <head>
    
    </head>
    
    <body>
        <pre>
        
            <?php
                require_once("ControleRemoto.php");

            $c1 = new ControleRemoto();
            $c1->ligar();

            $c1->menosVolume(); 

            $c1->abrirMenu();

            ?>                
        
        </pre>
    

        
    </body>
</html>