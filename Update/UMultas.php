<?php

//Recibir los datos
$Folio = $_GET['Folio'];
$Fecha = $_GET['Fecha'];
$Hora = $_GET['Hora'];
$Reporte_seccion = $_GET['Reporte_seccion'];
$Nombre_via = $_GET['Nombre_via'];
$Kilometro = $_GET['Kilometro'];
$Fundamentos = $_GET['Fundamentos'];
$Observaciones_personal = $_GET['Observaciones_personal'];
$Observaciones_conductor = $_GET['Observaciones_conductor'];
$Id_oficial = $_GET['Id_oficial'];
$Id_pago = $_GET['Id_pago'];

//Formar sql
$sql = "UPDATE multas SET Fecha='$Fecha', Hora='$Hora', Reporte_seccion='$Reporte_seccion', Nombre_via='$Nombre_via', Kilometro='$Kilometro', Fundamentos='$Fundamentos', Observaciones_personal='$Observaciones_personal', Observaciones_conductor='$Observaciones_conductor', Id_oficial='$Id_oficial', Id_pago='$Id_pago' WHERE Folio='$Folio'";
//Ejecutar sql
include ('Controlador.php');
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