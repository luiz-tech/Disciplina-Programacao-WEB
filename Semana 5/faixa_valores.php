
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
	<title>Aula 5 - Faixa de Valores - Programação WEB</title>

	<!-- Estilos Personalizados para esta página-->
	<style type="text/css">

	</style>

</head>
<body>

	<center><h2>Faixa de valores</h2></center>
	<hr>

	<?php

		// -------- VERIFICANDO A FAIXA DOS NÚEMROS ------------------- //

		// Inicializando as variáveis
		$n = mt_rand(-100, 5000);

		echo "O número ".$n." se encontra ";

		if($n >= 0 and $n <= 100){

			echo "entre0 e 100";

		} else if($n >= 101 and $n <= 1000){
			echo "entre 101 e 1000";

		} else if($n >= 101 ) {
			echo "entre os maiores os numeros maiores que 1000";
		} else {
			echo "em nenhuma das faixas existentes";
		}

	?>

	
	<hr>


</body>
</html>