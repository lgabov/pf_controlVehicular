<?php

session_start();

function proteger($rolesPermitidos = [])
{
    if(
        !isset($_SESSION['usuario']) ||
        !isset($_SESSION['role'])
    ) {
        header("Location: ../Auth/login.html");
        exit();
    }

    if(!empty($rolesPermitidos)) {

        if(!in_array($_SESSION['role'], $rolesPermitidos)) {

            header("Location: ../Auth/login.html");
            exit();
        }
    }
}
?>