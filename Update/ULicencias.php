<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
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
try {
    $ResultSet = Ejecutar($Con, $sql);
    if (mysqli_affected_rows($Con) > 0) {
        echo "Registro actualizado con éxito. Redirigiendo...";
        echo '<meta http-equiv="refresh" content="3;url=../Auth/MenuAdmin.php">';
        exit();
    } else {
        print("Registro procesado (sin cambios realizados o ID no encontrado).");
    }

} catch (mysqli_sql_exception $e) {

    if ($e->getCode() == 1062) {
        print("Error: No puedes usar ese ID porque ya pertenece a otro registro.");
    } else {
        print("Error interno en la base de datos: " . $e->getMessage());
    }
} finally {
    Desconectar($Con);
}
?>