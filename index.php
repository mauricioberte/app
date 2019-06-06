<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<div class="login-form mx-auto d-block w-100">
				<div class="page-header text-center">
					<h1>Login</h1>
				</div>
				<form action="valida_login.php" method="get" class="form-validate" >
					<div class="form-group">
						<div class="control-label">
							<label id="username-lbl" for="username" class="required invalid">Usuário<span class="star"> *</span></label>
						</div>
						<div class="controls">
							<input name="username" id="username" name="username" value="" class="validate-username required form-control invalid" size="25" required="required" aria-required="true" autofocus="" aria-invalid="true" type="text">
						</div>
					</div>
					<div class="form-group">
						<div class="control-label">
							<label id="password-lbl" for="password" name="password" class="required">Senha<span class="star"> *</span></label>
						</div>
						<div class="controls">
							<input name="password" id="password" value="" class="validate-password required form-control" size="25" maxlength="99" required="required" aria-required="true" type="password">
						</div>
					</div>
					<div class="d-flex justify-content-between">
						<div class="form-group d-flex justify-content-start">
							<div class="controls">
								<button type="submit" class="btn btn-primary">Entrar</button>
							</div>
						</div>
					</div>
					
				</form>
				
			</div>
		</div>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>