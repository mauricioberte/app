<?php 
$menu_ativo ="notas";

include('cabecalho.php');
$valor = $_POST['valor'];


function calcula($valor){
	$cem=0;$cinquenta=0;$vinte=0;$cinco=0;$dez=0;$dois=0;$um=0;
	$vl = $valor;
	echo '
	<div class="row">
	<div class="col-xs-12 col-sm-6 col-sm-offset-3">
	<div class="panel panel-primary text-center">
		<div class="panel-heading">
			<h3 class="panel-title">O valor selecionado foi de</h3>
		</div>
	  	<div class="panel-body"><p class="lead">'. $valor .'</p><a class="btn btn-link" href="notas.php" role="button">Voltar</a>

	  	</div>
  	</div>
  	</div>
</div>';

	while ($vl>0) {
		for ($i=1; $vl>= 100 ; $i++) { 
			$cem++;		
			$vl = $vl -100;
		}
		
		for ($i=1; $vl>= 50 ; $i++) { 
			$cinquenta++;		
			$vl = $vl -50;
		}
		for ($i=1; $vl>= 20 ; $i++) { 
			$vinte++;		
			$vl = $vl -20;
		}
		for ($i=1; $vl>= 10 ; $i++) { 
			$dez++;		
			$vl = $vl -10;
		}
		for ($i=1; $vl>= 5 ; $i++) { 
			$cinco++;		
			$vl = $vl -5;
		}
		for ($i=1; $vl>= 2 ; $i++) { 
			$dois++;		
			$vl = $vl -2;
		}
		for ($i=1; $vl>= 1 ; $i++) { 
			$um++;		
			$vl = $vl -1;
		}
	}

	if ($cem >0) {
		mostra_Valor($cem,"Cem");
	}
	if ($cinquenta >0) {
		mostra_Valor($cinquenta,"Cinquenta");
	}
	if ($vinte >0) {
		mostra_Valor($vinte,"Vinte");
	}
	if ($dez >0) {
		mostra_Valor($dez,"Dez");
	}
	if ($cinco >0) {
		mostra_Valor($cinco,"Cinco");
	}
	if ($dois >0) {
		mostra_Valor($dois,"Dois");
	}
	if ($um >0) {
		mostra_Valor($um,"Um");
	}
}
function mostra_Valor($valor,$nota){

	echo '<div class="col-xs-12 col-sm-6 col-md-2 slide-in-elliptic-top-fwd">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Notas de:</h3>
			</div>
		  	<div class="panel-body">
	  			<img class="img-responsive" ';
	  			if ($nota == "Um"){
	  				echo 'src="https://3.bp.blogspot.com/-2O1EdD9Ikog/V09iwjMDYoI/AAAAAAAAAGY/n-V118jnt1Yc7GYIk3RjJfeyUubbpocvQCLcB/s1600/real-money-1240622-1278x591.jpg"';
	  			}else{
	  				echo 'src="http://memoria.ebc.com.br/agenciabrasil/sites/_agenciabrasil/files/gallery_assist/29/gallery_assist665111/prev/10122010-'.$nota.'Reais.jpg"';
	  			} 
	  			echo 'alt="Notas de'.$nota.'">
	    		<h2 class="text-center"><b>'.$valor.'</b><br><small>Nota(s)</small></h2> 
	  		</div>
		</div>	
	</div>';
}

	calcula($valor);

	include('rodape.php'); ?>

	
</div>

</div>
