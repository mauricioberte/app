<?php isset($menu_ativo); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/Chart.min.js"></script>

	</head>
	<body>
		<div class="container-fluid">
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">B</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cadastros <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Produto</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Listagem <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Produto</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Outros <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Produto</a></li>
							</ul>
						</li>
						<li <?php if($menu_ativo=="imc"){ echo 'class="active"';} ?> ><a href="imc.php">IMC</a></li>
						<li <?php if($menu_ativo=="combustivel"){ echo 'class="active"';} ?> ><a href="combustivel.php">Combustível</a></li>
					</ul>
					</div><!--/.nav-collapse -->
				</nav>