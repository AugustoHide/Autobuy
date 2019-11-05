<!DOCTYPE html>


<html>
	<head>
		<title>Autobuy</title>
		<?php include("includes/head.php"); ?>
	</head>
	<body>

		<?php include("includes/js.php"); ?>
	
		<?php include("includes/header.php"); ?>


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
					<img class="foto-anuncio col-sm-12" src="View/sources/OnixFrente.png">
					
					<a href="#">
						<div class="info-anuncio">
							<span class="modelo-anuncio">Chevrolet Onix</span>
							<br>
							<div class="preco-anuncio">R$20000</div>
						</div>
					</a>
				</section>
				<section class="anuncio col-sm-3">
					<img class="foto-anuncio col-sm-12" src="View/sources/OnixFrente.png">
					
					<a href="#">
						<div class="info-anuncio">
							<span class="modelo-anuncio">Chevrolet Onix</span>
							<br>
							<div class="preco-anuncio">R$20000</div>
						</div>
					</a>
				</section>
				<section class="anuncio col-sm-3">
					<img class="foto-anuncio col-sm-12" src="View/sources/OnixFrente.png">
					
					<a href="#">
						<div class="info-anuncio">
							<span class="modelo-anuncio">Chevrolet Onix</span>
							<br>
							<div class="preco-anuncio">R$20000</div>
						</div>
					</a>
				</section>
				<section class="anuncio col-sm-3">
					<img class="foto-anuncio col-sm-12" src="View/sources/OnixFrente.png">
					
					<a href="#">
						<div class="info-anuncio">
							<span class="modelo-anuncio">Chevrolet Onix</span>
							<br>
							<div class="preco-anuncio">R$20000</div>
						</div>
					</a>
				</section><section class="anuncio col-sm-3">
					<img class="foto-anuncio col-sm-12" src="View/sources/OnixFrente.png">
					
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
		

		<?php include("includes/footer.php"); ?>

	</body>


</html>