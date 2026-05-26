<?php
session_start();
include("../Controlador.php");

$Con = Conectar();

$Usuario = mysqli_real_escape_string($Con, $_POST["Usuario"]);
$Pwd = $_POST["Pwd"];

$sql = "SELECT * FROM Cuentas WHERE Usuario = '$Usuario'";
$ResultSet = Ejecutar($Con, $sql);
$NumFilas = mysqli_num_rows($ResultSet);

if($NumFilas == 0) { 
    print("El usuario no existe");
} else {
    $Fila = mysqli_fetch_assoc($ResultSet);
    
    if($Fila['Pwd'] == $Pwd) {
        if($Fila['Bloqueo'] == 0) {
            if($Fila['Estado'] == 1) {

                if (isset($_FILES["archivo_txt"]) && $_FILES["archivo_txt"]["error"] == 0) {

                    $tipo_archivo = strtolower(pathinfo($_FILES["archivo_txt"]["name"], PATHINFO_EXTENSION));

                    if ($tipo_archivo === "txt") {

                        $contenidoSubido = trim(file_get_contents($_FILES["archivo_txt"]["tmp_name"]));

                        $llaveMaestra = trim($Fila['key']); 

                        if ($contenidoSubido !== $llaveMaestra) {
                            die("Error: La llave dentro del archivo no coincide con el registro.");
                        }

                        $_SESSION['contenido_txt'] = $contenidoSubido;

                    } else {
                        die("Error: Solo se permiten archivos con extensión .txt");
                    }
                } else {
                    die("Error al subir el archivo o archivo no seleccionado.");
                }

                if($Fila['Intentos'] != 0) {
                    $sql = "UPDATE Cuentas SET Intentos = '0' WHERE Usuario = '$Usuario';";
                    Ejecutar($Con, $sql);
                }

                $_SESSION['usuario'] = $Usuario;
                
                // Asignación de rol
                if($Fila['Tipo'] == 'A') {
                    $_SESSION['role'] = 'admin';
                } elseif($Fila['Tipo'] == 'U') {
                    $_SESSION['role'] = 'user';
                } else {
                    die("Tipo de usuario inválido");
                }
                
                Desconectar($Con);

                if($Fila['Tipo'] == 'A') {
                    header("Location: MenuAdmin.php");
                } else {
                    header("Location: MenuUsuario.php");
                }
                exit(); 
                
            } else {
                print("Cuenta No Activa");
            }
        } else {
            print("Su cuenta está bloqueada");
        }
    } else {
        print("Contraseña incorrecta. ");

        $sql = "UPDATE Cuentas SET Intentos = (Intentos + 1) WHERE Usuario = '$Usuario';";
        Ejecutar($Con, $sql);

        if(($Fila['Intentos'] + 1) >= 3){
            print("Máximo de intentos alcanzados: Cuenta Bloqueada");
            $sql = "UPDATE Cuentas SET Bloqueo = '1', Intentos = '0' WHERE Usuario = '$Usuario';";
            Ejecutar($Con, $sql);
        }
    }
}
    
Desconectar($Con);
?>



