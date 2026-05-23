<?php
require_once "../Auth/auth.php";

proteger(["admin", "user"]);
    //recibir parametros del frontend
    $Criterio = $_GET["Criterio"];
    $Atributo = $_GET["Atributo"];

    //Formar la instruccion SQL
    $sql = "SELECT * FROM Vehiculos WHERE $Atributo like '%$Criterio%';";

    //Enviar la instruccion al SMBD
    include("../Controlador.php");
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $sql);
    
    //Procesar el resultado
    $NumFilas = mysqli_num_rows($ResultSet);

    print("<table border='1'>
        <tr>
            <th>Id</th>
            <th>Anio</th>
            <th>Placa</th>
            <th>Numero de serie</th>
            <th>Marca</th>
            <th>Origen</th>
            <th>Color</th>
            <th>Cilindraje</th>
            <th>Capacidad</th>
            <th>Puertas</th>
            <th>Asientos</th>
            <th>Transmision</th>
            <th>Clave vehicular</th>
            <th>Tipo de combustible</th>
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
            <td>$Fila[11]</td>
            <td>$Fila[12]</td>
            <td>$Fila[13]</td>
        </tr>
        ");
    };
    print("</table>");

    print("Numero de filas encontradas: $NumFilas");


    Desconectar($Con);
?>