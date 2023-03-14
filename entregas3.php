<!DOCTYPE html>
<html>
<head>
<title>Entregas</title>
<meta charset="UTF-8">
<link rel="StyleSheet" href="estilos.css" type="text/css">
</head>
<body><style>
      .recuadro {
      height: 30px;
      width: 13%;
      display: inline-block;
      margin: 10;
      padding: 10;
      box-sizing: content-box;
      text-align: ;
      border: 1px solid black;
        font-family:calibri;
      font-size:20px;
    }
    
    .rojo {
      background-color: #F2F2F2;
    }
    
    .verde {
      background-color: #F2F2F2;
    }
    
    .azul {
      background-color: #F2F2F2;
    }
    
    .amarillo {
      background-color: #AFEEEE;
    }
  </style>
<body>
	     <form action="entregass.php" method="post">
	<img src="logo.png" style="float: right;">
  <strong><div class="recuadro rojo">Pedido</div></strong>
  <strong><div class="recuadro verde">Producto</div></strong>
  <strong><div class="recuadro azul">Costos</div></strong>
  <strong><div class="recuadro amarillo">Entrega</div></strong>
  <style>
    .recuadro {
      height: 25px;
      width: 14%;
      display: inline-block;
      margin: 100;
      padding: 100;
      box-sizing: border-box;
      text-align: center;
      border: 1px solid black;
    }
    
    .cafe {
      background-color: #AFEEEE ;
    }
  #contenedorform {
  width:500px; 
  margin-left:100px; 
  margin-top:10px;
  background-color:#blue;
  border:1px solid #CCC;
  padding:10px 0 10px 0;
}

#contenedorform form label {
  width:113px; 
  float:left;
font-family:calibri;
  font-size:18px;
}
  </style>
<h2><strong><div class="recuadro cafe">Entregas</div></strong></h2>
<div id="contenedorform">
<form method="post" action="#">
<div style="margin-left: 30px;">
<strong><label>Código interno</label></strong>
<input type="text" name="codigo_interno" size="15"><br><br>
<strong><label>Fecha Salida</label></strong>
<input type="date" name="fecha_salida" size="20"><br><br>
<strong><label>Recibe</label></strong>
<input type="text" name="Recibe" size="30">
<h3>Dirección</h3>
	<strong><label>Departamento</label></strong>
	<select name="departamento">
		<option value="Amazonas">Amazonas</option>
		<option value="Antioquia">Antioquia</option>
		<option value="Arauca">Arauca</option>
		<option value="Atlántico">Atlántico</option>
		<option value="Bogotá">Bogotá</option>
		<option value="Bolívar">Bolívar</option>
		<option value="Boyacá">Boyacá</option>
		<option value="Caldas">Caldas</option>
		<option value="Caquetá">Caquetá</option>
		<option value="Casanare">Casanare</option>
		<option value="Cauca">Cauca</option>
		<option value="Cesar">Cesar</option>
		<option value="Chocó">Chocó</option>
		<option value="Córdoba">Córdoba</option>
		<option value="Cundicamarca">Cundicamarca</option>
		<option value="Guainía">Guainía</option>
		<option value="Guaviare">Guaviare</option>
		<option value="Huila">Huila</option>
		<option value="La Guajira">La Guajira</option>
		<option value="Magdelana">Magdelana</option>
		<option value="Meta">Meta</option>
		<option value="Nariño">Nariño</option>
		<option value="Norte de Santander">Norte de Santander</option>
		<option value="Putumayo">Putumayo</option>
		<option value="Quindío">Quindío</option>
		<option value="San Andrés y Providencia">San Andrés y Providencia</option>
		<option value="Santander">Santander</option>
		<option value="Sucre">Sucre</option>
		<option value="Tolima">Tolima</option>
		<option value="Valle del Cauca">Valle del Cauca</option>
		<option value="Vaupés">Vaupés</option>
		<option value="Vichada">Vichada</option>
	</select><br><br>
		<strong><label>Ciudad</label></strong>
	<input type="text" name="ciudad" size="8"><br><br>
	<strong><label>Código Postal</label></strong>
	<input type="text" name="codigo_postal" size="8"><br><br>
	<strong><label>Dirección fisica</label></strong>
	<input type="text" name="direccion_fisica" size="30">
	<br>
	<br>
</div>
<div style="text-align: right;">
 <input type="submit" value="Guardar">

</body>
</html>