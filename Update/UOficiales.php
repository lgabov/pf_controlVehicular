<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
//Recibir los datos
$Id = $_GET['Id'];
$Nombre  = $_GET['Nombre'];
$Apellidos = $_GET['Apellidos'];
$Grupo = $_GET['Grupo'];

//Formar sql
$sql = "UPDATE Oficiales SET Nombre='$Nombre', Apellidos='$Apellidos', Grupo='$Grupo' WHERE Id='$Id'";
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