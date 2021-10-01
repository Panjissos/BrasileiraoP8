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
	<title>Lista de usuários</title>
 	<title></title>
	
	<link rel="stylesheet" type="text/css" href="font/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<meta charset="utf-8">
 	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
 	
 	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

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
 <body >
 	<div class="container" style="margin-top: 50px;" >
		<div class="row">
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
      
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li class="sidebar">
            <a href="teste.php">
              <i class="fa fa-home"></i>
              <span>Início</span>
              
            </a>
          </li>
          
          
          
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer" style="">
      <a href="logout.php">
        <i class="fa fa-power-off"> </i><span class="badge-sonar"></span> <!--sair da sessao- -->
      </a>
    </div>
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
  
			

			<div class="col-md-12" >
				<div class="panel panel" >
				  <div class="panel-heading" style="background-color: #363636;">
				    <h3 class="panel-title"><font color="#F0FFFF"> Usuários</font></h3>

				  </div>
				  <div class="panel-body">
				  <table class="table table-striped table-bordered" id="myTable">
			<thead>
				<th> <font color="black">Nick </font>	</th>
				<th> <font color="black">Email </font>	</th>
				<th> <font color="black">Tipo de Usuário </font>	</th>
				<th> <font color="black">Ações</font>	</th>
			</thead>
			<tbody>
				<?php
								include 'connect.php';

								$query = "SELECT * FROM usuario";

								$res = mysqli_query($conn,$query);

								while ($resultado = mysqli_fetch_assoc($res)) {
									echo "<td>".ucfirst($resultado['nick'])."</td>";	
									echo "<td>".$resultado['email']."</td>";	
									echo "<td>".$resultado['user_type']."</td>";
									echo "<td>";
										echo '<a href="delete.php?id='.$resultado['id'].'&&type='.$resultado['user_type'].'"> <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button></a>
									  <a href="update.php?id='.$resultado['id'].'"> <button class="btn btn-sm btn-warning"><i class="fa fa-refresh"></i></button></a>';
									  echo "</td>";	
									echo "</tr>";	
								}	
							?>
				  </div>
				</div>
			</div>

			</tbody>
		</div>
	</div> 

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

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
        
        $(document).ready( function () {
        $('#myTable').DataTable({
            order: [[3, 'desc']], 
            pagingType: 'full_numbers'

           

        });
    } );

    </script>
 </body>
 </html>