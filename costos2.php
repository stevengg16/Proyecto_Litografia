<html>
<html>

<head>
  <title>costos</title>
</head>

<body>
<?php
$conexion = mysqli_connect("localhost", "Litografia", "Certi123", "proyecto") or die("Problemas con la conexión");


$cantidad = isset($_POST['cantidad']) ? $_POST['cantidad'] : '';
$subtotal = isset($_POST['subtotal']) ? $_POST['subtotal'] : '';
$total_impuestos = isset($_POST['total_impuestos']) ? $_POST['total_impuestos'] : '';
$total = isset($_POST['total']) ? $_POST['total'] : '';

mysqli_query($conexion, "INSERT INTO costos(cantidad, subtotal, total_impuestos, total) VALUES ('$cantidad', '$subtotal', '$total_impuestos', '$total')")
    or die("Problemas en el insert" . mysqli_error($conexion));

mysqli_close($conexion);

if ($_REQUEST['direccion']<>"z80")
  header("Location: Entregas.php");
exit;
?>