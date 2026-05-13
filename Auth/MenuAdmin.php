<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.html"); 
    exit(); 
}

print("Menu de Administrador");
print("<br>");
?>
<a href="../Delete/">Eliminar </a><br>
<a href="../Insert/">Insertar </a><br>
<a href="../Select/">Consultar </a><br>
<a href="../Update/">Actualizar </a><br>
