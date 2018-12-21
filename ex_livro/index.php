<!doctype html>

<html>
    <head>
    
    </head>
    <body>
        <pre>
        
            <?php

                require_once("Livro.php");
                require_once("Pessoa.php");



                $p[0] = new Pessoa("Leonardo", 19, "M");

                $p[1] = new Pessoa("Maria", 21, "F");


                $l[0] = new Livro("kotlin", "kassiano", 500, $p[0]);

                $l[1] = new Livro("50 tons de cinza", "João", 400, $p[1]);


                $l[0]->avancarPag();

                $l[0]->folhear(5);

                
            
                print_r($l[0]->detalhes());
                echo("<hr>");
                print_r($l[1]->detalhes());

            ?>         
        
        </pre>
   
    </body>
</html>

