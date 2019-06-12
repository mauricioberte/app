<?php 
$menu_ativo ="imc";
include('cabecalho.php'); ?>

<h1>Cálculo de IMC</h1>

<form action="calcula_imc.php" method="post">
	<input type="text" name="peso">
	<input type="text" name="altura">
	<input type="submit" text="Calcular">
</form>

<?php include('rodape.php'); ?>
