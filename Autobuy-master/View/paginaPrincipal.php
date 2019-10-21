<!DOCTYPE html>
<html>
	<head>
		<title>Autobuy</title>
		<meta charset="utf-8" />

		<!--Estilo e formatação-->
		<link rel="stylesheet" type="text/css" href="View/css/estilo.css">
		<link rel="stylesheet" type="text/css" href="View/css/estilo_header.css">
		<link rel="stylesheet" type="text/css" href="View/css/estilo_principal.css">
	</head>
	<body>
		<header>
			<!--links pra: 
				outras páginas nos casos de uso
			-->
			<div class="area">
				<h1 id="logo-cabecalho">Autobuy</h1>
				<span id="links-cabecalho">
					<a href="#">Página Principal</a>
					<a href="#">Comprar</a>
					<a href="#">Buscar</a>
					<span>
						<form>
							
						</form>
						<a href="#">Login</a>
					</span>
				</span>
			</div>
		</header>
		<div class="area-principal">		
			<aside >
				<!--Mecanismos de buscas-->
				<div class="busca-rapida">
					<form method="POST">
						<label >Digite a marca ou modelo: <br></label>
						<input type="text" name="busca-rapida"><br>
						<input type="submit" name="pesquisar"><br>
					</form>
				</div>
				<div class="busca-detalhada">
					<form method="POST">
						<label>Marca</label><br>
						<input type="text" name="marca"><br>
						<br>
						<label>Modelo</label><br>
						<input type="text" name="modelo"><br>
						<br>
						<label>Ano</label><br>
						<input type="number" name="ano" min="1900" max="2020"><br>
						<br>
						<label>Cor</label><br>
						<input type="color" name="cor"><br>
						<br>
						<label>Preço</label><br>
						<input type="number" name="preco" min="1000" step="1000"><br>
						<br>
						<input type="submit" name="pesquisar"><br>
					</form>
				</div>
				
			</aside>
		


			<div class="conteudo-principal">
				<!--Conteúdo principal
						anúncio de carros
						seção de modelos mais vendidos
						etc
				-->
				<section class="anuncio">
					<img class="foto-anuncio" src="View/sources/OnixFrente.png">
					
					<a href="#">
						<div class="info-anuncio">
							<span class="modelo-anuncio">Chevrolet Onix</span>
							<br>
							<div class="preco-anuncio">R$20000</div>
						</div>
					</a>
				</section>
				<section class="anuncio">
					<img class="foto-anuncio" src="View/sources/OnixFrente.png">
					
					<a href="#">
						<div class="info-anuncio">
							<span class="modelo-anuncio">Chevrolet Onix</span>
							<br>
							<div class="preco-anuncio">R$20000</div>
						</div>
					</a>
				</section>
				<section class="anuncio">
					<img class="foto-anuncio" src="View/sources/OnixFrente.png">
					
					<a href="#">
						<div class="info-anuncio">
							<span class="modelo-anuncio">Chevrolet Onix</span>
							<br>
							<div class="preco-anuncio">R$20000</div>
						</div>
					</a>
				</section>
				<section class="anuncio">
					<img class="foto-anuncio" src="View/sources/OnixFrente.png">
					
					<a href="#">
						<div class="info-anuncio">
							<span class="modelo-anuncio">Chevrolet Onix</span>
							<br>
							<div class="preco-anuncio">R$20000</div>
						</div>
					</a>
				</section><section class="anuncio">
					<img class="foto-anuncio" src="View/sources/OnixFrente.png">
					
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
		<footer  class="clear">
			<!--Links para:
				páginas do site
				Termos de uso
				etc
			-->	
			<div class="conteudo-rodape">
				<span>Redes sociais </span>
				<a href="#">Facebook</a> | 
				<a href="#">Instagram</a> | 
				<a href="#">Youtube</a><br>
				<a href="#">Comprar</a><br>
				<a href="#">Vender</a><br>
			</div>
		</footer>
	</body>
</html>