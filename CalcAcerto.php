<?php 
	
	include "connect2.php";
	include "connect.php";

  session_start();

	$query = "SELECT nome FROM `times` ";
	$query2 = "SELECT `time` FROM aposta4 ";
  
  $verif = "SELECT id_user, acerto FROM `aposta` WHERE id_user = '".$_SESSION['user']."'";
  $verfi = mysqli_query($conn, $verif);

  $ver = mysqli_fetch_assoc($verfi);
	$result = mysqli_query($conn, $query);
	$result2 = mysqli_query($conn, $query2);

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
   $cont = 0;

   foreach ($guarda as $key => $value) {
			if ($value == $guarda2[$key]){
					$cont ++;
			};
		}
	$calc = ($cont*100)/20;

  if ($ver['acerto'] > 0) {
    header("location: user.php?apos=ja_apostou");
      
  }else{


  $query4 = "INSERT INTO `aposta` (`id_user`, `acerto`, apostaP) VALUES ('".$_SESSION['user']."', '$calc', 0)";

  //$q = $mysqli->query($query4);
  $q = mysqli_query($conn, $query4);
    header("location: CalcDis.php");
  }

?>