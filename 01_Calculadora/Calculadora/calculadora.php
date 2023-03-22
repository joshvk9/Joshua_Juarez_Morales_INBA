<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Claculadora</title>
	<link rel="stylesheet" href="../css/diseño.css">
</head>
<br>
<br>
<body>
<form method="get" action="calculadora.php">
		<input type="text" name="operando1">
		<select name="operador">
			<option value="+">+
			</option>
			<option value="-">-
			</option>
			<option value="*">*
			</option>
			<option value="/">/
			</option>
		</select>
		<input type="text" name="operando2">
		<input type="submit" value="enviar">
	</form>
		<?php
	$operando1 = $_GET['operando1'];
	$operando2 = $_GET['operando2'];
	$operador = $_GET['operador'];
	
	if($operador == "+"){
		$solucion = $operando1 + $operando2;
	}else if($operador == "-"){
		$solucion = $operando1 - $operando2;
	}else if($operador == "*"){
		$solucion = $operando1 * $operando2;
	}else if($operador == "/"){
		$solucion = $operando1 / $operando2;
	}
	echo "La solución es: ".$solucion;
?>
	</form>
	<br>
	<br>
	<thead>
		 <tr>
		<th><a href="..//menuprincipal.php"><span>Menu Principal </span></a></th>
        </tr>
	</thead>
</body>
</html>

