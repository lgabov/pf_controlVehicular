<?php
require_once "../Auth/auth.php";

proteger(["admin"]);

ini_set('display_errors', 1);

// 2. Asegurarse de que se reporten todos los tipos de errores (avisos, advertencias, errores fatales)
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Recibir los datos
$Id = $_GET['Id'];
$Nombre = $_GET['Nombre'];
$Fecha_nacimiento = $_GET['Fecha_nacimiento'];
$RFC = $_GET["RFC"];
$Apellido_paterno = $_GET['Apellido_paterno'];
$Apellido_materno = $_GET['Apellido_materno'];  
$Id_domicilio = $_GET['Id_domicilio'];

//Formar sql
$sql = "UPDATE propietarios SET Fecha_nacimiento='$Fecha_nacimiento', Nombre='$Nombre', RFC='$RFC', Apellido_paterno='$Apellido_paterno', Apellido_materno='$Apellido_materno', Id_domicilio='$Id_domicilio' WHERE Id='$Id';";
//Ejecutar sql
include ('../Controlador.php');
$Con = Conectar();
$ResultSet = Ejecutar($Con, $sql);
$FilasActualizadas = mysqli_affected_rows($Con);

Desconectar($Con);

if($FilasActualizadas == 0){
    print("0 Filas actualizadas");
}else{
    print("1 Fila actualizada");
}
?>