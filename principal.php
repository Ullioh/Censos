<?php
    $conexion=mysqli_connect('localhost','root','','censos');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>DATOS PERSONAS</title>
    <!-- Agregar enlaces a Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos adicionales */
        body {
            background-image: url('m.png'); /* Reemplaza 'tu-imagen-de-fondo.jpg' con la ruta de tu imagen */
            background-size: cover; /* Ajusta el tamaño de la imagen al contenedor */
            background-position: center; /* Centra la imagen */
            background-repeat: no-repeat; /* Evita la repetición de la imagen */
        }

        h2 {
            text-align: center;
            margin-top: 20px;
            color: #000; /* Cambia el color del texto si es necesario para que sea visible en el fondo */
        }

        .btn-container {
            margin-bottom: 20px; /* Margen inferior para los botones */
        }

        .logout-btn {
            border: 1px solid #ccc; /* Borde del botón */
            border-radius: 5px; /* Bordes redondeados */
        }

        .logo {
            max-height: 40px;
        }

        .container {
            /* Agrega estilos adicionales para que el contenido sea legible en la imagen de fondo */
            background-color: rgba(255, 255, 255, 0.8); /* Fondo semi-transparente para el contenido */
            padding: 20px;
            margin-top: 50px;
            border-radius: 10px;
            color: #000; /* Cambia el color del texto si es necesario para que sea visible en el fondo */
        }

        /* Agrega estilos adicionales para el formulario */
        form {
            max-width: 400px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

    <div class="container-fluid">
        <div class="row justify-content-between mt-3 mr-3 ml-3">
            <div class="col-auto d-flex align-items-center">
                <img src="logo.png" alt="Logo" class="logo mr-2">
            </div>
            <div class="col-auto">
                <button class="btn btn-primary logout-btn"><a href="index.html" style="color: white;">Cerrar sesión</a></button>
            </div>
        </div>
    </div>

    

    <div class="container">
       <h2>DATOS CLAP</h2>
        <div class="btn-container">
            <button class="btn btn-primary"><a href="RdatosClap.html" style="color: white;">Registrar Persona</a></button>
        </div>
        <input type="text" id="busquedaClap" class="form-control mb-2" placeholder="Buscar en la tabla...">
        <table id="datosClapTabla" class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>N de manzana</th>
                    <th>Grupo familiar</th>
                    <th>Nacionalidad</th>
                    <th>Cédula de identidad</th>
                    <th>Nombre y apellido</th>
                    <th>Edad</th>
                    <th>Sexo</th>
                    <th>Operación</th>
                </tr>
            </thead>
            <?php
            $sql = "SELECT * from datos_clap";
            $result = mysqli_query($conexion, $sql);

            while ($mostrar = mysqli_fetch_array($result)) {
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $mostrar['manzana'] ?></td>
                        <td><?php echo $mostrar['grupo_familiar'] ?></td>
                        <td><?php echo $mostrar['nacionalidad'] ?></td>
                        <td><?php echo $mostrar['cedula_identidad'] ?></td>
                        <td><?php echo $mostrar['nombre_apellido'] ?></td>
                        <td><?php echo $mostrar['edad'] ?></td>
                        <td><?php echo $mostrar['sexo'] ?></td>
                        <td>
                            <form method="POST" action="eliminar_dato.php">
                                <input type="hidden" name="id_eliminar" value="<?php echo $mostrar['id']; ?>">
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>
    </div>

    <!-- OTRA TABLA -->

    <div class="container">
      <h2>CARNET DE LA PATRIA</h2>
        <div class="btn-container">
            <button class="btn btn-primary"><a href="RdatosPatria.html" style="color: white;">Registrar Persona</a></button>
        </div>
        <input type="text" id="busquedaPatria" class="form-control mb-2" placeholder="Buscar en la tabla...">
        <table id="datosPatriaTabla" class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Fecha de nacimiento</th>
                    <th>Teléfono</th>
                    <th>Tipo de persona</th>
                    <th>Correo electrónico</th>
                    <th>¿Es Manzanero?</th>
                    <th>Código</th>
                    <th>Serial</th>
                    <th>Número de integrantes <br>de la familia</th>
                    <th>Operación</th>
                </tr>
            </thead>
            <?php
            $sql = "SELECT * from carnet_patria";
            $result2 = mysqli_query($conexion, $sql);

            while ($mostrar = mysqli_fetch_array($result2)) {
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $mostrar['fecha_nacimiento'] ?></td>
                        <td><?php echo $mostrar['telefono'] ?></td>
                        <td><?php echo $mostrar['tipo_persona'] ?></td>
                        <td><?php echo $mostrar['correo_electronico'] ?></td>
                        <td><?php echo $mostrar['es_manzanero'] ?></td>
                        <td><?php echo $mostrar['codigo'] ?></td>
                        <td><?php echo $mostrar['serial1'] ?></td>
                        <td><?php echo $mostrar['num_integrantes_familia'] ?></td>
                        <td>
                            <form method="POST" action="eliminar_datoP.php">
                                <input type="hidden" name="id_eliminar" value="<?php echo $mostrar['id']; ?>">
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>
    </div>

    <!-- Agregar script de Bootstrap JS para funcionalidades adicionales -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script para búsqueda en la tabla -->
    <script>
        $(document).ready(function(){
            $('#busquedaClap').on('keyup', function(){
                var valor = $(this).val().toLowerCase();
                $('#datosClapTabla tbody tr').filter(function(){
                    $(this).toggle($(this).text().toLowerCase().indexOf(valor) > -1)
                });
            });

            $('#busquedaPatria').on('keyup', function(){
        var valor = $(this).val().toLowerCase();
        $('#datosPatriaTabla tbody tr').filter(function(){
          $(this).toggle($(this).text().toLowerCase().indexOf(valor) > -1)
        });
      });
    });
  </script>
</body>
</html>