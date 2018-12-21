<!dpctype html>
<html>

    <head>
    
    </head>
    
    <body>
        <pre>
            <?php
                require_once("Aluno.php");
                require_once("Professor.php");
                require_once("Visitante.php");
                require_once("AlunoBolsista.php");


                $a1 = new Aluno();
                $b1 = new AlunoBolsista();
                $p1 = new Professor();
                $v1 = new Visitante();

                $v1->setNome("Carlos");


                $a1->setNome("Marcos");
                $a1->setMatricula(111);
                $a1->setCurso("Medicina");
                $a1->pagarMensalidade();



                $b1->setNome("Leonardo");
                $b1->setBolsa(50);
                $b1->pagarMensalidade();

                print_r($v1);
                print_r($a1);
                print_r($b1);
    
            


                

            ?>        
        </pre>

    </body>
</html>