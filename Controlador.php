<?php

    function Conectar(){
        $Servidor = "localhost";
        $Usuario = "root";
        $Pwd = "";
        $BD = "Control_Vehicular2026";

        $Con = mysqli_connect($Servidor, $Usuario, $Pwd, $BD);
        return $Con;
    }

    function Ejecutar($Con, $SQL){
        $ResultSet = mysqli_query($Con, $SQL);
        return $ResultSet;
    }

    function Procesar(){
        
    }

    function Desconectar($Con){
        $Valor = mysqli_close($Con);
        return $Valor;
    }

?>