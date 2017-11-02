<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Inicial</title>
<script>
$(document).ready(function(){


	$("#btn_guardar").click(function(){
		var guardar= "guardar";
		 $("#form").attr("action",guardar);
 });

	$("#btn_eliminar").click(function(){
		var eliminar= "elim";
		 $("#form").attr("action",eliminar);
 });
 $("#btn_actualizar").click(function(){
	 var actua	= "update";
		$("#form").attr("action",actua);
});
 $("#btn_consultar").click(function(){
	 var busca	= "consulta";
		$("#form").attr("action",busca);
});
});

</script>

<body>

<form action="" method="post" id="form">
  <label>Cedula  </label><input type="text" name="llave" placeholder="Aqui la Cedula"></input><br><br>
  <label>Nombres  </label><input type="text" name="nom" placeholder="nombres"></input><br><br>
  <label>Apellidos  </label><input type="text" name="ape" placeholder="apellidos"></input><br><br>
  <label>Marca  </label><input type="text" name="mar" placeholder="apellidos"></input><br><br>
  <label>Clase  </label><input type="text" name="cla" placeholder="apellidos"></input><br><br>
  <label>Color  </label><input type="text" name="col" placeholder="apellidos"></input><br><br>
  <label>Cilindraje  </label><input type="text" name="cil" placeholder="apellidos"></input><br><br>
  <label>Placa  </label><input type="text" name="pla" placeholder="apellidos"></input><br><br>
  <label>Aseguradora  </label><input type="text" name="ase" placeholder="apellidos"></input><br><br>
  <label>Nivel  </label><input type="text" name="niv" placeholder="apellidos"></input><br><br>

	<input type="submit" name="enviar" value="Guardar"  id="btn_guardar"></input>
	<input type="submit" name="eliminar" value="Eliminar"  id="btn_eliminar"></input>
	<input type="submit" name="actualizar" value="Actualizar"  id="btn_actualizar"></input>
	<input type="submit" name="buscar" value="Consulta Producto"  id="btn_consultar"></input>

</form>
</body>
</html>