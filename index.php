<?php
session_start();
include 'conexao.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Gest-Vendas</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	 <link rel="icon" type="imagem/png" href="assets/imgs/" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/business.jpg" alt="IMG">
				</div>
				<form action="login.php" method="POST">
					<span class="login100-form-title">
					    <p><img  class="bob" src="images/computer.png"></p><p style="font-size: 24px"><strong>Bem vindo!</strong></p>
<style>
.bob{

-webkit-transform: translateY(-8px);
transform: translateY(-8px);
}
50% {
-webkit-transform: translateY(-4px);
transform: translateY(-4px);
}
100% {
-webkit-transform: translateY(-8px);
transform: translateY(-8px);
}
}
@keyframes bob {
0% {
-webkit-transform: translateY(-8px);
transform: translateY(-8px);
}
50% {
-webkit-transform: translateY(-4px);
transform: translateY(-4px);
}
100% {
-webkit-transform: translateY(-8px);
transform: translateY(-8px);
}
}
@-webkit-keyframes bob-float {
100% {
-webkit-transform: translateY(-8px);
transform: translateY(-8px);
}
}
@keyframes bob-float {
100% {
-webkit-transform: translateY(-8px);
transform: translateY(-8px);
}
}
.bob {
display: inline-block;
vertical-align: middle;
-webkit-transform: perspective(1px) translateZ(0);
transform: perspective(1px) translateZ(0);
box-shadow: 0 0 1px transparent;
}
.bob:hover, .bob:focus, .bob:active {
-webkit-animation-name: bob-float, bob;
animation-name: bob-float, bob;
-webkit-animation-duration: .3s, 1.5s;
animation-duration: .3s, 1.5s;
-webkit-animation-delay: 0s, .3s;
animation-delay: 0s, .3s;
-webkit-animation-timing-function: ease-out, ease-in-out;
animation-timing-function: ease-out, ease-in-out;
-webkit-animation-iteration-count: 1, infinite;
animation-iteration-count: 1, infinite;
-webkit-animation-fill-mode: forwards;
animation-fill-mode: forwards;
-webkit-animation-direction: normal, alternate;
animation-direction: normal, alternate;    
}
</style>
						
				<!-- Form de login -->

					<div class="wrap-input100">
						<input class="input100" type="text" name="user" placeholder="Login" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100">
						<input class="input100" type="password" name="senha" placeholder="Senha" require>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<?php
						if (isset($_SESSION['nao_autenticado'])) :
						?>
							<div class="alert alert-danger" role="alert">
								<p>Usuário ou Senha Inválidos!</p>
							</div>
						<?php
						endif;
						unset($_SESSION['nao_autenticado']);
						?>

					<div class="container-login100-form-btn">
						<input type="submit" name="submit" class="login100-form-btn" value="Logar">
					</div>
					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Versão 18.05
							</div>
					<!-- Botão de voltar redirecionando 

					<a href="#">
			
						<div class="container-login100-form-btn">
							<input type="button" name="back" class="login100-form-btn" value="Voltar">
						</div>
						
						<br> 
						-->
					



					</a>

					

						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>