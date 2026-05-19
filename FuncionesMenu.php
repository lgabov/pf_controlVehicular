<?php

function scriptActualizar($nombre, $archivo)
{
    echo '
    <script>

    function actualizar_'.$nombre.'(){

        let id = prompt("Ingresa el ID:");

        if(id != null && id != ""){

            window.location.href =
            "../Update/'.$archivo.'.php?Id=" + id;
        }
    }

    </script>
    ';
}

?>