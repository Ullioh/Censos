<?php
$conexion = mysqli_connect('localhost', 'root', '', 'censos');

if (!$conexion) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_eliminar'])) {
    $id_eliminar = $_POST['id_eliminar'];

    $eliminar = "DELETE FROM datos_clap WHERE id = '$id_eliminar'";
    if (mysqli_query($conexion, $eliminar)) {
        // Redirigir a la misma página después de eliminar el registro
            header("Location: {$_SERVER['HTTP_REFERER']}");
            exit(); // Asegúrate de detener la ejecución del script después de redirigir
    } else {
        echo "Error al eliminar el registro: " . mysqli_error($conexion);
    }
}
?>
