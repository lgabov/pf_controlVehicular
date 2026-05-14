<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.html"); 
    exit(); 
}

print("Menu de Administrador");
print("<br>");
?>

<html>
<head>
    <title>Menu Usuarios</title>
    <style type="text/css">
        
        * {
            margin:0px;
            padding:0px;
        }
        
        #header {
            margin:auto;
            width:700vh;
            font-family:Arial, Helvetica, sans-serif;
            
        }
        
        ul, ol {
            list-style:none;
        }
        
        .nav > li {
            float:left;
        }
        
        .nav li a {
            background-color:#000;
            color:#fff;
            text-decoration:none;
            padding:10px 12px;
            display:block;
        }
        
        .nav li a:hover {
            background-color:#434343;
        }
        
        .nav li ul {
            display:none;
            position:absolute;
            min-width:140px;
        }
        
        .nav li:hover > ul {
            display:block;
        }
        
        .nav li ul li {
            position:relative;
        }
        
        .nav li ul li ul {
            right:-140px;
            top:0px;
        }
        
    </style>
</head>
<body>
    <div id="header">
        <ul class="nav">
            <li><a href="">Inicio</a></li>
            <li><a href="">Centros de Verificación</a>
                <ul>
                    <li><a href="../Select/FSCentros_Verificacion.html">Ver Centros</a></li>
                    <li><a href="../Insert/FCentros_Verificacion.html">Insertar Centros</a></li>
                    <li><a href="../Update/FUCentros_Verificacion.php">Actualizar Centros</a></li>
                    <li><a href="../Delete/FDCentros_Verificacion.html">Eliminar Centros</a></li>
                </ul>
            </li>
            <li><a href="">Conductores</a>
                <ul>
                    <li><a href="../Select/FSConductores.html">Ver Conductores</a></li>
                    <li><a href="../Insert/FConductores.html">Insertar Conductores</a></li>
                    <li><a href="../Update/FUConductores.php">Actualizar Conductores</a></li>
                    <li><a href="../Delete/FDConductores.html">Eliminar Conductores</a></li>
                </ul>
            </li>
            <li><a href="">Domicilios</a>
                <ul>
                    <li><a href="../Select/FSDomicilios.html">Ver Domicilios</a></li>
                    <li><a href="../Insert/FDomicilios.html">Insertar Domicilios</a></li>
                    <li><a href="../Update/FUDomicilios.php">Actualizar Domicilios</a></li>
                    <li><a href="../Delete/FDDomicilios.html">Eliminar Domicilios</a></li>
                </ul>
            </li>
            <li><a href="">Licencias</a>
                <ul>
                    <li><a href="../Select/FSLicencias.html">Ver Licencias</a></li>
                    <li><a href="../Insert/FLicencias.html">Insertar Licencias</a></li>
                    <li><a href="../Update/FULicencias.php">Actualizar Licencias</a></li>
                    <li><a href="../Delete/FDLicencias.html">Eliminar Licencias</a></li>
                </ul>
            </li>
            <li><a href="">Multas</a>
                <ul>
                    <li><a href="../Select/FSMultas.html">Ver Multas</a></li>
                    <li><a href="../Insert/FMultas.html">Insertar Multas</a></li>
                    <li><a href="../Update/FUMultas.php">Actualizar Multas</a></li>
                    <li><a href="../Delete/FDMultas.html">Eliminar Multas</a></li>
                </ul>
            </li>
            <li><a href="">Oficiales</a>
                <ul>
                    <li><a href="../Select/FSOficiales.html">Ver Oficiales</a></li>
                    <li><a href="../Insert/FOficiales.html">Insertar Oficiales</a></li>
                    <li><a href="../Update/FUOficiales.php">Actualizar Oficiales</a></li>
                    <li><a href="../Delete/FDOficiales.html">Eliminar Oficiales</a></li>
                </ul>
            </li>
            <li><a href="">Pagos</a>
                <ul>
                    <li><a href="../Select/FSPagos.html">Ver Pagos</a></li>
                    <li><a href="../Insert/FPagos.html">Insertar Pagos</a></li>
                    <li><a href="../Update/FUPagos.php">Actualizar Pagos</a></li>
                    <li><a href="../Delete/FDPagos.html">Eliminar Pagos</a></li>
                </ul>
            </li>
            <li><a href="">Propietarios</a>
                <ul>
                    <li><a href="../Select/FSPropietarios.html">Ver Propietarios</a></li>
                    <li><a href="../Insert/FPropietarios.html">Insertar Propietarios</a></li>
                    <li><a href="../Update/FUPropietarios.php">Actualizar Propietarios</a></li>
                    <li><a href="../Delete/FDPropietarios.html">Eliminar Propietarios</a></li>
                </ul>
            </li>
            <li><a href="">Tarjetas de Circulación</a>
                <ul>
                    <li><a href="../Select/FSTarjetas_Circulacion.html">Ver Tarjetas</a></li>
                    <li><a href="../Insert/FTarjetas_Circulacion.html">Insertar Tarjetas</a></li>
                    <li><a href="../Update/FUTarjetas_Circulacion.php">Actualizar Tarjetas</a></li>
                    <li><a href="../Delete/FDTarjetas_Circulacion.php">Eliminar Tarjetas</a></li>
                </ul>
            </li>
            <li><a href="">Tarjetas de Verificación</a>
                <ul>
                    <li><a href="../Select/FSTarjetas_Verificacion.html">Ver Tarjetas</a></li>
                    <li><a href="../Insert/FTarjetas_Verificacion.html">Insertar Tarjetas</a></li>
                    <li><a href="../Update/FUTarjetas_Verificacion.php">Actualizar Tarjetas</a></li>
                    <li><a href="../Delete/FDTarjetas_Verificacion.php">Eliminar Tarjetas</a></li>
                </ul>
            </li>
            <li><a href="">Vehículos</a>
                <ul>
                    <li><a href="../Select/FSVehiculos.html">Ver Vehículos</a></li>
                    <li><a href="../Insert/FVehiculos.html">Insertar Vehículos</a></li>
                    <li><a href="../Update/FUVehiculos.php">Actualizar Vehículos</a></li>
                    <li><a href="../Delete/FDVehiculos.html">Eliminar Vehículos</a></li>
                </ul>
            </li>
        </ul>
    </div>
</body>
</html>