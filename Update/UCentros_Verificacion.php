<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
//Recibir los datos
$Numero_centro = $_GET['Numero_centro'];
$Hora_entrada = $_GET['Hora_entrada'];
$Hora_salida = $_GET['Hora_salida'];

//Formar sql
$sql = "UPDATE Centros_Verificacion SET Hora_entrada='$Hora_entrada', Hora_salida='$Hora_salida' WHERE Numero_centro='$Numero_centro';";
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