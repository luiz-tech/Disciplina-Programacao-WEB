<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Product Page Template</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap-4.4.1.css" rel="stylesheet">
  </head>
  <body>
    <?php include('menu.php'); ?>
	  
    <div class="container mt-2">
      <div class="row">
        <div class="col-12">
          <div class="jumbotron">
            <h1 class="text-center">Vamos agendar sua consulta ? Vamos !</h1>
            <p class="text-center">Confira as novidades das novas modalidades de atendimento em domicílio, em função da <b class="text-danger">pandemia do COVID-19</b>.</p>
            <img src="images/homecare.png" alt="" class="ml-2 text-center"> 
			<img src="images/homecare.png" alt="" class="ml-5 text-center"> 
          </div>
        </div>
      </div>
    </div>
	  
    <div class="container">
      <div class="row">
        <div class="text-centercol-12">
			
          <div class="card">
			  <div class="card-header bg-primary">
			  	<h5 class="card-title text-white">Ficha de agendamento on-line</h5>
			  </div>
			  
          	<div class="card-body">
				<div class="row">
				 
			 	<div class="col-md-6 col-12">
					<div class="form-group">			
						<label>Informe o seu nome completo</label>
						<input name="nome" class="form-control" placeholder="Nome Completo" required />					
					</div>
				</div>
				 
				 <div class="col-md-6 col-12">
					<div class="form-group">			
						<label>Informe o seu email</label>
						<input type="email" name="email" placeholder="E-mail Completo" class="form-control" required />					
					</div>
				</div>
				 
				 <div class="col-md-3 col-12">
					<div class="form-group">			
						<label>Telefone para Contato</label>
						<input placeholder="(ddd)99999-9999" name="tel" class="form-control"  required />					
					</div>
				</div>
					
			
				 <div class="col-md-3 col-12">
					<div class="form-group">			
						<label>Data da Consulta</label>
						<input type="date" class="form-control" name="data" required />					
					</div>
				</div>
				 
				<div class="col-md-3 col-12">
					<div class="form-group">			
						<label>Especialidade Médica </label>
						<select class="form-control" name="medico">
							
							<option value="">[ Selecione ]</option>
							<option>Neurologista</option>
							<option>Cardiologista</option>
							<option>Urologista</option>
							<option>Pediatra</option>
							<option>Ortopedista</option>
							<option>Traumatologista</option>
							<option>Cirurgião</option>
							<option>Psiquiatra</option>

						
						</select>					
					</div>
				</div>
					
					<div class="col-md-3 col-12">
					<div class="form-group">			
						<label>Modalidade</label>
						<select class="form-control" name="medico">
							
							<option value="">[ Selecione ]</option>
							<option>Domicílo</option>
							<option>On-line (Video-Conferência)</option>
							<option>Presencial</option>
						
						</select>					
					</div>
					
				</div>
			  
			  </div>
			  </div>
			  
			<div class="card-footer">
				<div class="col-md-12">
					<button class="btn-block btn btn-success">Agendar Consulta</button>
				</div>  
			</div>
          </div>
		  
        </div>
      </div>
    </div>
    <hr>
    

    <section>
      <h2 class="text-center">Confira nossos produtos fitoterápicos</h2>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/hjndNvvh0qU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container mt-4">
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <img class="card-img-top" src="images/suplementos.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Suplementos</h5>
              <p class="card-text">Vitaminas, Sais mineirasi, ervas, ervas-secas </p>
              <a href="#" class="btn btn-primary">Saibs Mais</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <img class="card-img-top" src="images/livros_nutricao.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Livros</h5>
              <p class="card-text">Livros que ajudaram a você e sua familia a aprender a como ultilizar de forma mais legal os alimenros para uma boa alimentaçãpo</p>
              <a href="#" class="btn btn-primary">Visitar E-books</a>
            </div>
          </div>
        </div>
      </div>
    </div>
	  
    <div class="container">
      <div class="row">
        <div class="container py-sm-4">
          <div class="row">
            <div class="col-md-10 my-4 mx-auto">
              <h2 class="text-center bg-light">Planos de assinatura digital</h2>
              <hr>
              <div class="row no-gutters my-3">
                <div class="col-md-4 pr-2">
                  <div class="list-group text-center my-3">
                    <div class="list-group-item text-white bg-dark">
                      <h4 class="text-center my-1">Nutição Familiar</h4>
                    </div>
                    <div class="list-group-item text-uppercase font-weight-bold">
                      R$ 19,90 /mês
                    </div>
                    <a href="#" class="list-group-item">
                    1 Livro de sua escolha sobre nutição e saúde
                    </a>
                    <a href="#" class="list-group-item">
                    2 MasterClasses de sua escolha sobre naturopatia
                    </a>
                    <a href="#" class="list-group-item">
                    1 Apostila com receitas funcionais
                    </a>
                   
                    <div class="list-group-item">
                      <button class="btn btn-info btn-lg btn-block text-truncate">Comprar</button>
                    </div>
                  </div>
                </div>
				  
                <div class="col-md-4">
                  <div class="list-group text-center">
                    <div class="list-group-item text-white bg-dark">
                      <h4 class="text-center my-1">Técnincas Medicinais Naturais<br></h4>
                    </div>
                    <div class="list-group-item text-uppercase font-weight-bold">
                      R$ 49,90 /mês
                    </div>
                    <a href="#" class="list-group-item">
                    2 Livros de nutição de sua escolha
                    </a>
                    <a href="#" class="list-group-item">
                   4 MasterClasses de sua escolha sobre naturopatia
                    </a>
                    <a href="#" class="list-group-item">
                   Kit c/ 3 Apostilas com receitas de diversos tipos de dietas
                    </a>
                    <a href="#" class="list-group-item">
                   20% de desconto na compra de qualuqer medicamento manipulado com nossa farmácia
                    </a>
                    <a href="#" class="list-group-item">
                    E-book completo: <em>"Como curar através das plantas ?"</em>
                    </a>
 
                    <div class="list-group-item">
                      <button class="btn btn-warning btn-lg btn-block text-truncate">	Comprar</button>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 pl-2">
                  <div class="list-group text-center my-3">
                    <div class="list-group-item text-white bg-dark">
                      <h4 class="text-center my-1">Premium</h4>
                    </div>
                    <div class="list-group-item text-uppercase font-weight-bold">
                      R$ 79,90 /mês
                    </div>
                    <a href="#" class="list-group-item">
                    5 Livros de nutição de sua escolha
                    </a>
                    <a href="#" class="list-group-item">
                   Todas as MasterClasses liberadas sobre naturopatia
                    </a>
                    <a href="#" class="list-group-item">
                   Kit copleto das Apostilas de receitas de diversos tipos de dieta
                    </a>
                    <a href="#" class="list-group-item">
                   35% de desconto na compra de qualuqer medicamento manipulado com nossa farmácia
                    </a>
					 <a href="#" class="list-group-item">
                   	1 Curso de Nutrição especializada pela idade
                    </a>
					  <a href="#" class="list-group-item">
                   	Prêmmio Bônus
                    </a>
                    <a href="#" class="list-group-item">
                    E-book completo: <em>"Como curar através das plantas ?"</em>
                    </a>
                    <div class="list-group-item">
                      <button class="btn btn-success btn-lg btn-block text-truncate">Contact Us</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
   
    <footer class="text-center">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <p><em>Copyright © 	Clinica Médica, o melhor para sua saúde</em></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>