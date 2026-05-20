<?php

    $archivo = "prueba3.txt";
    $Manejador = fopen($archivo, "w+");
    fputs($Manejador, "Hola mundo x3");
    fflush($Manejador); 
    $Cadena = fgets($Manejador);
    fclose($Manejador);
    
?>
