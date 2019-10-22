

<!DOCTYPE html>
<html>
	<head>
		<title>Autobuy</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--Estilo e formatação-->
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<link rel="stylesheet" type="text/css" href="css/estilo_header.css">
		<link rel="stylesheet" type="text/css" href="css/estilo_principal.css">
		<!--Bootstrap-->
		<link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>
		<!-- JavaScript (Opcional) -->
	    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


		<header>
			<!--links pra: 
				outras páginas nos casos de uso
			-->
			<div class="area container">
				<a href="">
					<h1 id="logo-cabecalho" class="col-sm-7">Autobuy</h1>
				</a>
				<span id="links-cabecalho" class="row col-sm-5">
					<a href="#">Página Principal</a>
					<a href="#">Comprar</a>
					<a href="#">Busca Detalhada</a>
					
					<span class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login</a>
						<form method="post" class="dropdown-menu">
							<input type="text" name="login" class="form-control" placeholder="Digite seu login">
							<input type="text" name="senha" class="form-control" placeholder="Digite sua senha">
							<button type="submit" class="btn-primary">Logar</button>
						</form>
					</span>
				</span>
			</div>
		</header>
		<div class="area-principal container">		
			<aside class="col-sm-12">
				<div class="col-sm-11 aside">
					<!--Mecanismos de buscas-->
					<div class="busca-rapida col-sm-12">
						<form method="POST">
							<div class="form-group">
								<label for="busca-rapida">Digite a marca ou modelo:</label>
								<input type="text" name="busca-rapida" class="form-control" id="busca-rapida"><br>
								<button type="submit" class="btn btn-primary">Pesquisar</button>
							</div>
						</form>
					</div>
				</div>
			</aside>
			<div class="conteudo-principal col-sm-12">
				<!--Conteúdo principal
						anúncio de carros
						seção de modelos mais vendidos
						etc
				-->
				<h2>Principais anúncios</h2>
				<section class="anuncio col-sm-3">
					<img class="foto-anuncio col-sm-12" src="sources/OnixFrente.png">
					
					<a href="#">
						<div class="info-anuncio">
							<span class="modelo-anuncio">Chevrolet Onix</span>
							<br>
							<div class="preco-anuncio">R$20000</div>
						</div>
					</a>
				</section>
				<section class="anuncio col-sm-3">
					<img class="foto-anuncio col-sm-12" src="sources/OnixFrente.png">
					
					<a href="#">
						<div class="info-anuncio">
							<span class="modelo-anuncio">Chevrolet Onix</span>
							<br>
							<div class="preco-anuncio">R$20000</div>
						</div>
					</a>
				</section>
				<section class="anuncio col-sm-3">
					<img class="foto-anuncio col-sm-12" src="sources/OnixFrente.png">
					
					<a href="#">
						<div class="info-anuncio">
							<span class="modelo-anuncio">Chevrolet Onix</span>
							<br>
							<div class="preco-anuncio">R$20000</div>
						</div>
					</a>
				</section>
				<section class="anuncio col-sm-3">
					<img class="foto-anuncio col-sm-12" src="sources/OnixFrente.png">
					
					<a href="#">
						<div class="info-anuncio">
							<span class="modelo-anuncio">Chevrolet Onix</span>
							<br>
							<div class="preco-anuncio">R$20000</div>
						</div>
					</a>
				</section><section class="anuncio col-sm-3">
					<img class="foto-anuncio col-sm-12" src="sources/OnixFrente.png">
					
					<a href="#">
						<div class="info-anuncio">
							<span class="modelo-anuncio">Chevrolet Onix</span>
							<br>
							<div class="preco-anuncio">R$20000</div>
						</div>
					</a>
				</section>
			</div>
		</div>
		<div style="clear: both; margin-bottom: 150px;">
			      
		</div>
		<div class="clear">
			<!--Links para:
				páginas do site
				Termos de uso
				etc
			-->	
			
			<div class="conteudo-rodape container footer">
				
				<div class="col-sm-7 links-footer ">
					<a href="#">Comprar</a>
					<a href="#">Vender</a>	
				</div>
				<div class="col-sm-5 redes_sociais-footer">
					<a href="#">
					<img src="sources/redes_sociais/facebook.png" class="icone">
					Facebook</a> | 
					<a href="#">
					<img src="sources/redes_sociais/instagram.png" class="icone">
					Instagram</a> | 
					<a href="#">
					<img src="sources/redes_sociais/youtube.png" class="icone">
					Youtube</a>
				</div>
			</div>
		</div>
	</body>
</html>