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
					</ul>
					</div><!--/.nav-collapse -->
				</nav>
				<div class="row">
					<div class="col-xs-12">
						<div class="well">
							<h1>Sistema</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At tempore dolorem, provident aut distinctio voluptates aliquid dolores, nam doloremque fugit unde reprehenderit veniam voluptatum necessitatibus asperiores maiores quia autem optio!.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							<p>
								<a class="btn btn-lg btn-primary" href="index.php" role="button">Voltar ao login »</a>
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12  col-md-6">
						<div class="table table-responsive">
							<table class="table table-hover table-striped table-condensed">
								<thead>
									<tr>
										<th>#</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Username</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>Mark asd fasdfv asdfasd f</td>
										<td>Otto asdfasd fasdf asdfasdf sdf</td>
										<td>@mdo</td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>Jacob df asdfas dfa</td>
										<td>Thornton</td>
										<td>@fat</td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>Larry</td>
										<td>the Bird</td>
										<td>@twitter</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

					<div class="col-xs-12 col-md-6">
						<canvas id="grafico"></canvas>
					</div>
				</div>
			</div>
			<script src="js/jquery-1.12.4.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
			<script>
			var ctx = document.getElementById('grafico');
			var myChart = new Chart(ctx, {
			    type: 'bar',
			    data: {
			        labels: ['Xanxerê', 'Faxinal', 'Xaxim', 'Chapecó', 'Joaçaba', 'São Domingos'],
			        datasets: [{
			            label: '# of Votes',
			            data: [23, 34, 3, 55, 2, 19],
			            backgroundColor: [
			                'rgba(255, 99, 132, 0.2)',
			                'rgba(54, 162, 235, 0.2)',
			                'rgba(255, 206, 86, 0.2)',
			                'rgba(75, 192, 192, 0.2)',
			                'rgba(153, 102, 255, 0.2)',
			                'rgba(255, 159, 64, 0.2)'
			            ],
			            borderColor: [
			                'rgba(255, 99, 132, 1)',
			                'rgba(54, 162, 235, 1)',
			                'rgba(255, 206, 86, 1)',
			                'rgba(75, 192, 192, 1)',
			                'rgba(153, 102, 255, 1)',
			                'rgba(255, 159, 64, 1)'
			            ],
			            borderWidth: 1,
			            hoverBorderColor: ['rgba(123,234,12,1)',
			            	'rgba(123,234,12,1)',
			            	'rgba(123,234,12,1)',
			            	'rgba(123,234,12,1)',
			            	'rgba(123,234,12,1)',
			            	'rgba(123,234,12,1)'
		            	],	
			        }]
			    },
			    options: {
			        scales: {
			            yAxes: [{
			                ticks: {
			                    beginAtZero: true
			                }
			            }]
			        },
			        animation: {
			        	easing: 'easeOutCirc'
			        }
			    }
			});
			</script>
		</body>
	</html>