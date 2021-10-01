<?php 
	
	include "connect.php";
	include "connect2.php";
	session_start();

	$ordem = 1 ;

	foreach ($_POST as $val => $v) {
		$sql = "UPDATE aposta4 SET `time` = '".$v."' WHERE `aposta4`.`id` = '$ordem'";

			//$query = mysqli_query($conn, $sql);
			$query = $mysqli->query($sql);
		$ordem++;
	}

	header("location: CalcAcerto.php");

		

 ?>

