<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.html"); 
    exit(); 
}

include_once("../FuncionesMenu.php");

scriptActualizar("Centros", "FUCentros_Verificacion", "Numero_centro");
scriptActualizar("Conductores", "FUConductores", "Numero_licencia");
scriptActualizar("Domicilios", "FUDomicilios", "Id");
scriptActualizar("Licencias", "FULicencias", "Id");
scriptActualizar("Multas", "FUMultas", "Folio");
scriptActualizar("Oficiales", "FUOficiales", "Id");
scriptActualizar("Pagos", "FUPagos", "Linea_captura");
scriptActualizar("Propietarios", "FUPropietarios", "Id"); 
scriptActualizar("TarjetasCirculacion", "FUTarjetas_Circulacion", "Folio");
scriptActualizar("TarjetasVerificacion", "FUTarjetas_Verificacion", "Folio");
scriptActualizar("Vehiculos", "FUVehiculos", "Id");

inicializarDetectorErrores();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menu Administrador</title>
    <link rel="stylesheet" href="../main.css">
</head>

<body>
    <header>
        <h1>Menu de Administrador</h1>
        <div class="nav">
        <li><a href="../Auth/logout.php">Cerrar sesión</a></li>
        </div>
    </header>
    <div class="nav-actions">
        <ul class="nav">            
            <li><a href="">Centros de Verificación</a>
                <ul>
                    <li><a href="../Select/FSCentros_Verificacion.php">Ver Centros</a></li>
                    <li><a href="../Insert/FCentros_Verificacion.php">Insertar Centros</a></li>
                    <li><a href="#" onclick="actualizar_Centros()">Actualizar Centros</a></li>
                    <li><a href="../Delete/FDCentros_Verificacion.php">Eliminar Centros</a></li>
                </ul>
            </li>
            
            <li><a href="">Conductores</a>
                <ul>
                    <li><a href="../Select/FSConductores.php">Ver Conductores</a></li>
                    <li><a href="../Insert/FConductores.php">Insertar Conductores</a></li>
                    <li><a href="#" onclick="actualizar_Conductores()">Actualizar Conductores</a></li>
                    <li><a href="../Delete/FDConductores.php">Eliminar Conductores</a></li>
                </ul>
            </li>
            
            <li><a href="">Domicilios</a>
                <ul>
                    <li><a href="../Select/FSDomicilios.php">Ver Domicilios</a></li>
                    <li><a href="../Insert/FDomicilios.php">Insertar Domicilios</a></li>
                    <li><a href="#" onclick="actualizar_Domicilios()">Actualizar Domicilios</a></li>
                    <li><a href="../Delete/FDDomicilios.php">Eliminar Domicilios</a></li>
                </ul>
            </li>
            
            <li><a href="">Licencias</a>
                <ul>
                    <li><a href="../Select/FSLicencias.php">Ver Licencias</a></li>
                    <li><a href="../Insert/FLicencias.php">Insertar Licencias</a></li>
                    <li><a href="#" onclick="actualizar_Licencias()">Actualizar Licencias</a></li>
                    <li><a href="../Delete/FDLicencias.php">Eliminar Licencias</a></li>
                </ul>
            </li>
            
            <li><a href="">Multas</a>
                <ul>
                    <li><a href="../Select/FSMultas.php">Ver Multas</a></li>
                    <li><a href="../Insert/FMultas.php">Insertar Multas</a></li>
                    <li><a href="#" onclick="actualizar_Multas()">Actualizar Multas</a></li>
                    <li><a href="../Delete/FDMultas.php">Eliminar Multas</a></li>
                </ul>
            </li>
            
            <li><a href="">Oficiales</a>
                <ul>
                    <li><a href="../Select/FSOficiales.php">Ver Oficiales</a></li>
                    <li><a href="../Insert/FOficiales.php">Insertar Oficiales</a></li>
                    <li><a href="#" onclick="actualizar_Oficiales()">Actualizar Oficiales</a></li>
                    <li><a href="../Delete/FDOficiales.php">Eliminar Oficiales</a></li>
                </ul>
            </li>
            
            <li><a href="">Pagos</a>
                <ul>
                    <li><a href="../Select/FSPagos.php">Ver Pagos</a></li>
                    <li><a href="../Insert/FPagos.php">Insertar Pagos</a></li>
                    <li><a href="#" onclick="actualizar_Pagos()">Actualizar Pagos</a></li>
                    <li><a href="../Delete/FDPagos.php">Eliminar Pagos</a></li>
                </ul>
            </li>
            
            <li><a href="">Propietarios</a>
                <ul>
                    <li><a href="../Select/FSPropietarios.php">Ver Propietarios</a></li>
                    <li><a href="../Insert/FPropietarios.php">Insertar Propietarios</a></li>
                    <li><a href="#" onclick="actualizar_Propietarios()">Actualizar Propietarios</a></li>
                    <li><a href="../Delete/FDPropietarios.php">Eliminar Propietarios</a></li>
                </ul>
            </li>
            
            <li><a href="">Tarjetas de Circulación</a>
                <ul>
                    <li><a href="../Select/FSTarjetas_Circulacion.php">Ver Tarjetas</a></li>
                    <li><a href="../Insert/FTarjetas_Circulacion.php">Insertar Tarjetas</a></li>
                    <li><a href="#" onclick="actualizar_TarjetasCirculacion()">Actualizar Tarjetas</a></li>
                    <li><a href="../Delete/FDTarjetas_Circulacion.php">Eliminar Tarjetas</a></li>
                </ul>
            </li>
            
            <li><a href="">Tarjetas de Verificación</a>
                <ul>
                    <li><a href="../Select/FSTarjetas_Verificacion.php">Ver Tarjetas</a></li>
                    <li><a href="../Insert/FTarjetas_Verificacion.php">Insertar Tarjetas</a></li>
                    <li><a href="#" onclick="actualizar_TarjetasVerificacion()">Actualizar Tarjetas</a></li>
                    <li><a href="../Delete/FDTarjetas_Verificacion.php">Eliminar Tarjetas</a></li>
                </ul>
            </li>
            
            <li><a href="">Vehículos</a>
                <ul>
                    <li><a href="../Select/FSVehiculos.php">Ver Vehículos</a></li>
                    <li><a href="../Insert/FVehiculos.php">Insertar Vehículos</a></li>
                    <li><a href="#" onclick="actualizar_Vehiculos()">Actualizar Vehículos</a></li>
                    <li><a href="../Delete/FDVehiculos.php">Eliminar Vehículos</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div id="Logo">
        <img src="../public/logo.png" alt="Logo del sistema de control vehicular">
    </div>
</body>
</html>
