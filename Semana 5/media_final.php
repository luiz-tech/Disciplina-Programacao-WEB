
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
	<title>Aula 5 - Cálculo da Média Final - Programação WEB</title>

	<!-- Estilos Personalizados para esta página-->
	<style type="text/css">

	</style>

</head>
<body>

	<center><h2>Média do Aluno</h2></center>
	<hr>

	<?php

		// -------- CÁLCULO DA MÉDIA FINAL ------------------- //

		// Inicializando as variáveis
		$n1 = 8.0;

		$n2 = 6.5;

		$media = ($n1 + $n2) / 2;



		if($media > 6.0) 
			{	
				$situacao = '<b style="color:green;">Aprovado</b>';
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
			<th>Situação</th>
		</tr>
		</thead>

		<tbody>
		<tr align="center">
			<td>Luiz Cláudio</td>
			<td><?php echo $n1;?></td>
			<td><?php echo $n2;?></td>
			<td><?php echo $media;?></td>
			<td><?php echo $situacao;?></td>
		</tr>
		</tbody>

	</table>

	<hr>

	

</body>
</html>