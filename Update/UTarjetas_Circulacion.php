<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
//Recibir los datos
$Folio = $_REQUEST['Folio'];
$Vigencia = $_REQUEST['Vigencia'];
$Oficina = $_REQUEST['Oficina'];
$Operacion = $_REQUEST['Operacion'];
$Movimiento = $_REQUEST['Movimiento'];
$Id_vehiculo = $_REQUEST['Id_vehiculo'];
$Id_propietario = $_REQUEST['Id_propietario'];
$Id_pago = $_REQUEST['Id_pago'];

//Formar sql
$sql = "UPDATE tarjetas_circulacion SET Vigencia='$Vigencia', Oficina='$Oficina', Operacion='$Operacion', Movimiento='$Movimiento', Id_vehiculo='$Id_vehiculo', Id_propietario='$Id_propietario', Id_pago='$Id_pago' WHERE Folio='$Folio'";
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