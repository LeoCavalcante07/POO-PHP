<?php
    
    interface Publicacao{
        function abrir();
        function fechar();
        function avancarPag();
        function voltarPag();
        function folhear($p);
    }

?>