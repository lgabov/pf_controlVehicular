<?php
    $Usuario = $_POST["Usuario"];
    $Pwd = $_POST["Pwd"];

    print($Usuario. " ". $Pwd);
    include("../Controlador.php");

    $Con = Conectar();
    $sql = "SELECT * FROM Cuentas WHERE Usuario = '$Usuario'";
    $ResultSet = Ejecutar($Con, $sql);
    $NumFilas = mysqli_num_rows($ResultSet);
    
    if($NumFilas == 0) { 
        print("El usuario no existe");
        } else {
            $Fila = mysqli_fetch_row($ResultSet);
            if($Fila[1] == $Pwd) {
                print("Contraseña correcta");
                if($Fila[5] != 0) {
                    $sql = "UPDATE Cuentas SET Intentos = '0' WHERE Usuario = '$Usuario';  ";
                    $ResultSet = Ejecutar($Con, $sql);
                }
                if($Fila[3] == 0) {
                    print("Cuenta no bloqueada");
                    if($Fila[4] == 1) {
                        print("Cuenta Activa");
                        ////////////////////PERMITIR ACCESO
                        if($Fila[2] == 'A') {
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

                if($Fila[5] >= 3){
                    print("Máximo de intentos alcansados: Cuenta Bloqueada");
                    $sql = "UPDATE Cuentas SET Bloqueo = '1', Intentos = '0'  WHERE Usuario = '$Usuario'; ";
                    $ResultSet = Ejecutar($Con, $sql);
                }
            }
    }
        
    Desconectar($Con);
?>

