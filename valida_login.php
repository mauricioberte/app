<?php

	$username = $_GET['username'];
	$password = $_GET['password'];
		valida_login($username,$password);
		function valida_login($user,$pwd){
			if ($user == "teste@teste.com") {
				if ($pwd =="teste") {
					header('Location: ' . "dashboard.php");
				}else{
					echo "senha inválida";
				}
			}else{				
				echo "usuario inválido";
			}
		}



	?>
