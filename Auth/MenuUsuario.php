<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'user') {
    header("Location: login.html"); 
    exit(); 
}
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
                </ul>
            </li>
            <li><a href="">Conductores</a>
                <ul>
                    <li><a href="../Select/FSConductores.html">Ver Conductores</a></li>
                </ul>
            </li>
            <li><a href="">Domicilios</a>
                <ul>
                    <li><a href="../Select/FSDomicilios.html">Ver Domicilios</a></li>
                </ul>
            </li>
            <li><a href="">Licencias</a>
                <ul>
                    <li><a href="../Select/FSLicencias.html">Ver Licencias</a></li>
                </ul>
            </li>
            <li><a href="">Multas</a>
                <ul>
                    <li><a href="../Select/FSMultas.html">Ver Multas</a></li>
                </ul>
            </li>
            <li><a href="">Oficiales</a>
                <ul>
                    <li><a href="../Select/FSOficiales.html">Ver Oficiales</a></li>
                </ul>
            </li>
            <li><a href="">Pagos</a>
                <ul>
                    <li><a href="../Select/FSPagos.html">Ver Pagos</a></li>
                </ul>
            </li>
            <li><a href="">Propietarios</a>
                <ul>
                    <li><a href="../Select/FSPropietarios.html">Ver Propietarios</a></li>
                </ul>
            </li>
            <li><a href="">Tarjetas de Circulación</a>
                <ul>
                    <li><a href="../Select/FSTarjetas_Circulacion.html">Ver Tarjetas</a></li>
                </ul>
            </li>
            <li><a href="">Tarjetas de Verificación</a>
                <ul>
                    <li><a href="../Select/FSTarjetas_Verificacion.html">Ver Tarjetas</a></li>
                </ul>
            </li>
            <li><a href="">Vehículos</a>
                <ul>
                    <li><a href="../Select/FSVehiculos.html">Ver Vehículos</a></li>
                </ul>
            </li>
        </ul>
    </div>
</body>
</html>