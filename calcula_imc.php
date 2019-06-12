<?php 
$menu_ativo ="imc";

include('cabecalho.php');
$peso = $_POST['peso'];
$altura = $_POST['altura'];



$resultado = $peso/($altura*$altura);
echo "<h1>Seu IMC é:" . round($resultado,2) . "</h1>";


if($resultado < 20){
	echo '<img class="img-responsive img-thumbnail" src="https://www.papodegordo.com.br/wp-content/uploads/2009/11/nerd-buff-375x300.jpg" alt="Magro">';
}else{
	if ($resultado <30) {
		echo '<img class="img-responsive img-thumbnail" src="https://ae01.alicdn.com/kf/HTB1.uybatzvK1RkSnfoq6zMwVXaz/Homens-camisa-da-forma-t-2019-NOVA-Primavera-ver-o-Magro-camisas-masculina-Tops-Muscula-o.jpg_640x640.jpg" alt="no peso">';
	} else {
		echo '<img class="img-responsive img-thumbnail" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5uLmp55WyR9yAxFF61FydZFN7ZEfJrMYJkY-U_-1OJvkKhn2e5A" alt="balofo">';
	}
	
}

include('rodape.php'); ?>
<a class="btn btn-link" href="imc.php"> voltar</a>
