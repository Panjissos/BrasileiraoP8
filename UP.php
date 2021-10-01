<?php 
	
	include "connect2.php";

//	 $query4 = "INSERT INTO `aposta` (`id_user`, `acerto`) VALUES (1 , 2)";

	$calc = 9;

	$query3 = "UPDATE `aposta` SET `apostaP`= '$calc' WHERE id_user = 4";
  	$q = $mysqli->query($query3);

 ?>