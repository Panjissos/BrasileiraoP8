<?php  
	session_start();
	
	if (isset($_SESSION['admin'])) {
		header("location: admin.php");
	}elseif (isset($_SESSION['user'])) {
		header("location: teste.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cartola-IF</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>	
	<div class="container">
		<nav class="navbar navbar-light bg-primary justify-content-between">
		  <a class="navbar-brand">Cartola</a>
		  <form class="form-inline" method="POST" action="login.php">
		    <input class="form-control mr-sm-2" type="text" placeholder="Nickname" aria-label="Search" name="nick" required="">
		    <input type="password" name="senha" class="form-control mr-sm-2" placeholder="Senha" required="">
		    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		  </form>
		    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cadastrar-se</button>
		</nav>	
	</div>
</body>
</html>