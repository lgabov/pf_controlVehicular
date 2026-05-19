<?php
session_start();
include("../Controlador.php");

    $Con = Conectar();
    $Usuario = $_POST["Usuario"];
    $Pwd = $_POST["Pwd"];
    
    $sql = "SELECT * FROM Cuentas WHERE Usuario = '$Usuario'";
    $ResultSet = Ejecutar($Con, $sql);
    $NumFilas = mysqli_num_rows($ResultSet);
    
    if($NumFilas == 0) { 
        print("El usuario no existe");
        } else {
            $Fila = mysqli_fetch_assoc($ResultSet);
            if($Fila['Pwd'] == $Pwd) {
                if($Fila['Intentos'] != 0) {
                    $sql = "UPDATE Cuentas SET Intentos = '0' WHERE Usuario = '$Usuario';  ";
                    $ResultSet = Ejecutar($Con, $sql);
                }
                if($Fila['Bloqueo'] == 0) {
                    if($Fila['Estado'] == 1) {
                        $_SESSION['usuario'] = $Usuario;
                         if($Fila['Tipo'] == 'A') {

                          $_SESSION['role'] = 'admin';

                           } elseif($Fila['Tipo'] == 'U') {

                          $_SESSION['role'] = 'user';

                           } else {

                                die("Tipo de usuario inválido");
                                 }
                
                         Desconectar($Con);
                        ////////////////////PERMITIR ACCESO
                        if($Fila['Tipo'] == 'A') {
                            header("Location: MenuAdmin.php");
                        } else {
                            header("Location: MenuUsuario.php");
                        }
                    } else {
                        print("Cuenta No Activa");
                    }
                } else {
                    print("Su cuenta está bloqueada");
                }
            } else {
                print("Contraseña incorrecta");
                $sql = "UPDATE Cuentas SET Intentos = (Intentos +1) WHERE Usuario = '$Usuario';";
                $ResultSet = Ejecutar($Con, $sql);

                if($Fila['Intentos'] >= 3){
                    print("Máximo de intentos alcansados: Cuenta Bloqueada");
                    $sql = "UPDATE Cuentas SET Bloqueo = '1', Intentos = '0'  WHERE Usuario = '$Usuario'; ";
                    $ResultSet = Ejecutar($Con, $sql);
                }
            }
    }
        
   // Desconectar($Con);
?>

