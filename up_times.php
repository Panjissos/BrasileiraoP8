<?php 
	
	include "connect2.php";
	session_start();

	$ordem = 1 ;

	foreach ($_POST as $val => $v) {
			$sql = "UPDATE times SET `nome` = '".$v."' WHERE `times`.`id` = '$ordem'";

			//$query = mysqli_query($conn, $sql);
			$query = $mysqli->query($sql);
		$ordem++;
	}

	header("location: admin.php");
?>