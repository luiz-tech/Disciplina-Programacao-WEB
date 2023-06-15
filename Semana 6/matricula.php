
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
      			<h2 class="card-title">Matricula na InfoTech</h2>
      		</div>

      		<div class="card-body">
      			<form method="POST">

      			<div class="row">
      				<div class="col-6">
      					<div class="form-group">
      						<label>Informe o nome do aluno</label>
      						<input class="form-control" name="nome" required/>
      					</div>
      				</div>

                              <div class="col-6">
                                    <div class="form-group">
                                          <label>Escolha o curso</label>
                                          <select class="form-control" name="curso">

                                                <option value="">-- Escolha o curso --</option>
                                                <option value="C">C</option>
                                                <option value="C+">C++</option>
                                                <option value="JV">Java</option>
                                                <option value="JS">JavaScrip</option>
                                                <option value="HT">HTML</option>
                                                <option value="CS">CSS</option>
                                                <option value="PH">PHP</option>

                                          </select>
                                    </div>
                              </div>

      				<div class="col-6">
                                    <label>Turno</label>
      					<div class="form-check">
                                          <label>Manhã</label>
                                          <input type="radio" name="turno" value="M" checked><br>
                                          <label>Tarde</label>
                                          <input type="radio" name="turno" value="T"><br>
                                          <label>Noite</label>
                                          <input type="radio" name="turno" value="N"> 
      						
      					</div>
      				</div>

      				<div class="col-6">
      					<label>Disciplinas</label>
                                    <div class="form-check">
                                          <label>Algorítimo</label>
                                          <input type="checkbox" name="disciplinas" value="ALG" checked><br>
                                          <label>Lógica Desenvolvimento</label>
                                          <input type="checkbox" name="disciplinas" value="LDV"><br>
                                          <label>Banco de Dados SQL</label>
                                          <input type="checkbox" name="disciplinas" value="SQL"><br>
                                          <label>Desing de Interfaces</label>
                                          <input type="checkbox" name="disciplinas" value="DIF"><br>
                                          <label>Empreendeorismo Tecnológico</label>
                                          <input type="checkbox" name="disciplinas" value="EMP"> 
                                          
                                    </div>
      				</div>

      			</div>

      		</div>

      		<div class="card-footer">
      			<button type="submit" class="btn btn-success">Matricular</button>

                        <button type="reset" class="btn btn-danger">Cancelar</button>
      		</div>
      	</form>
      	</div>


      <!-- PROCESSAMENTO PHP -->

      <?php if(isset($_POST['nome'])) { 

      	//Código PHP

      	$nome = $_POST['nome'];
      	$turno = $_POST['turno'];
      	$curso = $_POST['curso'];
            $disciplinas = $_POST['disciplinas'];

           
      ?>

      <div class="card card-info">

      	<div class="card-body">
      		<div class="row">
      			<div class="col-12">
      				<div class="form-group">
                                    <?php //print_r($_POST); ?>

      					<?php if($turno == 'M') { ?>
                                          <b class="text-success">Matricula efetuada com sucesso.</b>
                                    <?php } else if($turno == 'T'){ ?>
                                          <i>Turno indisponível no momento.</i>
                                    <?php } else { ?>
                                          <b>Matricula será confirmada em 30 dias</b>

                                    <?php } ?>
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