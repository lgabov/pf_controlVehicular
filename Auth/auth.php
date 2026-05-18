<?php

session_start();

function proteger($rolesPermitidos = [])
{
    if(!isset($_SESSION['usuario'])) {

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