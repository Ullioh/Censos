<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "censos";
// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$date = $_POST['date'];
$telefono = $_POST['telefono'];
$Tpersona = $_POST['Tpersona'];
$email = $_POST['email'];
$manzana = $_POST['manzana'];
$code = $_POST['code'];
$serial1 = $_POST['serial1'];
$Nintegrantes = $_POST['Nintegrantes'];

// Insertar datos en la base de datos
$sql = "INSERT INTO carnet_patria (fecha_nacimiento, telefono, tipo_persona, correo_electronico, es_manzanero, codigo, serial1, num_integrantes_familia)
        VALUES ('$date', '$telefono', '$Tpersona', '$email', '$manzana', '$code', '$serial1', '$Nintegrantes')";

if ($conn->query($sql) === TRUE) {
    header("Location: principal.php");
        exit();
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>

