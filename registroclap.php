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
$manzana = $_POST['manzana'];
$grupo = $_POST['grupo'];
$nacionalidad = $_POST['nacionalidad'];
$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];

// Insertar datos en la base de datos
$sql = "INSERT INTO datos_clap (manzana, grupo_familiar, nacionalidad, cedula_identidad, nombre_apellido, edad, sexo)
        VALUES ('$manzana', '$grupo', '$nacionalidad', '$cedula', '$nombre', $edad, '$sexo')";

if ($conn->query($sql) === TRUE) {
    header("Location: principal.php");
        exit();
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>

