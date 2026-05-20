<?php
require_once "../Auth/auth.php";
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
*/
proteger(["admin", "user"]);
    //recibir parametros del frontend
    $Criterio = $_GET["Criterio"];
    $Atributo = $_GET["Atributo"];

    //Formar la instruccion SQL
    $sql = "SELECT * FROM Multas WHERE $Atributo like '%$Criterio%';";

    //Enviar la instruccion al SMBD
    include("../Controlador.php");
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $sql);
    
    //Procesar el resultado
    $NumFilas = mysqli_num_rows($ResultSet);

    print("<table border='1'>
        <tr>
            <th>Id</th>
            <th>Fecha</th>
            <th>Hora</th>
            <th>Reporte_seccion</th>
            <th>Nombre_via</th>
            <th>Kilometro</th>
            <th>Fundamentos</th>
            <th>Observaciones_personal</th>
            <th>Observaciones_conductor</th>
            <th>Id_oficial</th>
            <th>Id_pago</th>
        </tr>");

    for($i=0; $i<$NumFilas; $i++){
        $Fila = mysqli_fetch_row($ResultSet);
        print(" 
        <tr>
            <td>$Fila[0]</td>
            <td>$Fila[1]</td>
            <td>$Fila[2]</td>
            <td>$Fila[3]</td>
            <td>$Fila[4]</td>
            <td>$Fila[5]</td>
            <td>$Fila[6]</td>
            <td>$Fila[7]</td>
            <td>$Fila[8]</td>
            <td>$Fila[9]</td>
            <td>$Fila[10]</td>
            <td>
                <button onclick=\"location.href='../Archivos/Multa_archivo.php?MultaId=".$Fila[0]."'\">
                    Generar archivo
                </button>
            </td>        
        </tr>"
    );
    };
    print("</table>");

    print("Numero de filas encontradas: $NumFilas");


    Desconectar($Con);
?>