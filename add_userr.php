<?php  
	
	include 'connect.php';

	$query = mysqli_query($conn,"SELECT nome FROM usuario WHERE nome = ".$_POST['nick'].";");
	$deu_bom = False;
	if ($query) {
		$deu_bom = True;
	}

	if ($deu_bom == False) {
		$query = "INSERT INTO `usuario` (`id`, `email`, `senha`, `nick`, `pontuacao`, `user_type`) VALUES (NULL, '".$_POST['email']."', '".password_hash($_POST['senha'], PASSWORD_DEFAULT)."', '".$_POST['nick']."', '0', '".$_POST['user_type']."')";
		mysqli_query($conn,$query);
		header("location: add_user.php?error=ok");
	}else{
		//echo "o Erro chegou aq";
		header("location: add_user.php?error=".$erro);
	}

?>