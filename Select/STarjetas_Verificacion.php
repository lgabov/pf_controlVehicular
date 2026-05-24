<?php
require_once "../Auth/auth.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

proteger(["admin", "user"]);

    $Criterio = $_GET["Criterio"];
    $Atributo = $_GET["Atributo"];

    $sql = "SELECT * FROM Tarjetas_Verificacion WHERE $Atributo like '%$Criterio%';";

    include("../Controlador.php");
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $sql);
    
    $NumFilas = mysqli_num_rows($ResultSet);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados - Tarjetas de Verificacion</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <div class="table-container">
        <div class="table-header">
            <h2>Tarjetas de Verificacion</h2>
            <span class="table-count"><?= $NumFilas ?> resultado(s) encontrado(s)</span>
        </div>

        <table class="data-table">
            <thead>
                <tr>
                    <th>Folio</th>
                    <th>Tipo de Servicio</th>
                    <th>Fecha de Expedicion</th>
                    <th>Motivo</th>
                    <th>Semestre</th>
                    <th>Vigencia</th>
                    <th>Tecnico Verificador</th>
                    <th>Linea Vigencia</th>
                    <th>Numero Centro</th>
                    <th>Id Pago</th>
                </tr>
            </thead>
            <tbody>
                <?php for($i = 0; $i < $NumFilas; $i++): ?>
                    <?php $Fila = mysqli_fetch_row($ResultSet); ?>
                    <tr>
                        <td><?= $Fila[0] ?></td>
                        <td><?= $Fila[1] ?></td>
                        <td><?= $Fila[2] ?></td>
                        <td><?= $Fila[3] ?></td>
                        <td><?= $Fila[4] ?></td>
                        <td><?= $Fila[5] ?></td>
                        <td><?= $Fila[6] ?></td>
                        <td><?= $Fila[7] ?></td>
                        <td><?= $Fila[8] ?></td>
                        <td><?= $Fila[9] ?></td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php Desconectar($Con); ?>