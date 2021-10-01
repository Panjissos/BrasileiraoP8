<?php  

	include 'connect.php';
	$nome = $_POST['nick'];
	$senha = $_POST['senha'];
	$query = "SELECT id,user_type, senha FROM usuario WHERE nick = '$nome'";
	$res = mysqli_query($conn,$query); 
	$result = mysqli_fetch_assoc($res);
	if ($result['user_type'] and $result['user_type'] == 'admin' and password_verify($senha, $result['senha'])) {
		session_start();
		$_SESSION['admin'] = $result['id'];
		header('location: admin.php');
	}else if ($result['user_type'] and $result['user_type'] == 'user' and password_verify($senha, $result['senha'])) {
		session_start();
		$_SESSION['user'] = $result['id'];
		header("location: user.php");
	}else{
		header("location: index.php?error=user_name_or_password_incorrect");
	}
?>