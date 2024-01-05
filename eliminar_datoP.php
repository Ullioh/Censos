<?php
// Archivo eliminar_dato.php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_eliminar'])) {
    $id_eliminar = $_POST['id_eliminar'];
    $conexion = mysqli_connect('localhost', 'root', '', 'censos');

    if ($conexion) {
        $sql_eliminar = "DELETE FROM carnet_patria WHERE id = $id_eliminar";
        $resultado = mysqli_query($conexion, $sql_eliminar);

        if ($resultado) {
            // Redirigir a la misma página después de eliminar el registro
            header("Location: {$_SERVER['HTTP_REFERER']}");
            exit(); // Asegúrate de detener la ejecución del script después de redirigir
        } else {
            echo "Error al eliminar el registro: " . mysqli_error($conexion);
        }
    } else {
        echo "Error al conectar a la base de datos: " . mysqli_connect_error();
    }

    mysqli_close($conexion);
}
?>