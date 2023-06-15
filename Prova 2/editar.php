<!DOCTYPE html>
<!-- 
			*CABEÇALHO*
				-- AVALIAÇÃO DA 2ª FASE --

				- Aluno: Luiz Cláudio Santos Cruz Filho
				- Professor(a): Cibelle
				- Turma: 301 Informárica
				- Data: 30/11/2020 
-->

				<!------------

					PÁGINA PRINCIPAL 

				--------------->

<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Prova 2ª Fase - Programação WEB</title>

	<!-- Font-Awnsome-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
		
				img {
			position: relative;
			width: 190px;
			height: 150px;
			border-radius: 100%;
			opacity: 0.6;
			transition: opacity 1s;
		}

		img:hover {
			opacity: 1;
		}


		p {
			text-indent: 20px;
			margin-top: 20px;
			margin-bottom: 10px;
		}

		a {
			color: white;
			text-decoration: none;
		}

		.main {
			width: auto;
			height: auto;
			background-color: #d1cef5;
			overflow-x: hidden;
		}

		.header {
			width: auto;
			height: auto;
			background-color: white;
			text-align: left;
			font-family: cursive;
			margin-bottom: 20px;
			padding: 5px;
		}

		.menu-left {
			width: 20%;
			height: auto;
			position: relative;
			float: left;
			background-color: #a8dbff;
			display: inline-block;
			margin-right: 19px;
			padding-top: 5px;
			padding-bottom: : 5px;
		}

		.table {
			position: relative;
			text-align: center;
			
		}

		.content {
			width: 77%;
			height: auto;
			position: relative;
			background-color: #ddffd9;
			display: inline-block;
			padding: 5px;
			margin-bottom: 10px;

		}

		.content-header {
			font-family: sans-serif;

		}

		.content-title {
			font-family: cursive;
			background-color: #bababa;
			border-radius: 50%;
			opacity: 0.8;
			padding: 5px;
			text-align: center
		}

		.footer {
			display: block;
			width: 100%;
			height: auto;
			float: left;
			background-color: white;
			margin-top: 20px;
			padding: 5px;
			text-align: justify;

		}

		.navbar{
			position: relative;
			float: right;
			transition: 1s
			background-color: #3d36c2;
		}

		li {
			position: relative;
			display: inline-block;
			width: auto;
			height: auto;
			list-style: none;
			text-decoration: none;
			text-align: center;
			background-color: #bababa;
			padding: 10px;
			margin: 5px;
			transition: 1s;

		}

		li:hover {
			background-color: black;
			color: white;
			text-decoration: underline;

		}

		label {
			text-decoration: none;
			opacity: 0.8;
			font-weight: bold;
			font-size: 17px;
		}

		textarea {
			position: relative;
			width: 90%

		}
		.form {
			padding: 10px;
		}

		.form-control {
			position:  relative;
			border-color: #88e7f7;
			border-width: 3px;
			padding: 7px;
			margin:  5px;
			border-radius: 10%;
			width: 200px;
			text-align: justify;
		    font-size: 17px;
		    font-family: cursive;
		}

		.form-check {
			position: relative;
			display: block;
			float: left;
			width: 45%;
			height: auto;
			margin : 5px;
			padding: 10px;
			text-indent: 10px;
		}

		.form-check-title {
			background-color: #bababa;
			font-size: 20px;
			display: block;
			text-align: center;
		}

		.form-group-button {
			position: relative;
			float: left;
			width: 95%;
			height: auto;
			background-color: #b3ffb3;

			margin: 10px;
			padding: 10px;

			text-align: center;
		}

		.btn {
			font-size: 17px;
			font-family: cursive;
			color: white;
			text-align: center;
			padding: 7px;
			border-radius: 25%;
			margin-right: 10px;
			margin-left: 10px;
		}

		.btn-trash {
			background-color: #ff3636;
		}

		.btn-submit {
			background-color: #36ff4a;
		}


		input[type=radio], input[type=checkbox] {
			margin-bottom: 10px;
		}

		input#end {
			width: 528px;
		}

		input#old {
			width: 70px;
		}

		input#nome {
			width: 400px;
		}


	</style>

</head>
<body class="main">

<?php include('menu.php'); ?>

		<!-- MEIO DA PÁGINA ONDE CONTERÁ AS INFORMAÇÕES -->
		<div class="content">
			<div class="content-header">
				<h2 class="content-title">Edite aqui os Dados</h2>

				<form class="form" action="controller.php" method="POST">
					<input type="hidden" name="metodo" value="editar">
					<input type="hidden" name="id" value="<?php echo $_POST['id']?>">

					
					<label>Nome completo:</label>
					<input id="nome" class="form-control" type="text" name="nome" placeholder="Informe seu nome completo" value="<?php echo $_POST['nome']?>" required><br>

					<label>Idade:</label>
					<input id="idade" class="form-control" type="number" name="idade" placeholder="18"
					value="<?php echo $_POST['idade']?>" required>

					<label>Número do CPF ou RG:</label>
					<input class="form-control" type="number" name="doc" placeholder="Informe o numero do documento (somente números)" value="<?php echo $_POST['documento']?>"
					required>

					<label>Contato</label>
					<input class="form-control" type="text" name="tel" placeholder="+ddi(ddd)XXXXX-XXXX"
					required value="<?php echo $_POST['telefone']?>"><br>

					<label>Endereço Completo:</label>
					<input id="end" class="form-control" type="text" name="end" placeholder="Informe seu endereço completo"
					value="<?php echo $_POST['endereco']?>" required>

					<hr>

					<div class="form-group-button">
						<button class="btn btn-trash" type="reset">Descartar</button>
						<button class="btn btn-submit" type="submit">Agendar</button>
					</div>
				</form>

			</div>
		</div>


	<div class="footer">
		<p><i>Prova da 2ª Fase - IFF - Informática Integrado ao Enino Médio<i><br>

		<p>&copy; Luiz Cláudio @ V. 1.0</p>
	</div>


</body>
</html>