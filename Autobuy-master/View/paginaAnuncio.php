<!DOCTYPE html>
<html>
<head>
	<?php include("includes/head.php"); ?>
	<link rel="stylesheet" type="text/css" href="View/css/estiloAnuncio.css">
	<title>Chevrolet Onix</title>
</head>
<body>
	
	<?php include("includes/js.php"); ?>
	<?php include("includes/header.php"); ?>
	
	<div id="boxTitulo" class="container">
		<h1>Chevrolet Onix</h1>
	</div>
	<!-- ------------- IMAGENS ------------- -->
	<div id="boxImagens" class="borda container card">
		<div id="carouselExampleControls" class="carousel slides" data-ride="carousel">
	        <div class="carousel-inner">
		      	<div class="carousel-item active">
		      	<img class="img-fluid d-block w-30 mx-auto size" alt="Responsive image 1" src="View/sources/carros_aleatorios/hyundai_creta.jpg?auto=yes&bg=777&fg=555">
		    	</div>
		    	<div class="carousel-item">
		      	<img class="img-fluid d-block w-30 mx-auto size" alt="Responsive image 2" src="View/sources/carros_aleatorios/fiat_argo.jpg?auto=yes&bg=777&fg=555">
		    	</div>
		    	<div class="carousel-item">
		      	<img class="img-fluid d-block w-30 mx-auto size" alt="Responsive image 3" src="View/sources/OnixPainel.png?auto=yes&bg=777&fg=555">
		    	</div>
	      	</div>
	      	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	          <span class="sr-only">Anterior</span>
	        </a>
	        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	          <span class="carousel-control-next-icon" aria-hidden="true"></span>
	          <span class="sr-only">Próximo</span>
	        </a>
	    </div>
	</div>
	<div id="boxConteudo"  class="borda container">
		<div class="row">
			<!-- ------------- PRINCIPAL ------------- -->
			<div id="boxConteudoPrincipal"  class="borda col-sm-8">
				
				<!-- ------------- DETALHES DO CARRO ------------- -->
				<div class="detalhesCarro card">
					<h3>Detalhes do carro</h3>
					<div class="itensDetalhes">
						<table class="table table-borderless">
							<tr>
								<td>
									<span class="itemTitulo">Ano</span>
									<br/>
									<span class="itemDescricao">2020</span>
								</td>
								<td>
									<span class="itemTitulo">Qulometragem</span>
									<br/>
									<span class="itemDescricao">13.000</span>
								</td>
								<td>
									<span class="itemTitulo">Câmbio</span>
									<br/>
									<span class="itemDescricao">Manual</span>
								</td>
								<td>
									<span class="itemTitulo">Tipo</span>
									<br/>
									<span class="itemDescricao">Lançamento</span>
								</td>
							</tr>
							<tr>
								<td>
									<span class="itemTitulo">Portas</span>
									<br/>
									<span class="itemDescricao">4 portas</span>
								</td>
								<td>
									<span class="itemTitulo">Combustível</span>
									<br/>
									<span class="itemDescricao">Álcool</span>
								</td>
								<td>
									<span class="itemTitulo">Cor(es)</span>
									<br/>
									<span class="itemDescricao">Branco, preto, azul, vermelho</span>
								</td>
								<td>
									<span class="itemTitulo"></span>
									<br/>
									<span class="itemDescricao"></span>
								</td>
							</tr>
							<tr>
								<td>
									<span class="itemTitulo"></span>
									<br/>
									<span class="itemDescricao"></span>
								</td>
								<td>
									<span class="itemTitulo"></span>
									<br/>
									<span class="itemDescricao"></span>
								</td>
								<td>
									<span class="itemTitulo"></span>
									<br/>
									<span class="itemDescricao"></span>
								</td>
								<td>
									<span class="itemTitulo"></span>
									<br/>
									<span class="itemDescricao"></span>
								</td>
							</tr>
						</table>
					</div>
					<div class="DescricaoCarro">
						<h6>Sobre este carro</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
				<!-- ------------- DETALHES DO VENDEDOR ------------- -->
				</div>
				<div class="detalhesVendedor card">
					<h3>Sobre o vendedor</h3>
				</div>
				<!-- ------------- OUTROS CARROS PARECIDOS ------------- -->
				<div class="outrosCarros card">
					<h3>Outros carros parecids</h3>
				</div>
			</div>

			<!-- ------------- ASIDE ------------- -->
			<div id="boxConteudoAside"  class="borda col-sm-4">
				<div class="asideConteudo card">
					<div class="container">
						<div class="header">
							<span class="preco">R$ 25.000,00</span><br>
							<span class="pagamento">À Vista</span>
						</div>
						<div class="mensagemComprador">
							<form method="POST">
								<div class="form-inline campoMensagem">
									<label class="labelAside" for="nomeComprador">Nome:</label>
									<input type="text" name="nomeComprador" class="form-control form-control-sm" />
								</div>
								<div class="form-inline campoMensagem">
									<label class="labelAside" for="emailComprador">Email:</label>
									<input type="email" name="emailComprador" class="form-control form-control-sm" />
								</div>
								<div class="form-inline campoMensagem">
									<label class="labelAside" for="telefoneComprador">Telefone:</label>
									<input type="number" name="telefoneComprador" class="form-control form-control-sm"/>
								</div>
								<div class="form-group campoMensagem">
									<label class="" for="textoComprador">Mensagem:</label>
									<input type="text-area" name="textoComprador" class="form-control form-control-sm"/>
								</div>
								<button class="btn btn-primary btn-block" type="submit">Enviar mensagem</button>
							</form>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>

	<?php include("includes/footer.php"); ?>
</body>
</html>