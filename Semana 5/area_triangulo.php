
<!DOCTYPE html>
<!-- 
			*CABEÇALHO*

				- Aluno: Luiz Cláudio Santos Cruz Filho
				- Professor(a): Cibelle
				- Turma: 301 Informárica
				- Data: 26/10/2020 
-->

<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Aula 5 - Área do Triângulo - Programação WEB</title>

	<!-- Estilos Personalizados para esta página-->
	<style type="text/css">

	</style>

</head>
<body>

	<center><h2>Área do Triângulo</h2></center>

	<?php

		// -------- CÁUCULO DA ÁREA DO RETÂNGULO ------------------- //
		$base =  10;
		$altura = 20;

		$area = ( $base*$altura ) / 2 ;

		echo "Um triângulo com base ='".$base."' m e altura ='".$altura."' m
		<br>";

		echo "Possui área : ".$area." m<sup>2</sup>";

	?>

</body>
</html>