<html>
<html>

<head>
  <title>Pedidos</title>
</head>

<body>
<?php
$conexion = mysqli_connect("localhost", "Litografia", "Certi123", "proyecto") or die("Problemas con la conexión");

$Nombre = isset($_POST['Nombre']) ? $_POST['Nombre'] : '';
$Apellidos = isset($_POST['Apellidos']) ? $_POST['Apellidos'] : '';
$Identificacion = isset($_POST['Identificacion']) ? $_POST['Identificacion'] : '';
$Correo = isset($_POST['Correo']) ? $_POST['Correo'] : '';
$Departamento = isset($_POST['Departamento']) ? $_POST['Departamento'] : '';
$Ciudad = isset($_POST['Ciudad']) ? $_POST['Ciudad'] : '';
$codigo_postal = isset($_POST['codigo_postal']) ? $_POST['codigo_postal'] : '';
$direccion_fisica = isset($_POST['direccion_fisica']) ? $_POST['direccion_fisica'] : '';

$codigo_interno = isset($_POST['codigo_interno']) ? $_POST['codigo_interno'] : '';
$articulo = isset($_POST['articulo']) ? $_POST['articulo'] : '';
$Cantidad = isset($_POST['Cantidad']) ? $_POST['Cantidad'] : '';
$caracteristicas = isset($_POST['caracteristicas']) ? $_POST['caracteristicas'] : '';
$dimensiones = isset($_POST['dimensiones']) ? $_POST['dimensiones'] : '';
$fecha_ingreso = isset($_POST['fecha_ingreso']) ? $_POST['fecha_ingreso'] : '';
$observaciones = isset($_POST['observaciones']) ? $_POST['observaciones'] : '';



mysqli_query($conexion, "INSERT INTO pedidos(Nombre, Apellidos, Identificacion, Correo, Departamento, Ciudad, codigo_postal, direccion_fisica, codigo_interno, articulo, Cantidad, caracteristicas, dimensiones, fecha_ingreso, observaciones) VALUES ('$Nombre', '$Apellidos', '$Identificacion', '$Correo', '$Departamento', '$Ciudad ', '$codigo_postal', '$direccion_fisica', '$codigo_interno', '$Cantidad', '$articulo', '$caracteristicas', '$dimensiones', '$fecha_ingreso', '$observaciones')")
    or die("Problemas en el insert" . mysqli_error($conexion));

mysqli_close($conexion);

if ($_REQUEST['direccion']<>"z80")
  header("Location: Costos.php");
exit;
?>


