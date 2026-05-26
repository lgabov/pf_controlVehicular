<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function proteger($rolesPermitidos = [])
{

    if (
        !isset($_SESSION['usuario']) || 
        !isset($_SESSION['role']) || 
        !isset($_SESSION['contenido_txt']) 
    ) {
        header("Location: ../Auth/login.html");
        exit();
    }

    if (!empty($rolesPermitidos)) {
        if (!in_array($_SESSION['role'], $rolesPermitidos)) {
            header("Location: ../Auth/login.html");
            exit();
        }
    }
}
?>

