
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

    input[type=text],input[type=number],select{

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

    table{
      border: 1px solid black;
      width: 100%;
      font-weight: 500px;
      font-size: 16px;
      text-align: center;
      background-color: #b8f1ff;
    }

    td{
      padding: 5px;
    }

    .container-box{
      background-color: #c2bdff;  
      width: 600px;
      height: 450px;
      margin: auto;
      padding: 10px;
      box-shadow: 0 0 1em black;
      border-radius: 10px;
      overflow: auto
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
      display: inline-block;
    }

    .form-group-min{
      width:  150px
      margin : 5px;
      display: inline-block;
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
      <h2 class="header-title">Cadastro de Compras</h2>
      <p class="header-description">Aqui você pode comprar os produtos de seu interesse em sair de casa e por um preço totalmente em conta</p>
    </div>

    <center>
      <img src="robox.png">
    </center>
    <hr>

     <div class="box-body">
      <form action="" method="POST">
        <div class="form-group">
          <label>Nome do Produto:</label>
          <input type="text" name="nome" placeholder="Informe o nome do produto..." required /><br>
        </div>

        <div class="form-group">
          <label>Código do Produto:</label>
          <input type="number" name="codigo" placeholder="123456" required /><br>
        </div>

        <div class="form-group">
          <label>Quantidade:</label>
          <input type="number" name="quantidade" placeholder="5" required /><br>
        </div>

        <div class="form-group">
          <label>Preço:</label>
          <input type="text" name="preco" placeholder="20,00" required /><br>
        </div>

        <div class="form-group-min">
          <label>Compra será:</label>
            <label>Atacadista</label>
            <input type="radio" name="modalidade" value="A" />
            <label>Varejista</label>
            <input type="radio" name="modalidade" value="V" checked /><br>
        </div>

        <div class="form-group-min">
          <label>Desejo comprar como:</label>
           <select name="tipo">
             <option value="N">Nacional</option>
             <option value="I">Importado</option>
           </select>

          <br>
        </div>

        <button class="btn" type="submit">Efetuar Compra</button><br>

      </form>
        
        <?php 
          if(isset($_POST['codigo'])){

            include('lojaController.php');
            $recibo = reciboCompra($_POST);

        ?>

        <hr>
        <div class="form-group">
          <table border="1">
            <thead>
              <tr><td colspan="4"><b>Recibo da Compra</b></td></tr>
              <tr>
                <td><b>Credenciais</b></td>
                <td><b>Valores</b></td>
              </tr>
            </thead>

            <tbody>
              <tr><td>Nome</td> <td><?php echo $recibo['nome'] ?></td></tr>
              <tr><td>Código</td> <td><?php echo $recibo['codigo'] ?></td></tr>
              <tr><td>Quantidade</td> <td><?php echo $recibo['quantidade'] ?></td></tr>
              <tr><td>Preço Unitário</td> <td><?php echo $recibo['preco'] ?></td></tr>
              <tr><td>Modalidade</td> <td><?php echo $recibo['modalidade'] ?></td></tr>
              <tr><td>Origem</td> <td><?php echo $recibo['tipo'] ?></td></tr>
              <tr><td>Sub-Total</td> <td><?php echo $recibo['sub_total'] ?></td></tr>
              <tr><td>Taxa de Imposto</td> <td><?php echo $recibo['tx_imposto'] ?></td></tr>
              <tr><td>Taxa de Importação</td> <td><?php echo $recibo['tx_importacao'] ?></td></tr>
              <tr><td>Total</td> <td><?php echo $recibo['total'] ?></td></tr>
              
              
            </tbody>

          </table>
        </div>        
        
        <?php } ?>
   

  </div>


</body>
</html>