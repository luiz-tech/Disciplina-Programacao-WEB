
<!DOCTYPE html>
<!-- 
      *CABEÇALHO*

        - Aluno: Luiz Cláudio Santos Cruz Filho
        - Professor(a): Cibelle
        - Turma: 301 Informárica
        - Data: 23/11/2020 
-->

<html style="height: auto;"><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aula 9 - Carro + Banco de dados</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../adminlte.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="sidebar-mini sidebar-collapse" style="height: auto;">
<div class="wrapper"width: 100%;">

  <?php include('menu.php');?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 1246.8px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center">
            <h1>Edição do Registro do Carro</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
 
          <div class="col-md-12">
            
            <!-- Input addon -->
            <div class="card">

              <div class="card-header bg-purple">
                <h3 class="card-title">Ficha de Edição</h3>
              </div>

              <div class="card-body">

              <form action="" method="POST">

              <div class="row">
              <div class="col-lg-6">
                <div class="form-gruop">
                  <label>Carro a ser editado (código)</label>
                  <input type="text" name="codigo" class="form-control" >
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-gruop">
                  <label>Informe uma nova Placa do veículo</label>
                  <input type="text" name="placa" class="form-control" placeholder="ABC-0123" maxlength="7">
                </div>
              </div>


              <button  type="submit" class="btn btn-success mt-3 col-12">Editar Carro</button>

              </div>
            </div>
          </form>
              </div>
              <!-- /.card-body -->

              	<?php

              	if(isset($_POST['codigo'])){

				$codigo = $_POST['codigo'];
				$placa = $_POST['placa'];

				//Endereco + Usuario + Senha
				$conexao = mysqli_connect("200.143.198.37", "aluno33", "6xqy8ye8wmf");

				mysqli_select_db($conexao,"banco33");

				//Execução do Consulta
				mysqli_query($conexao,"UPDATE Carros SET placa = '$placa' WHERE codigo = '$codigo'");

				mysqli_close($conexao);

				echo "<script language='javascript'>location.href='alteracarro.php?msg=ok'</script>";

				}

              	?>

              	<?php if(isset($_GET['msg'])) { ?>

              		<div class="alert  alert-light text-center">
              			<b class='text-success'>Registro de Placa Alterado com Sucesso !!!</b>
              		</div>

              	<?php }?>

            </div>
            <!-- /.card -->

          </div>
          <!--/.col 12 -->
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright © 2020 Luiz Cláudio Santos Cruz Filho </strong> 
  </footer>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="../../plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>


</body></html>
