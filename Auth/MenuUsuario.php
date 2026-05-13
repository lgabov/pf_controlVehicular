<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'user') {
    header("Location: login.html"); 
    exit(); 
}
print("Menu de Usuario");
print("<br>");
?>

<a href="../Select/">Consultar </a><br>