<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
//Recibir los datos
$Folio = $_GET['Folio'];
$Fecha_expedicion = $_GET['Fecha_expedicion'];
$Tipo_servicio = $_GET['Tipo_servicio'];
$Motivo = $_GET['Motivo'];
$Semestre = $_GET['Semestre'];
$Vigencia = $_GET['Vigencia'];
$Linea_vigencia = $_GET['Linea_vigencia'];
$Tecnico_verificador = $_GET['Tecnico_verificador'];
$Numero_centro = $_GET['Numero_centro'];
$Id_pago = $_GET['Id_pago'];

//Formar sql
$sql = "UPDATE tarjetas_verificacion SET Fecha_expedicion='$Fecha_expedicion', Tipo_servicio='$Tipo_servicio', Motivo='$Motivo', Semestre='$Semestre', Vigencia='$Vigencia', Linea_vigencia='$Linea_vigencia', Tecnico_verificador='$Tecnico_verificador', Numero_centro='$Numero_centro', Id_pago='$Id_pago' WHERE Folio='$Folio'";
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