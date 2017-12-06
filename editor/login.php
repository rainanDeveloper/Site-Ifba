<?php if (isset($_SESSION['login'])){
	header('Location: http://localhost/Site%20ifba/editor/');
} ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login - Sistema de edição</title>
	<link rel="stylesheet" type="text/css" href="../CSS/login.css">
</head>
<body>
	<section class="login-container">
		<a href="../"><img src="../images/IFBA-LOGO.png"></a>
		<form action="source/Login.php" method="post">
			<input type="text" placeholder="Login" name="Login-usr">
			<input type="password" placeholder="Senha" name="Senha">
			<input type="submit" name="btn-login" value="Login">
		</form>
	</section>
</body>
</html>