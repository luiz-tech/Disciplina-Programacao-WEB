<?php
//------- Controlador Responsavel pela Conexão com o banco de dados ---------//

print_r($_POST);

$codigo = $_POST['codigo'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];


//Endereco + Usuario + Senha
$conexao = mysqli_connect("200.143.198.37", "aluno33", "6xqy8ye8wmf");

mysqli_select_db($conexao,"banco33");

//Execução do Consulta
mysqli_query($conexao,"INSERT INTO Produtos (codigo,nome,preco,quantidade)
		VALUES('".$codigo."','".$nome."','".$preco."','".$quantidade."')");

header("Location: produto.php?msg=ok");
?>