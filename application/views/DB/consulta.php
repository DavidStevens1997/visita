<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Inicial</title>


<body>

<form action="primero" method="post">
  <h1>Esta es la consulta</h1>
</form>

<?php foreach($completo as $valor): ?>
	<table border="1">
		<tr><td><h3>cedula</h3></td><td><h3>nombres</h3></td><td><h3>apellidos</h3></td></tr>
<?php
	echo '<tr><td>'.$valor['cedula'].'</td><td>'.$valor['nombres'].'</td><td>'.$valor['apellidos'].'</td></tr>';
?>
<?php endforeach;?>


</table>
</body>
</html>
