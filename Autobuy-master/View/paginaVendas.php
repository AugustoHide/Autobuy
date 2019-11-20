<!DOCTYPE html>


<html>

<head>
	<title>Vender</title>
	<?php include("includes/head.php"); ?>
</head>

<body>

	<?php include("includes/js.php"); ?>
	<?php include("includes/header.php"); ?>



	<div class="container">
		<div class="formularioDiv card col-md-8 float marginTop">
			<form action="index.php?action=listar-anuncio" method="post">
				<div class="form-goup formEmement">
					<label>Marca: </label>
					<input class="form-control" type="text" name="marca" placeholder="ex: Bmw, Fiat..">
				</div>
				<div class="form-goup formEmement">
					<label>Ano: </label>
					<input class="form-control" type="text" name="ano" placeholder="ex: 2015, 2018">
				</div>
				<div class="form-goup formEmement">
					<label>Cor: </label>
					<input class="form-control" type="text" name="cor" placeholder="ex: Preto, Azul metálico..">
				</div>
				<div class="form-goup formEmement">
					<label>Quilometragem: </label>
					<input class="form-control" type="text" name="quilometragem" placeholder="ex: 0KM, 50.000KM">
				</div>
				<br><br>
				<div class="form-goup formEmement">
					<label>Categoria: </label>
					<input class="form-control" type="text" name="categoria" placeholder="ex: Usado/Novo">
				</div>

				<div class="form-goup formEmement">
					<label>Tipo(modelo): </label>
					<input class="form-control" type="text" name="tipo" placeholder="ex: Hatch, Sedan">
				</div>	

				<div class="form-goup formEmement">
					<label>Valor: </label>
					<input class="form-control" type="text" name="valor" placeholder="ex: R$0,00">
				</div>	

				<br>
				<button class="btn btn-primary" type="submit">Anuncie agora!</button>
				<button class="btn btn-primary" type="reset">Limpar</button>
			</form>
		</div>
	</div>

	<!--* <select name="Marca">
						<option value="BMW">Formulários</option>
						<option value="GM/Chevrolet">JAVA</option>
						<option value="Dodge">VRML</option>
						<option value="Fiat">CHAT</option>
						<option value="Honda">Onde colocar</option>
						<option value="Hyundai">Onde Divulgar</option>
						<option value="Mercedes-Benz">Organizando às informações</option>
						<option value="Mitsubishi">Organizando às informações</option>
						<option value="Nissan">Organizando às informações</option>
						<option value="Peugeot">Organizando às informações</option>
						<option value="Toyota">Organizando às informações</option>
						<option value="Volkswagen">Organizando às informações</option>
						<option value="Volvo">Organizando às informações</option>
					</select>
-->

</body>

<?php include("includes/footer.php"); ?>

</html>