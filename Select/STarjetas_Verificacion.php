<?php
    //recibir parametros del frontend
    $Criterio = $_GET["Criterio"];
    $Atributo = $_GET["Atributo"];

    //Formar la instruccion SQL
    $sql = "SELECT * FROM Tarjetas_Verificacion WHERE $Atributo like '%$Criterio%';";

    //Enviar la instruccion al SMBD
    include("Controlador.php");
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $sql);
    
    //Procesar el resultado
    $NumFilas = mysqli_num_rows($ResultSet);

    print("<table border='1'>
        <tr>
            <th>Folio</th>
            <th>Tipo de Servicio</th>
            <th>Fecha de Expedición</th>
            <th>Motivo</th>
            <th>Semestre</th>
            <th>Vigencia</th>
            <th>Técnico Verificador</th>
            <th>Linea_vigencia</th>
            <th>Numero_centro</th>
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

        </tr>
        </table>");
    };

    print("Numero de filas encontradas: $NumFilas");


    Desconectar($Con);
?>