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
		<title>Menu Desplegable</title>
		<style type="text/css">
			
			* {
				margin:0px;
				padding:0px;
			}
			
			#header {
				margin:auto;
				width:500px;
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
				<li><a href="">Insert</a>
					<ul>
						<li><a href="">Centros de Verificacion</a></li>
						<li><a href="">Conductores</a></li>
						<li><a href="">Domicilios</a></li>
                        <li><a href="">Domicilios</a></li>
                        <li><a href="">Licencias</a></li>
                        <li><a href="">Pagos</a></li>
                        <li><a href="">Propietarios</a></li>
                        <li><a href="">Tarjetas de circulacion</a></li>
                        <li><a href="">Tarjetas de verificacion </a></li>
						<li><a href="">Vehiculos</a>
							<ul>
								<li><a href="">Submenu1</a></li>
								<li><a href="">Submenu2</a></li>
								<li><a href="">Submenu3</a></li>
								<li><a href="">Submenu4</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="">Acerca de</a>
					<ul>
						<li><a href="">Submenu1</a></li>
						<li><a href="">Submenu2</a></li>
						<li><a href="">Submenu3</a></li>
						<li><a href="">Submenu4</a></li>
					</ul>
				</li>
				<li><a href="">Contacto</a></li>
			</ul>
		</div>
	</body>
</html>