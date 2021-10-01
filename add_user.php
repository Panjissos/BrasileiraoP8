<?php
if (!isset($_SESSION['admin'])) {
	header("location: index.php");
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Formulário</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 " style="margin-top: 12px;">
				<form method="POST" action="add_userr.php">
					<?php
					if (isset($_GET['error'])) {
						if ($_GET['error'] == 'user_found') {
							echo '<div class="alert alert-danger" role="alert">';
							echo "Já existe um usuário com este nome";
						} else if ($_GET['error'] == "email_found") {
							echo '<div class="alert alert-danger" role="alert">';
							echo "Já existe um email cadastrado com este nome";
						} else if ($_GET['error'] == "ok") {
							echo '<div class="alert alert-success" role="alert">';
							echo "Usuário cadastrado com sucesso";
						}
						echo "</div>";
					}
					?>
					<div class="form-row">

						<div class="form-group col-md-6">
							<label for="inputEmail4">Email</label>
							<input type="email" class="form-control" placeholder="Email" name="email" required="">
						</div>
						<div class="form-group col-md-6">
							<label for="inputPassword4">Senha</label>
							<input type="password" class="form-control" placeholder="Senha" name="senha" required="" maxlength="8">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-12">
							<label>Nick do usuário</label>
							<input type="text" name="nick" placeholder="Nick do usuário" class="form-control" required="">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label>Pontuação Padrão</label>
							<input type="number" disabled="" name="pontuacao" value="0" class="form-control" required="">
						</div>
						<button type="submit" class="btn btn-primary btn-block">Enviar</button>
				</form>
				<br><br>
				<div class="col-md-12">
					<button class="btn btn-secondary btn-block"><a href="index.php">Voltar</button></a>
				</div>

			</div>
		</div>
	</div>
</body>

</html>