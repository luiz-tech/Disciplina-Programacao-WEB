
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
	<title>Aula 5 - Cálculo da Média Final + Frequência - Programação WEB</title>

	<!-- Estilos Personalizados para esta página-->
	<style type="text/css">

	</style>

</head>
<body>

	<center><h2>Média do Aluno + Frequencia </h2></center>
	<hr>

	<?php

		// -------- CÁLCULO DA MÉDIA FINAL + FREQUÊNCIA ------------------- //

		// Inicializando as variáveis
		$n1 = mt_rand(0.0,10.0);

		$n2 = mt_rand(0.0,10.0);

		$frequencia = mt_rand(0,100);

		$media = ($n1 + $n2) / 2;



		if($media > 6.0 and $frequencia > 75 ) 
			{	
				$situacao = '<b style="color:blue;">Aprovado</b>';
			}
			else {
				$situacao = '<i style="color:red;">Reporvado</i>';
			}

	?>

	<table border="1">
		<thead>
		<tr>
			<th>Aluno</th>
			<th>1º Bimestre</th>
			<th>2º Bimestre</th>
			<th>Média Final</th>
			<th>Frequência Total</th>
			<th>Situação</th>
		</tr>
		</thead>

		<tbody>
		<tr align="center">
			<td>Luiz Cláudio</td>
			<td><?php echo $n1;?></td>
			<td><?php echo $n2;?></td>
			<td><?php echo $media;?></td>
			<td><?php echo $frequencia.'%';?></td>
			<td><?php echo $situacao;?></td>
		</tr>
		</tbody>

	</table>

	<hr>

	

</body>
</html>