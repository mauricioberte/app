<?php
$menu_ativo ="notas";
include('cabecalho.php'); ?>
<div class="col-xs-12 col-sm-4 col-sm-offset-4">
	<h1>Cálculo Calcular qunatas notas saem</h1>
	<form action="banco.php" method="post">
		<div class="form-group">
			<label for="valor">Valor a sacar</label>
			<input type="text" class="form-control" id="valor" name="valor">
		</div>
		
		<button type="submit" class="btn btn-primary">Calcular</button>
	</form>
</div>
<?php include('rodape.php'); ?>