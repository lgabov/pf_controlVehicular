<?php

include_once("../Auth/seguridad.php"); 

proteger(['user']); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menu Usuarios</title>
    <link rel="stylesheet" href="../main.css">
</head>

<body>
    <header>
        <h1>Menu de Usuario</h1>
        <div class="nav">
            <ul>
                <li><a href="../Auth/logout.php">Cerrar sesión</a></li>
            </ul>
        </div>
    </header>
    
    <div class="nav-actions">
        <ul class="nav">
            <li><a href="">Centros de Verificación</a>
                <ul>
                    <li><a href="../Select/FSCentros_Verificacion.php">Ver Centros</a></li>
                </ul>
            </li>
            <li><a href="">Conductores</a>
                <ul>
                    <li><a href="../Select/FSConductores.php">Ver Conductores</a></li>
                </ul>
            </li>
            <li><a href="">Domicilios</a>
                <ul>
                    <li><a href="../Select/FSDomicilios.php">Ver Domicilios</a></li>
                </ul>
            </li>
            <li><a href="">Licencias</a>
                <ul>
                    <li><a href="../Select/FSLicencias.php">Ver Licencias</a></li>
                </ul>
            </li>
            <li><a href="">Multas</a>
                <ul>
                    <li><a href="../Select/FSMultas.php">Ver Multas</a></li>
                </ul>
            </li>
            <li><a href="">Oficiales</a>
                <ul>
                    <li><a href="../Select/FSOficiales.php">Ver Oficiales</a></li>
                </ul>
            </li>
            <li><a href="">Pagos</a>
                <ul>
                    <li><a href="../Select/FSPagos.php">Ver Pagos</a></li>
                </ul>
            </li>
            <li><a href="">Propietarios</a>
                <ul>
                    <li><a href="../Select/FSPropietarios.php">Ver Propietarios</a></li>
                </ul>
            </li>
            <li><a href="">Tarjetas de Circulación</a>
                <ul>
                    <li><a href="../Select/FSTarjetas_Circulacion.php">Ver Tarjetas</a></li>
                </ul>
            </li>
            <li><a href="">Tarjetas de Verificación</a>
                <ul>
                    <li><a href="../Select/FSTarjetas_Verificacion.php">Ver Tarjetas</a></li>
                </ul>
            </li>
            <li><a href="">Vehículos</a>
                <ul>
                    <li><a href="../Select/FSVehiculos.php">Ver Vehículos</a></li>
                </ul>
            </li>
        </ul>
    </div>
</body>
</html>
