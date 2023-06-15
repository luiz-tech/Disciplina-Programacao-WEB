
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

	<center><h2>As 4 Operações Básicas</h2></center>

	<?php

		// -------- CÁUCULO DAS OPERAÇÕES MATEMÁTICAS ------------------- //
		$n1 =  10;
		$n2 = 2;

		// ADIÇÃO //
		$soma = $n1 + $n2;

		// SUBTRAÇÃO //
		$diferenca = $n1 - $n2; 

		// PRODUTO //
		$produto = $n1 * $n2  ; 

		// COCIENTE  //
		$cociente = $n1 / $n2 ; 

	?>

	<h3>Resultados:</h3>
	<ul>	
		<li>A soma de <?php echo $n1.' e '.$n2. ' é igual a '.$soma ?></li>
		<li>A diferença de <?php echo $n1.' e '.$n2. ' é igual a '.$diferenca ?></li>
		<li>O produto entre <?php echo $n1.' e '.$n2. ' é igual a '.$produto ?></li>
		<li>O cociente de <?php echo $n1.' e '.$n2. ' é igual a '.$cociente ?></li>
	</ul>

	<hr>

</body>
</html>