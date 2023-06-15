
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
	<title>Aula 5 - Cálculo do Preço Total - Programação WEB</title>

	<!-- Estilos Personalizados para esta página-->
	<style type="text/css">

	</style>

</head>
<body>

	<center><h2>Cálculo do Preço Total</h2></center>

	<?php

		// -------- CÁUCULO DAS OPERAÇÕES MATEMÁTICAS ------------------- //

		$precoUnit =  15.00;
		$qtd = 9;

		// TOTAL À PAGAR
		$total = $precoUnit * $qtd  ; 

		echo "Preço Unitário ".$precoUnit."<br> Quantidade ".$qtd. "<br> ";
		echo "Total a pagar é R$".$total.',00';

	?>

	

</body>
</html>