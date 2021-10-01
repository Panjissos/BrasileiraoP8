<?php  
	session_start();
	
	if (isset($_SESSION['admin'])) {
		header("location: admin.php");
	}elseif (isset($_SESSION['user'])) {
		header("location: user.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body style="background-color: #1C1C1C;">

<!------ Include the above in your HEAD tag ---------->

<div class="login-reg-panel" style="background-color: black;">
	<div class="container">
		<div class="container">
			
		<div class="login-info-box">
			
			<h2>Já possui conta?</h2>
			<p></p>
			<label id="label-register" for="log-reg-show">Login</label>
			<input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
		</div>
		</div>
		<div class="container">
			
			<div class="register-info-box">
				<h2>Tem conta?	</h2>
				<p>Tenha fé no seu avô</p>
				<label id="label-login" for="log-login-show">Cadastrar-se</label>
				<input type="radio" name="active-log-panel" id="log-login-show">
			</div>
		</div>					
	
		<div class="container">
			
			<div class="white-panel"> <!-- Login-->
				<div class="login-show">
					<form action="login.php" method="post">
						<h2>LOGIN</h2>
						<input type="text" placeholder="Nickname" name="nick">
						<input type="password" placeholder="Senha" name="senha">
						<button type="submit" class="btn btn-lg btn-dark">Enviar</button>
					</form>						
				</div>
				<div class="register-show">
					<form action="add_userr.php" method="post">					
						<h2>CADASTRAR-SE</h2><br>
						<input type="email" class="form-control" placeholder="Email" name="email" required="">
						<input type="text" name="nick" placeholder="Nick" class="form-control" required="" >
						<input type="password" class="form-control" placeholder="Senha" name="senha" required="" maxlength="8">
						<input type="hidden" name="user_type" value="user">
						<button type="submit" class="btn btn-lg btn-dark">Registrar-se</button>
					</form>
					

				</div>
			</div>
		</div>
	</div>
	</div>

	<script type="text/javascript">
			
	    $(document).ready(function(){
	    $('.login-info-box').fadeOut();
	    $('.login-show').addClass('show-log-panel');
	});


	$('.login-reg-panel input[type="radio"]').on('change', function() {
	    if($('#log-login-show').is(':checked')) {
	        $('.register-info-box').fadeOut(); 
	        $('.login-info-box').fadeIn();
	        
	        $('.white-panel').addClass('right-log');
	        $('.register-show').addClass('show-log-panel');
	        $('.login-show').removeClass('show-log-panel');
	        
	    }
	    else if($('#log-reg-show').is(':checked')) {
	        $('.register-info-box').fadeIn();
	        $('.login-info-box').fadeOut();
	        
	        $('.white-panel').removeClass('right-log');
	        
	        $('.login-show').addClass('show-log-panel');
	        $('.register-show').removeClass('show-log-panel');
	    }
	});
  
	</script>

</body>
</html>