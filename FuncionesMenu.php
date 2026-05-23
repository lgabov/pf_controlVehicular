<?php
function scriptActualizar($nombre, $archivo, $campoId)
{
    echo '
    <script>
    function actualizar_'.$nombre.'(){
        let id = prompt("Ingresa el ID de '.$nombre.':");
        if(id != null && id.trim() != ""){
            window.location.href = "../Update/'.$archivo.'.php?Id=" + encodeURIComponent(id) + "&campoId='.$campoId.'";
        }
    }
    </script>
    ';
}

function inicializarDetectorErrores() {
    echo '
    <script>
    window.addEventListener("DOMContentLoaded", () => {
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get("error") === "not_found") {
            const modulo = urlParams.get("tipo");
            alert("Error: El ID ingresado para " + modulo + " no existe en el sistema.");
            window.history.replaceState({}, document.title, window.location.pathname);
        }
    });
    </script>
    ';
}
?>



