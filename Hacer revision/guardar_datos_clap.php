<?php
$conexion = mysqli_connect('localhost', 'root', '', 'censos');

if (!$conexion) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $manzana = $_POST['manzana'];
    $grupo = $_POST['grupo'];
    $nacionalidad = $_POST['nacionalidad'];
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];

    $query = "INSERT INTO datos_clap (manzana, grupo_familiar, nacionalidad, cedula_identidad, nombre_apellido, edad, sexo) VALUES ('$manzana', '$grupo', '$nacionalidad', '$cedula', '$nombre', '$edad', '$sexo')";

       if (mysqli_query($conexion, $query)) {
        mysqli_close($conexion);
        header("Location: views/home.php");
        exit();
    } else {
        echo "Error al registrar datos: " . mysqli_error($conexion);
    }
}
?>

