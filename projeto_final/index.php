<!doctype html>
<html>
    <head>
    
    </head>
    <body>
        <pre>
        
            <?php

                require_once("Gafanhoto.php");
                require_once("Video.php");
                require_once("Visualizacao.php");


                $p[0] = new Gafanhoto("Maxuel", 18, "M", "max@uel");

                $v[0] = new Video("Curso Java");

                
                $vz[0] = new Visualizacao($p[0], $v[0]);
                
                $vz[0]->avaliar();

                print_r($v[0]);
                print_r($p[0]);
                print_r($vz[0]);


            ?>        
        
        </pre>

    </body>
</html>