<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
//Recibir los datos
$Linea_captura = $_GET['Linea_captura'];
$Fecha_limite = $_GET['Fecha_limite'];
$Importe = $_GET['Importe'];
$Instrumento = $_GET['Instrumento'];

//Formar sql
$sql = "UPDATE pagos SET Fecha_limite='$Fecha_limite', Importe='$Importe', Instrumento='$Instrumento' WHERE Linea_captura='$Linea_captura'";
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