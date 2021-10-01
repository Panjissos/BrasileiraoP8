<?php  

	include('connect.php');

	$id = $_GET['id'];
	$user_type = $_GET['type'];

	if ($user_type == "user") {
		$kuery = "DELETE FROM `aposta` WHERE `aposta.id_user` = ".$id.";";
		mysqli_query($conn,$kuery);
	}

	$query = "DELETE FROM `usuario` WHERE `usuario`.`id` = ".$id.";";
	mysqli_query($conn,$query);
	header("location: user_list.php");
?>