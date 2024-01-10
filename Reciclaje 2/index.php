<?php
// En este archivo se redirecciona dependiendo del estado de la sesión
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: vistas/inicio.php');
    exit();
} else {
    header('Location: vistas/cerrar_sesion.php');
    exit();
}
