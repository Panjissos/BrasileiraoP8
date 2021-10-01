<?php

  session_start();
	
	include "connect.php";
	$query = "SELECT nome FROM `times` ";
	$query2 = "SELECT `time` FROM `aposta4` ";

	
	$result = mysqli_query($conn, $query);
	$result2 = mysqli_query($conn, $query2);

    /* fetch associative array */
    $i = 0;
    $j = 0;
    $guarda = array();
    $guarda2 = array();

   while ($row = mysqli_fetch_assoc($result)){
        $guarda[$i] = $row['nome'];
        $i++;
   }

   while ($row2 = mysqli_fetch_assoc($result2)) {
   		$guarda2[$j] = $row2['time'];
		$j++;
   }

   $calc = 0;
   $cont = 1;

   for ($i=0; $i < 20  ; $i++) { 
		for ($j=0; $j < 20 ; $j++) { 
			//echo $guarda[$i]." = ";
			//echo $guarda2[$i],"<br>";
			if ($guarda2[$i] == $guarda[$j]) {
				$calc += pow(($i - $j), 2);
				$cont++;
				break;
			}
		}
	}



	$calc = sqrt($calc);

  $query3 = "UPDATE `aposta` SET `apostaP` = '$calc' WHERE id_user = '".$_SESSION['user']."'";
  $q = mysqli_query($conn, $query3);
  //$query3 = "UPDATE `aposta` SET `aposta`= '$calc' WHERE id_user = '".$_SESSION['user']."'";


    
    
header("location: user.php");

 ?>

 