<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
//Recibir los datos
$Id = $_GET['Id'];
$Año = $_GET['Año'];
$Placa = $_GET['Placa'];
$Marca = $_GET['Marca'];
$Numero_serie = $_GET['Numero_serie'];
$Origen = $_GET['Origen'];
$Color = $_GET['Color'];
$Cilindraje = $_GET['Cilindraje'];
$Capacidad = $_GET['Capacidad'];
$Puertas = $_GET['Puertas'];
$Asientos = $_GET['Asientos'];
$Transmision = $_GET['Transmision'];
$Clave_vehicular = $_GET['Clave_vehicular'];
$Tipo_combustible = $_GET['Tipo_combustible'];

//Formar sql
$sql = "UPDATE vehiculos SET Año='$Año', Placa='$Placa', Marca='$Marca', Numero_serie='$Numero_serie', Origen='$Origen', Color='$Color', Cilindraje='$Cilindraje', Capacidad='$Capacidad', Puertas='$Puertas', Asientos='$Asientos', Transmision='$Transmision', Clave_vehicular='$Clave_vehicular', Tipo_combustible='$Tipo_combustible' WHERE Id='$Id'";
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