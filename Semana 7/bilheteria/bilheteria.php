
<!DOCTYPE html>
<!-- 
			*CABEÇALHO*

				- Aluno: Luiz Cláudio Santos Cruz Filho
				- Professor(a): Cibelle
				- Turma: 301 Informárica
				- Data: 06/11/2020 
-->

<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Aula 7 - Bilheteria - Programação WEB</title>

	<!-- Estilos Personalizados para esta página-->
	<style type="text/css">

    input{
      margin:5px;
    }

    input[type=text],input[type=number]{

      position: relative;
      border-color: #88e7f7;
      border-width: 2px;
      text-align: justify;
      font-size: 15px;
      font-family: cursive;
      width: 60%;
    
    }

    label{
      font-size: 16px;
      font-family: monospace;
      font-weight: 900;

    }

    .container-box{
      background-color: #c2bdff;  
      width: 500px;
      height: 450px;
      margin: auto;
      padding: 10px;
      box-shadow: 0 0 1em black;
      border-radius: 10px;
    }

    .box-header{
      background-color: #efedff;
    }

    .header-title{
      color: black;
      text-align: center;
      background-color: #6bff63;

    }

    .header-description{
      text-align: center;
      font-family: cursive;
      font-weight: 600;
      font-size: 14px;
    }

    .box-body{
      position: relative;
      background-color: #a199ff;

      padding: 10px;

    }

    .form-header{
      text-align: center;
      font-family: sans-serif;
      font-size: 18px;
      font-weight: 700;

    }

    .form-group {
      width: 100%;
      margin : 5px;
    }

    .btn{
      background-color: #ffe494;
      font-weight: 900;
      font-size: 15px;
      border-radius: 10px;
      transition: 0,8s;
      margin-bottom: 10px;
      display: inline;
    }

    .btn:hover{
      background-color: #ffc414;

    }

	</style>

</head>
<body>

  <div class="container-box">
    
    <div class="box-header">
      <h2 class="header-title">Bilheteria Digital</h2>
      <p class="header-description">Venha e adiquira seu ingresso para nossos enventos e aproveite nossa promoção para crianças</p>
    </div>

    <div class="box-body">
      <form action="" method="POST">
        <h3 class="form-header">Preco Integral da Entrada:  R$: 15,00</h3>
        <hr>
        <div class="form-group">
          <label>Informe seu nome:</label>
          <input type="text" name="nome" placeholder="Nome Completo..." required /><br>
        </div>

        <div class="form-group">
          <label>Informe sua idade:</label>
          <input type="number" name="idade" placeholder="Idade..." required /><br>
        </div>

        <div class="form-group">
          <label>Sexo:</label>
            <label>Masculino</label>
            <input type="radio" name="sexo" value="M" />
            <label>Feminino</label>
            <input type="radio" name="sexo" value="F" checked /><br>
        </div>

        <button class="btn" type="submit">Comprar</button><br>

        <input type="hidden" name="metodo" value="billheteria">
      </form>
        
        <?php 
          if(isset($_POST['idade'])){


            include('bilheteriaController.php');
            $preco = validaidade($_POST['idade']);

        ?>

        <div class="form-group">
          <label>Total a pagar</label>
          <input type="text" disabled value="<?php echo $preco; ?>" />
        </div>        
        
        <?php } ?>


    </div>


  </div>


</body>
</html>