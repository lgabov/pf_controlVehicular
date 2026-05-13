<?php

//Recibir los datos
$Numero_licencia = $_GET['Numero_licencia'];
$Nombre = $_GET['Nombre'];
$Apellido_paterno = $_GET['Apellido_paterno'];
$Apellido_materno = $_GET['Apellido_materno'];
$Estado_procedencia = $_GET['Estado_procedencia'];
$Fecha_nacimiento = $_GET['Fecha_nacimiento'];
$Grupo_sanguineo = $_GET['Grupo_sanguineo'];
$Donador_organos = $_GET['Donador_organos'];
$Sexo = $_GET['Sexo'];
$Id_domicilio = $_GET['Id_domicilio'];


//Formar sql
$sql = "UPDATE conductores SET Nombre='$Nombre', Apellido_paterno='$Apellido_paterno', Apellido_materno='$Apellido_materno', Estado_procedencia='$Estado_procedencia', Fecha_nacimiento='$Fecha_nacimiento', Grupo_sanguineo='$Grupo_sanguineo', Donador_organos='$Donador_organos', Sexo='$Sexo', Id_domicilio='$Id_domicilio' WHERE Numero_licencia='$Numero_licencia'";
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