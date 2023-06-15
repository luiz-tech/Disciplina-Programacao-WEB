<!DOCTYPE html>
<!-- 
      *CABEÇALHO*

        - Aluno: Luiz Cláudio Santos Cruz Filho
        - Professor(a): Cibelle
        - Turma: 301 Informárica
        - Data: 16/11/2020 
-->

<html style="height: auto;"><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aula 8 - Produto + Banco de dados</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

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

  <!-- Main Sidebar Container -->
  <aside style="background-color: #05031b;" class="main-sidebar sidebar-dark-primary elevation-4">

      <span class="brand-text font-weight-light">IFF</span>
  

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="iff.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Luiz Cláudio Santos c. Filho</a>
        </div>
      </div>

  
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 1246.8px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12 text-center">
            <h1>Cadastre seu Produto</h1>
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
            <div class="card card-info">

              <div class="card-header">
                <h3 class="card-title">Ficha de Cadastro</h3>
              </div>

              <div class="card-body">
              <form action="produtoController.php" method="POST">
              <div class="row">
              <div class="col-lg-6">
                <div class="form-gruop">
                  <label>Nome do Produto</label>
                  <input type="text" name="nome" class="form-control" placeholder="informe o nome..." required>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="form-gruop">
                  <label>Código do Produto</label>
                  <input type="text" name="codigo" class="form-control" placeholder="0123456ABCDEF" required>
                </div>
              </div>


              <div class="col-lg-6">
                <div class="form-gruop">
                  <label>Estoque/Quantidade</label>
                  <input type="number" name="quantidade" class="form-control" placeholder="20" reuqired>
                </div>
              </div>

              <div class="col-lg-6">
               <label>Informe o Preço Unitário</label>
               <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">R$</span>
                  </div>
                  <input type="text" name="preco" class="form-control" placeholder="45,00" required>
                </div>

              </div>
              <button  type="submit" class="btn btn-success col-12">Cadastrar Produto</button>

            </div>
          </form>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">

                <?php if(isset($_GET['msg'])){ ?>

                  <div style="background-color: #beff9c;" class="alert text-center" role="alert">
                    <b style="font-size: 15px; font-family: cursive;">Produto foi Cadastrado com sucesso no sistema !!!</b>
                  </div>

                <?php } ?>

              </div>


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