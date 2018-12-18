<!doctype html>

<html>
    <head>
        <title>POO</title>
    </head>
    
    
    <body>
        <pre>
        
        
            <?php
                require_once("model/Conta.php");
                
                $c1 = new Conta(1, "cc", "leo");


                $c1->sacar(150);

                $c1->fecharConta();


                print_r($c1);


    
                
            ?>        
        
        
        
        </pre>
    
    </body>
</html>
