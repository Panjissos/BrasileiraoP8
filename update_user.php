<?php  

	include 'connect.php';

	$query = "UPDATE `usuario` SET `nick` = '".$_POST['nick']."', `email` = '".$_POST['email']."', `user_type` = '".$_POST['user_type']."', `senha` = '".password_hash($_POST['senha'], PASSWORD_DEFAULT)."' WHERE `usuario`.`id` = '".$_POST['id']."';";

	mysqli_query($conn,$query);
	//echo "Funfando";
	header("location: user_list.php?update=ok");
?>