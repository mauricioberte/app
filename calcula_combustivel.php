<?php 
$menu_ativo ="combustivel";

include('cabecalho.php');
$alcool = $_POST['alcool'];
$gasolina = $_POST['gasolina'];

$resultado = ($gasolina*0.7);
?>

<div class="col-xs-12 col-sm-4 col-sm-offset-4">
	<?php
	if($resultado > $alcool){
		echo '<div class="alert alert-success" role="alert"><h2>Usar alcool</h2></div>';
	}else{
		echo '<div class="alert alert-warning" role="alert"><h2>Usar Gasolina</h2></div>';
	} 
	include('rodape.php'); ?>
<div class="col-xs-12 col-sm-4 col-sm-offset-4">
<a class="btn btn-link" href="combustivel.php"> voltar</a>
</div>
</div>
