<?php
        print("<h1>Script Cabeceras - tarea de Bego</h1>");

        foreach (getallheaders() as $name => $value) 
            echo "$name: $value<br>";
?>

