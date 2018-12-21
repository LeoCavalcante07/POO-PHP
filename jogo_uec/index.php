<!doctype html>

<html>
    <head>
    
    </head>
    
    <body>
        <?php
            require_once("Lutador.php");
            require_once("Luta.php");
        
        
            $lutadores = array();
        
            $lutadores[0]  = new Lutador("Pretty Boy", "Frances", 30, 1.75, 68.9, 11, 2, 1);
        
            $lutadores[1]  = new Lutador("Putscript", "Brasil", 29, 1.68, 57.9, 14, 2, 3);
        
            $lutadores[2]  = new Lutador("ShapShadow", "EUA", 35, 1.65, 78.9, 12, 2, 1);
        
            $lutadores[3]  = new Lutador("Dead Code", "Australia", 28, 1.75, 75.8, 11, 2, 1);
        
            $lutadores[4]  = new Lutador("UFOCobol", "Etiopia", 28, 1.75, 100.2, 11, 2, 1);
        
            $lutadores[5]  = new Lutador("Nedaart", "Jandira", 28, 1.75, 99.5, 11, 2, 1);
        
        

            $luta1 = new Luta();
            $luta1->marcarLuta($lutadores[5], $lutadores[4]);
            $luta1->lutar();
        

        ?>
    </body>
</html>