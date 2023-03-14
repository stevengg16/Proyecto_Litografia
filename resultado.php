<!DOCTYPE html>
<html>
<head>
  <title>Resultados de la consulta</title>
  <meta charset="UTF-8">
</head>
<body>
  <?php

    $con = new mysqli("localhost", "Litografia", "Certi123", "Proyecto");

    if ($con->connect_error) {
      die("Error de conexión: " . $con->connect_error);
    }

    if (!empty($_POST['nombre'])) {
      // Recibir nombre del formulario
      $nombre = $_POST['nombre'];
      $Apellidos = $_POST['Apellidos'];
      $Identificacion = $_POST['identificacion'];
      $codigo_interno = $_POST['codigo_interno'];
      $articulo = $_POST['articulo'];
      $fecha_ingreso = $_POST['fecha_ingreso'];

      $consulta = $con->prepare("SELECT * FROM pedidos WHERE nombre = ? OR Apellidos = ? OR Identificacion = ? OR codigo_interno = ? OR articulo = ? OR fecha_ingreso = ?");

      $consulta->bind_param("ssssss", $nombre, $Apellidos, $Identificacion, $codigo_interno, $articulo, $fecha_ingreso);

      $consulta->execute();

      $resultado = $consulta->get_result();

      if ($resultado->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>Nombre</th><th>Apellidos</th><th>Identificacion</th><th>codigo_interno</th><th>articulo</th><th>fecha_ingres</th></tr>";
        while ($fila = $resultado->fetch_assoc()) {
          echo "<tr><td>" . $fila["nombre"] . "</td><td>" . $fila["Apellidos"] . "</td><td>" . $fila["Identificacion"] . "</td><td>" . $fila["codigo_interno"] . "</td><td>" . $fila["articulo"] . "</td><td>" . $fila["fecha_ingreso"] . "</td></tr>";
        }
        echo "</table>";
      } else {
        echo "No se encontraron resultados.";
      }
      
      // Cerrar consulta
      $consulta->close();
    } else {
      echo "Debe ingresar un nombre.";
    }

    // Cerrar conexión
    $con->close();
  ?>
</body>
</html>
