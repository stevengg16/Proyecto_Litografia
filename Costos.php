

<!DOCTYPE html>
<html>
<head>
<title>Pedidos</title>
<meta charset="UTF-8">
<link rel="StyleSheet" href="estilos.css" type="text/css">
</head>
<style>
      .recuadro {
      height: 30px;
      width: 15%;
      display: inline-block;
      margin: 10;
      padding: 10;
      box-sizing: border-box;
      text-align: ;
      border: 1px solid black;
      font-family:calibri;
      font-size:20px;
            margin-top: 30px;
      margin-left: 15px;
       text-align: center;
    }
    
    .rojo {
      background-color: #F2F2F2;
    }
    
    .azul {
      background-color: #AFEEEE;
    }
    
    .amarillo {
      background-color: #F2F2F2;
    }
  </style>
<body>
  <form action="costos2.php" method="post">
<img src="logo.png" style="float: right;">
  <strong><div class="recuadro rojo">Pedido</div></strong>
  <strong><div class="recuadro azul">Costos</div></strong>
  <strong><div class="recuadro amarillo">Entrega</div></strong>
<form action="registrardatos.php" method="post">
  <fieldset style="width: 450px; margin-top: 30px; left: 70px; margin-left: 50px;">

    <legend><strong><h1>Totales</strong></h1></legend>
    <strong><label>Cantidad</label></strong>
  <input type="text" name="cantidad" size="30"><br> 
  <br>
  <strong><label>Subtotal</label></strong>
  <input type="text" name="subtotal" size="30"><br>
  <br>
  <strong><label>Total Impuestos</label></strong>
  <input type="number" name="total_impuestos" size="12"><br>
  <br>
  <strong><label>Total</label></strong>
  <input type="text" name="total" size="30">
</fieldset><br><br>
<div id="contenedorform">
<form method="post" action="#">
<div style="margin-left: 50px;">
<br>
<div style="margin-left: 450px">
  <input type="submit" value="Siguiente">