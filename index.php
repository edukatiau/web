<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Code by: The Ducks -->
	<meta charset="utf-8">
	<link rel="stylesheet" href="index.css">
	<link rel="stylesheet" href="bulma.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<title>Login</title>
</head>
<body>
	<div class="hero">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Entrar</button>
				<button type="button" class="toggle-btn" onclick="register()">Cadastre-se</button>
			</div>
			<div class="social-icons">
				<img src="fb.png">
				<img src="tw.png">
				<img src="gp.png">
			</div>
			<?php
				if(isset($_SESSION['nao_autenticado'])):
			?>
			<div class="notification is-danger" style="position: static; z-index: 10;">
                <p>ERRO: CPF ou senha inválidos.</p>
            </div>
            <?php
            	endif;
            	unset($_SESSION['nao_autenticado']);
            ?>
			<form id="login" class="input-group" action="login.php" method="POST">
				<input type="text" name="cpf" class="input-field" placeholder="CPF" required>
				<input type="password" name="senha" class="input-field" placeholder="Senha" required>
				<input type="checkbox" class="chech-box"><span>Lembrar senha</span>
				<button type="submit" class="submit-btn">Log in</button>
			</form>
			<form id="register" class="input-group">
				<input type="text" class="input-field" placeholder="CPF" required>
				<input type="email" class="input-field" placeholder="Email" required>
				<input type="password" class="input-field" placeholder="Senha" required>
				<input type="checkbox" class="chech-box"><span>Eu concordo com os termos e condições</span>
				<button type="submit" class="submit-btn">Register</button>
			</form>
		</div>
	</div>
		<script>
			var x = document.getElementById("login");
			var y = document.getElementById("register");
			var z = document.getElementById("btn");

			function register(){
				x.style.left = "-400px";
				y.style.left = "50px";
				z.style.left = "110px";
			}

			function login(){
				x.style.left = "50px";
				y.style.left = "450px";
				z.style.left = "0px";
			}
		</script>
</body>
</html>