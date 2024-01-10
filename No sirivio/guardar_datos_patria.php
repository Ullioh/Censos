<?php
$conexion = mysqli_connect('localhost', 'root', '', 'censos');

if (!$conexion) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fecha_nacimiento = $_POST['date'];
    $telefono = $_POST['telefono'];
    $tipo_persona = $_POST['Tpersona'];
    $correo_electronico = $_POST['email'];
    $es_manzanero = $_POST['manzana'];
    $codigo = $_POST['code'];
    $serial1 = $_POST['serial1'];
    $num_integrantes_familia = $_POST['Nintegrantes'];

    $query = "INSERT INTO carnet_patria (fecha_nacimiento, telefono, tipo_persona, correo_electronico, es_manzanero, codigo, serial1, num_integrantes_familia) VALUES ('$fecha_nacimiento', '$telefono', '$tipo_persona', '$correo_electronico', '$es_manzanero', '$codigo', '$serial1', '$num_integrantes_familia')";

        if (mysqli_query($conexion, $query)) {
        mysqli_close($conexion);
        header("Location: views/home.php");
        exit();
    } else {
        echo "Error al registrar datos: " . mysqli_error($conexion);
    }
}
?>
