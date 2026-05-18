<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
//Recibir los datos
$Id = $_GET['Id'];
$localidad = $_GET['Localidad'];
$municipio = $_GET['Municipio'];
$entidad_federativa = $_GET['Entidad_federativa'];

//Formar sql
$sql = "UPDATE domicilios SET Localidad='$localidad', Municipio='$municipio', Entidad_federativa='$entidad_federativa' WHERE Id='$Id'";
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