<?php
$menu_ativo ="combustivel";
include('cabecalho.php'); ?>
<div class="col-xs-12 col-sm-4 col-sm-offset-4">
	<h1>Cálculo de qual Combustível usar</h1>
	<form action="calcula_combustivel.php" method="post">
		<div class="form-group">
			<label for="alcool">Valor do Álcool</label>
			<input type="text" class="form-control" id="alcool" name="alcool">
		</div>
		<div class="form-group">
			<label for="alcool">Valor do Gasolina</label>
			<input type="text" class="form-control" id="gasolina" name="gasolina">
		</div>
		<button type="submit" class="btn btn-primary">Calcular</button>
	</form>
</div>
<?php include('rodape.php'); ?>