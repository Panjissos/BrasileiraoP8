<?php  


	function banco($nome,$pontuacao){
		include 'connect.php';
		$res = mysqli_query($conn,"SELECT nome FROM `times`");
		while ($resultado = mysqli_fetch_assoc($res)) {
			if ($resultado['nome'] == $nome) {
				$query = "UPDATE `times` SET pontuacao = '".$pontuacao."' WHERE `times`.`nome` = '".$nome."'"; 
				mysqli_query($conn,$query);
				return;
			}else{
				continue;
			}
		}
	}

	foreach ($_POST as $key => $value) {
		
		if(banco($key,$value)){
			break;
		}
	}

	header("location: admin.php");
?>