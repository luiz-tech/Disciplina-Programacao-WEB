
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
	<title>Aula 5 - Compara Números - Programação WEB</title>

	<!-- Estilos Personalizados para esta página-->
	<style type="text/css">

	</style>

</head>
<body>

	<center><h2>Os números são ?</h2></center>
	<hr>

	<?php

		// -------- VERIFICANDO IGUALDADE DOS NÚEMROS ------------------- //

		// Inicializando as variáveis
		$n1 = mt_rand(0,10);

		$n2 = mt_rand(0,10);

		echo "Os numeros ".$n1." e ".$n2." são ";
		if($n1 == $n2) 
			{	
				echo 'iguais';
			}
			else {
				echo 'distintos';
			}

	?>

	
	<hr>


</body>
</html>