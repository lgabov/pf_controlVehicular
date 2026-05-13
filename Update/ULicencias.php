<?php

//Recibir los datos
$Id = $_POST['Id'];
$Fecha_expedicion = $_POST['Fecha_expedicion'];
$Fecha_validez = $_POST['Fecha_validez'];
$Antiguedad = $_POST['Antiguedad'];
$Id_conductor = $_POST['Id_conductor'];
$Id_pago = $_POST['Id_pago'];

//Formar sql
$sql = "UPDATE licencias SET Fecha_expedicion='$Fecha_expedicion', Fecha_validez='$Fecha_validez', Antiguedad='$Antiguedad', Id_conductor='$Id_conductor', Id_pago='$Id_pago' WHERE Id='$Id'";
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