<?php
require_once "../Auth/auth.php";

proteger(["admin", "user"]);

    $Criterio = $_GET["Criterio"];
    $Atributo = $_GET["Atributo"];

    $sql = "SELECT * FROM Licencias WHERE $Atributo like '%$Criterio%';";

    include("../Controlador.php");
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $sql);
    
    $NumFilas = mysqli_num_rows($ResultSet);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados - Licencias</title>
    <link rel="stylesheet" href="../main.css?v=1">
</head>
<body>
    <div class="table-container">
        <div class="table-header">
            <h2>Licencias</h2>
            <span class="table-count"><?= $NumFilas ?> resultado(s) encontrado(s)</span>
        </div>

        <table class="data-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Fecha Expedicion</th>
                    <th>Antiguedad</th>
                    <th>Id Conductor</th>
                    <th>Id Pago</th>
                    <th>Acciones</th>
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
                        <td>
                            <button class="btn btn-primary" onclick="location.href='../Archivos/Licencia_archivo.php?Numero_licencia=<?= $Fila[0] ?>'">
                                Generar Archivo
                            </button>
                        </td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php Desconectar($Con); ?>