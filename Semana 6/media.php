
<!DOCTYPE html>
<!-- 
			*CABEÇALHO*

				- Aluno: Luiz Cláudio Santos Cruz Filho
				- Professor(a): Cibelle
				- Turma: 301 Informárica
				- Data: 30/10/2020 
-->



<html>
<head>
	<meta charset="utf-8">
	<title>Aula 6 - Programação WEB</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
	

<body class="hold-transition sidebar-mini sidebar-collapse">
<div class="wrapper"> 
    

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


      	<div class="card card-orange">

      		<div class="card-header">
      			<h2 class="card-title">Verificação Da média do Aluno</h2>
      		</div>

      		<div class="card-body">
      			<form method="POST">

      			<div class="row">
      				<div class="col-12">
      					<div class="form-group">
      						<label>Informe o nome do aluno</label>
      						<input class="form-control" name="nome" required/>
      					</div>
      				</div>

      				<div class="col-6">
      					<div class="form-group">
      						<label>Informe a nota da P1</label>
      						<input class="form-control" step=any name="p1" required/>
      					</div>
      				</div>

      				<div class="col-6">
      					<div class="form-group">
      						<label>Informe a nota da P1</label>
      						<input class="form-control" step=any name="p2" required/>
      					</div>
      				</div>

      			</div>

      		</div>

      		<div class="card-footer">
      			<button type="submit" class="btn btn-success">Avaliar Aluno</button>
      		</div>
      	</form>
      	</div>


      <!-- PROCESSAMENTO PHP -->

      <?php if(isset($_POST['nome'])) { 

      	//Código PHP

      	$nome = $_POST['nome'];
      	$p1 = str_replace(',','.',$_POST['p1']);
      	$p2 = str_replace(',','.',$_POST['p2']);


      	$media = ($p1 + $p2)/2;

      	if($media > 6.0){
      		$situação = "Aprovado";
      	} else $situação = "Reprovado";



      ?>

      <div class="card card-info">

      	<div class="card-body">
      		<div class="row">
      			<div class="col-12">
      				<div class="form-group">
      					<input class="form-control" disabled value="<?php echo 'O Aluno '.$nome.' ficou com média '.$media.' e se encontra '.$situação.' nesse período' ; ?>"/>
      				</div>
      			</div>
      		</div>
      	</div>

      </div>

      <?php } ?>



      </div>
    </section>
  
  
</div>

</body>

</body>
</html>