<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!-- Agregar el enlace al archivo CSS de Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Color gris suave para el fondo */
            height: 100vh; /* Altura del 100% de la ventana */
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding-right: 20px; /* Espacio en el lado derecho */
        }
        .login-container {
            background-color: #ffffff; /* Color blanco para el contenedor del formulario */
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            padding: 20px;
            width: 300px; /* Ancho del contenedor del formulario */
        }
        .form-label {
            color: #495057; /* Color gris suave para las etiquetas */
        }
        .btn-login {
            background-color: #dc3545; /* Color rojo suave para el botón */
            border-color: #dc3545;
            color: #ffffff; /* Texto blanco para el botón */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 ml-auto"> <!-- Alineado a la derecha -->
                <div class="login-container">
                    <form action="index.php?action=login" method="post">
                        <div class="form-group">
                            <label for="username" class="form-label">Usuario:</label>
                            <input type="text" id="username" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Contraseña:</label>
                            <input type="password" id="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Iniciar sesión" class="btn btn-login btn-block">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Agregar el script de Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
