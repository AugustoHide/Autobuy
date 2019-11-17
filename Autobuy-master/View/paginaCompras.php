<!DOCTYPE html>
<html>
	
	<head>
		<?php include("includes/head.php"); ?>
		<title>Compras</title>
	</head>
	
	<body>
		
		<?php include("includes/js.php"); ?>
		<?php include("includes/header.php"); ?>

		<div class="container borda clear">
			
			<div class="col-md-9 borda floatLeft">
				<?php include("anunciosPaginaPrincipal.php"); ?>				
			</div>

			<div class="col-md-3 borda floatLeft">
				Busca
				<!----------------------- Marca ----------------------->
				<div class="container busca-rapida card">
		          <form method="POST" >
		            <div class="form-group container">
		              <label for="marca">Digite a marca:</label>
		              <select name="marca" id="marca" class="custom-select" onchange="enviarMarca(this.value);">
		              	<option value="todasMarcas" selected>Todas as marcas</option>
		              	<option value="bmw">BMW</option>
		              	<option value="pegout">Pegout</option>
		              	<option value="chevrolet">Chevrolet</option>
		              	<option value="fiat">Fiat</option>
		              	<option value="volswagen">Volswagen</option>
		              </select>
		            </div>
		          </form>
		        </div>
		        <script type="text/javascript">
		        	function enviarMarca(Marca){
		        		alert(Marca);
		        	}
		        </script>
		        <!----------------------- Modelo ----------------------->
		        <div class="container busca-rapida card">
		          <form method="POST" >
		            <div class="form-group container">
		              <label for="modelo">Digite o modelo:</label>
		              <select name="modelo"  class="custom-select" onchange="enviarModelo(this.value)">
		              	<option value="todosModelos">Todos os modelos</option>
		              	<option value="argo">Fiat Argo</option>
		              	<option value="Uno">Fiat Uno</option>
		              	<option value="palio">Fiat Palio</option>
		              	<option value="ka">Fiat ka</option>
		              </select>
		            </div>
		          </form>
		        </div>
		        <script type="text/javascript">
		        	function enviarModelo(modeloSelecionado){
		        		alert(modeloSelecionado);
		        	}
		        </script>
		        <!----------------------- Ano ----------------------->
		        <div class="container busca-rapida card">
		          <form method="POST" >
		            <div class="form-group container">
		              <label for="ano">Ano:</label>
			          <div class="row">
			          	<div class="col">
			              	<input type="number" name="ano" class="form-control" id="anos" placeholder="de" min="1950" max="2025" onchange="enviarAnoInicio(this.value)">
			              </div>
			              <div class="col">
			              	<input type="number" name="fim" class="form-control" id="ano" placeholder="até" min="1950" max="2025" onchange="enviarAnoFim(this.value)">
			              </div>
			          </div>
		              <button type="submit" class="btn btn-primary" hidden></button>
		            </div>
		          </form>
		        </div>
		        <script type="text/javascript">
		        	function enviarAnoInicio(anoInicio){
		        		alert(anoInicio);
		        	}
		        	function enviarAnoFim(anoFim){
		        		alert(anoFim);
		        	}
		        </script>
		        <!----------------------- Preco ----------------------->
		        <div class="container busca-rapida card">
		          <form method="POST" >
		            <div class="form-group container">
		              <label for="preco">Preço:</label>
		              <div class="row">
			          	  <div class="col">
			              	<input type="number" id="preco" name="menor" class="form-control" id="ano" placeholder="de" min="10000">
			              </div>
			              <div class="col">
			              	<input type="number" id="preco" name="maior" class="form-control" id="ano" placeholder="até" min="10001">
			              </div>
			          </div>
		              <button type="submit" class="btn btn-primary" hidden>Pesquisar</button>
		            </div>
		          </form>
		        </div>
		        <!----------------------- Cores ----------------------->
		        <div class="container busca-rapida card">
		          <form method="POST" >
		            <div class="form-group container">
		              <label for="cor">Cores:</label>
		              <div class="form-check">
		              	<input type="checkbox" name="branco" class="form-check-input" id="branco">
		              	<label class="form-check-label" for="branco">Branco</label>
		              </div>
		              <div class="form-check">
		              	<input type="checkbox" name="azul" class="form-check-input" id="azul">
		              	<label class="form-check-label" for="azul">Azul</label>
		              </div>
		              <div class="form-check">
		              	<input type="checkbox" name="Amarelo" class="form-check-input" id="Amarelo">
		              	<label class="form-check-label" for="Amarelo">Amarelo</label>
		              </div>
		              <div class="form-check">
		              	<input type="checkbox" name="preto" class="form-check-input" id="preto">
		              	<label class="form-check-label" for="preto">Preto</label>
		              </div>
		              <div class="form-check">
		              	<input type="checkbox" name="verde" class="form-check-input" id="verde">
		              	<label class="form-check-label" for="verde">Verde</label>
		              </div>
		              <button type="submit" class="btn btn-primary" hidden>Pesquisar</button>
		            </div>
		          </form>
		        </div>
		        <!----------------------- Quilometragem ----------------------->
		        <div class="container busca-rapida card">
		          <form method="POST" >
		            <div class="form-group container">
		              <label for="quilometragem">Quilometragem:</label>
		              <div class="row">
			          	<div class="col">
			              	<input type="number" id="quilometragem" name="minima" class="form-control" placeholder="mínima" min="0" max="900000">
			              </div>
			              <div class="col">
			              	<input type="number" id="quilometragem" name="maxima" class="form-control" placeholder="máxima" min="0" max="900000">
			              </div>
			          </div>
		              <button type="submit" class="btn btn-primary" hidden>Pesquisar</button>
		            </div>
		          </form>
		        </div>
		        <!----------------------- Tipo ----------------------->
		        <div class="container busca-rapida card">
		          <form method="POST" >
		            <div class="form-group container">
		              <label for="Tipo">Tipo:</label>
		              <div class="form-check">
		              	<input type="checkbox" name="coversivel" class="form-check-input" id="coversivel">
		              	<label class="form-check-label" for="coversivel">Conversível</label>
		              </div>
		              <div class="form-check">
		              	<input type="checkbox" name="seda" class="form-check-input" id="seda">
		              	<label class="form-check-label" for="seda">Sedã</label>
		              </div>
		              <div class="form-check">
		              	<input type="checkbox" name="picapes" class="form-check-input" id="picapes">
		              	<label class="form-check-label" for="picapes">Picapes</label>
		              </div>
		              <div class="form-check">
		              	<input type="checkbox" name="van" class="form-check-input" id="van">
		              	<label class="form-check-label" for="van">Van</label>
		              </div>
		              <div class="form-check">
		              	<input type="checkbox" name="esportivo" class="form-check-input" id="esportivo">
		              	<label class="form-check-label" for="esportivo">Esportivo</label>
		              </div>
		              <button type="submit" class="btn btn-primary" hidden>Pesquisar</button>
		            </div>
		          </form>
		        </div>
		        <!----------------------- Categoria ----------------------->
		        <div class="container busca-rapida card">
		          <form method="POST" >
		            <div class="form-group container">
		              <label for="Categoria">Categoria:</label>
		              <div class="form-check">
		              	<input type="checkbox" name="novo" class="form-check-input" id="novo">
		              	<label class="form-check-label" for="novo">Novo</label>
		              </div>
		              <div class="form-check">
		              	<input type="checkbox" name="usado" class="form-check-input" id="usado">
		              	<label class="form-check-label" for="usado">Usado</label>
		              </div>
		              <div class="form-check">
		              	<input type="checkbox" name="importado" class="form-check-input" id="importado">
		              	<label class="form-check-label" for="importado">Importado</label>
		              </div>
		              <div class="form-check">
		              	<input type="checkbox" name="van" class="form-check-input" id="van">
		              	<label class="form-check-label" for="van">Van</label>
		              </div>
		              <div class="form-check">
		              	<input type="checkbox" name="antigo" class="form-check-input" id="antigo">
		              	<label class="form-check-label" for="antigo">Antigo</label>
		              </div>
		              <button type="submit" class="btn btn-primary" hidden>Pesquisar</button>
		            </div>
		          </form>
		        </div>

			</div>
		</div>

		<?php include("includes/footer.php"); ?>

	</body>


</html>