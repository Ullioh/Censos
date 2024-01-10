<?php
class SesionControlador {
    public function cerrarSesion() {
        session_start();
        session_unset();
        session_destroy();
        header('Location: ../vistas/cerrar_sesion.php');
        exit();
    }
}

// Lógica para cerrar la sesión según el parámetro 'accion'
$controlador = new SesionControlador();
if (isset($_GET['accion'])) {
    if ($_GET['accion'] === 'cerrar') {
        $controlador->cerrarSesion();
    }
}
