<?php

// ---------- CONTROLADOR QUE IRÁ INTERAGIR COM A BASE DE DADOS -------------//


if(isset($_POST['metodo']))
{
	$metodo = $_POST['metodo'];

	switch ($metodo) {
		case 'cadastrar':
			cadastrar($_POST['nome'],$_POST['idade'],$_POST['doc'],$_POST['tel'],$_POST['end'],$_POST['sintomas'],$_POST['estado'],$_POST['especialidade']);
			break;

		case 'editar':
			editar($_POST['id'],$_POST['nome'],$_POST['idade'],$_POST['doc'],$_POST['tel'],$_POST['end']);
			break;

		case 'excluir':
			excluir($_POST['id']);
			break;
		
		default:
			# code...
			break;
	}

} else echo "<script language='javascript'>location.href='index.php'</script>";

//// ----------- FUNÇÕES A SEREM CHAMADAS EM FUNÇÃO DO input[name=metodo]


function cadastrar($nome,$idade,$doc,$tel,$end,$sintomas,$estado,$medico)
{
	//execução da inserção
	$conexao = mysqli_connect("200.143.198.37", "aluno33", "6xqy8ye8wmf");
	mysqli_select_db($conexao,"banco33");


	//TRATANDO OS CHECKBOX 
	$i_sintomas = count($sintomas);
	$i_estado = count($estado);

	$insere_sintomas = "SINTOMAS: ";
	for($i =0;$i < $i_sintomas  ;$i++){

		$insere_sintomas .= '- '.$sintomas[$i].' -';

	}
	$insere_estado = "ESTADOS: ";
	for($i =0;$i < $i_estado ;$i++){

		$insere_estado .= '- '.$estado[$i].' -';

	}

	mysqli_query($conexao,
		"INSERT INTO `Consultas`(`paciente`,`idade`, `documento`, `telefone`, `endereco`, `sintomas`, `estado`, `medico`) 

		VALUES ('".$nome."','".$idade."','".$doc."','".$tel."','".$end."','".$insere_sintomas."','".$insere_estado."','".$medico."')");

	header("Location: home.php?msg=ok");
	mysqli_close($conexao);
}


function editar($id,$nome,$idade,$doc,$tel,$end)
{
	//execução da inserção
	$conexao = mysqli_connect("200.143.198.37", "aluno33", "6xqy8ye8wmf");
	mysqli_select_db($conexao,"banco33");

	mysqli_query($conexao, "UPDATE Consultas SET paciente = '".$nome."', idade = '".$idade."', documento = '".$doc."', telefone = '".$tel."', endereco = '".$end."' WHERE id = '".$id."' ");



	mysqli_close($conexao);

	header("Location: home.php?msg=ok");

}


function excluir($id)
{	
	//execução da inserção
	$conexao = mysqli_connect("200.143.198.37", "aluno33", "6xqy8ye8wmf");
	mysqli_select_db($conexao,"banco33");

	mysqli_query($conexao, "DELETE FROM Consultas WHERE id = '".$id."' ");

	mysqli_close($conexao);

	header("Location: home.php?msg=ok");

}

?>