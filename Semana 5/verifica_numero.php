
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
	<title>Aula 5 - Verifica Número - Programação WEB</title>

	<!-- Estilos Personalizados para esta página-->
	<style type="text/css">

	</style>

</head>
<body>

	<center><h2>O número é ?</h2></center>
	<hr>

	<?php

		// -------- VERIFICAÇÃO ------------------- //

		// Inicializando acom valor aletório
		$n = mt_rand(-10,10);


		if($n == 0) 
		{
			echo "O ".$n." é um numero nulo"; 
		} else if($n > 0){
			echo "O ".$n." é um numero positivo"; 
		} else {
			echo "O ".$n." é um numero negativo"; 
		}

	?>

	<hr>
	
</body>
</html>