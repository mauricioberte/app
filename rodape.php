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