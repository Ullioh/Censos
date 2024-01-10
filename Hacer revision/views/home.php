<?php

    $conexion=mysqli_connect('localhost','root','','censos')
?>

<!DOCTYPE html>
<html>
<head>
  <title>DATOS PERSONAS</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    th, td {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    th {
      background-color: #f2f2f2;
    }
    h2 {
      text-align: center;
    }
  </style>
</head>
<body>

  <button><a href="index.php?action=logout">Cerrar sesión</a></button>

<h2>DATOS CLAP</h2>

  <button><a href="RdatosClap.html">Registrar Persona</a></button>

<table>
  <thead>
    <tr>
      <th>N de manzana</th>
      <th>Grupo familiar</th>
      <th>Nacionalidad</th>
      <th>Cédula de identidad</th>
      <th>Nombre y apellido</th>
      <th>Edad</th>
      <th>Sexo</th>
      <th>operacion</th>
    </tr>
  </thead>
  

  <?php
  $sql= "SELECT * from datos_clap";
  $result=mysqli_query($conexion,$sql);

    while ($mostrar=mysqli_fetch_array($result)) {
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
	      <button type="submit">Eliminar</button>
	       </form>
       </td>
   </tr>

      </tbody>
  <?php
    }
  ?>
    <!-- Puedes añadir más filas con más datos aquí -->
</table>

	<!-- la OTRA TABLA -->

	<h2>CARNET DE LA PATRIA</h2>

  <button><a href="RdatosPatria.html">Registrar Persona</a></button>

	<table>
	  <thead>
	    <tr>
	      <th>Fecha de nacimiento</th>
	      <th>Teléfono</th>
	      <th>Tipo de persona</th>
	      <th>Correo electrónico</th>
	      <th>¿Es Manzanero?</th>
	      <th>Código</th>
	      <th>Serial</th>
	      <th>Número de integrantes <br>de la familia</th>
        <th>operacion</th>
	    </th>
	  </thead>

     <?php
  $sql= "SELECT * from carnet_patria";
  $result2=mysqli_query($conexion,$sql);

    while ($mostrar=mysqli_fetch_array($result2)) {
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
		       <button type="submit">Eliminar</button>
		     </form>
	      </td>
   </tr>
	    </tr>
	    <!-- Puedes añadir más filas con más datos aquí -->
	  </tbody>
    <?php
    }
  ?>

	</table>
</body>
</html>
