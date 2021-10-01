<?php  
	

	include "connect.php";

	session_start();  
		if (!isset($_SESSION['admin'])) {
			header("location: index.php");
		}
    $nome = "SELECT nick FROM usuario WHERE id = '".$_SESSION['admin']."'";

    $name = mysqli_query($conn, $nome);

    $n = mysqli_fetch_assoc($name);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulário</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <title>Hairon Champ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
 

</head>

<body>



  <div class="container-fluid">
<div class="page-wrapper chiller-theme toggled">

  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">Hairon Champs</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic">
          <img class="img-thumbnail"style="width: 100px; height: 50px;" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
            alt="User picture">
        </div>
        <div class="user-info">
          <span class="user-name"><br>
            <strong><?php echo $n['nick']; ?></strong>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->
    
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li class="sidebar">
            <a href="user_list.php">
              <i class="fa fa-home"></i>
              <span>Editar Usuário</span>
              
            </a>
          </li>
          
          
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer">
      <a href="logout.php">
        <i class="fa fa-power-off"> </i><span class="badge-sonar"></span> <!--sair da sessao- -->
      </a>
    </div>
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">

	<div class="container">
		<div class="row">
			<div class="col-md-8 " style="margin-top: 150px; margin-left: 150px;">
				<form method="POST" action="update_user.php">
					<?php
					if(isset($_GET['error'])){
						if($_GET['error'] == 'user_found'){
							echo '<div class="alert alert-danger" role="alert">' ;
  							echo "Já existe um usuário com este nome";
						}else if ($_GET['error'] == "email_found") {
							echo '<div class="alert alert-danger" role="alert">' ;
							echo "Já existe um email cadastrado com este nome";
						}else if ($_GET['error'] == "ok") {
							echo '<div class="alert alert-success" role="alert">' ;
							echo "Usuário cadastrado com sucesso";
							echo "</div>";
						}
					}
					include 'connect.php';

					$id = $_GET['id'];

					$query = "SELECT * FROM usuario WHERE id =".$id;
					$r = mysqli_query($conn,$query);

					$res = mysqli_fetch_assoc($r);
					/*echo "<pre>";
						var_dump($res);
					echo "</pre>";*/
				?>
			  <label><h3>Editar <?php echo $res['nick']; ?></h3></label>
			  <div class="form-row">
			  	<input type="hidden" name="id" value="<?php echo $res['id'];?>">
			    
			      <label for="inputEmail4"><strong>Email</strong></label>
			      <input type="email" class="form-control" placeholder="Email" name="email" required="" value="<?php echo($res['email']);?>">
			    
			    
			      <label for="inputPassword4"><strong>Senha</strong></label>
			      <input type="password" class="form-control" placeholder="Senha" name="senha" required="" maxlength="8"  value="<?php echo($res['senha']);?>">
			    
			  </div> 
			  <div class="form-row">
			  	<div class="form-group col-md-6">
			  		<label><strong>Nick do usuário</strong></label>
			  		<input type="text" name="nick" placeholder="Nick do usuário" class="form-control" required=""  value="<?php echo($res['nick']) ;?>">
			  	</div>
			  
			    <div class="form-group col-md-6">
			      <label for="inputEstado"><strong>Tipo de usuário</strong></label>
			      <select name="user_type" class="form-control">
			        <option value="admin" required="">administrador</option>
			        <option value="user" required="" selected="">usuário</option>
			      </select>
			    </div>
			  </div>
			  <button type="submit" class="btn btn-primary btn-block">Enviar</button>
			</form>
			<br><br>
			  <div class="col-md-12">
			  	<button class="btn btn-secondary btn-block"><a href="index.php">Voltar</button></a>
			  </div>

			</div>
		</div>
	</div>
</div>
</main>
</body>
<script>$("#sortable").sortable();</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

      <script type="text/javascript">
        jQuery(function ($) {

    $(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(200);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(200);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#close-sidebar").click(function() {
  $(".page-wrapper").removeClass("toggled");
});
$("#show-sidebar").click(function() {
  $(".page-wrapper").addClass("toggled");
});


   
   
});
      </script>
</html>