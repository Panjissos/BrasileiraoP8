<?php 
	include "connect.php";

  session_start();

  if (!isset($_SESSION['user'])) {
        header("location: index.php");
    } 

	$query = "SELECT nome FROM times ORDER BY nome ASC";
  $query2 = "SELECT usuario.nick, aposta.acerto, aposta.apostaP FROM usuario,aposta WHERE aposta.id_user = usuario.id ORDER BY aposta.apostaP ASC";
  $nome = "SELECT nick FROM usuario WHERE id = '".$_SESSION['user']."'";

  $name = mysqli_query($conn, $nome);

  $n = mysqli_fetch_assoc($name);
	

	$q = mysqli_query($conn, $query);
  $q2 = mysqli_query($conn, $query2);



 ?>

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
        <a href="user.php">Hairon Champs</a>
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
            <span>Menu</span>
          </li>
          <li class="sidebar">
            <a href="times.php">
              <i class="  fas fa-chart-line"></i>
              <span>Tabela de times</span>
            </a>
            
          </li>
                </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer" style="">
      <a href="logout.php">
        <i class="fa fa-power-off"></i><span class="badge-sonar"></span> <!--sair da sessao- -->
      </a>
    </div>
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
    	 <label><p>   <h3>Champson</h3> </p></label>
     <div class="row">
       
       <div class="col-sm-6">
        <form method="POST" action="updateAposta.php">
        <ol class="list-group-item" id="sortable">

          <?php
           while ($res = mysqli_fetch_assoc($q)) {
            echo '<li class="list-group-item list-group-item-secondary">';
            echo '<img src="imagens/'.$res['nome'].'.png">'." "."<strong>".ucfirst($res['nome']."</strong>");
            echo '<input type="hidden" name="'.$res['nome'].'" value="'.$res['nome'].'"> ';
            echo "</li>";
          } ?>

      </ol>
      
      <button type="submit" class="btn form-control btn-dark">Enviar</button>
        </form>
  </div>

    <div class="col-sm-6" >
        <div class="panel panel" >
          <div class="panel-heading" style="background-color: #363636;">
            <h3 class="panel-title"><font color="#F0FFFF"> Apostas</font></h3>

          </div>
          <div class="panel-body">
          <table class="table table-striped table-bordered" id="myTable">
      <thead>
        <th> <font color="black">Nome </font> </th>
        <th> <font color="black">Acertos </font> </th>
        <th> <font color="black">Aposta </font> </th>
       
      </thead>
      <tbody>
        <?php 
          while ($dado2 = mysqli_fetch_assoc($q2)) {?>
           <tr>
            <td><?=$dado2['nick']?></td>
            <td><?=$dado2['acerto']?>%</td>
            <td><?=$dado2['apostaP']?></td>
            
            
          <?php } ?>
           </tr>  
      </tbody>
    </table>
          </div>
        </div>
      </div>

     </div>
   
    </div>

  </main>
  <!-- page-content" -->
</div>
<div>
<!-- page-wrapper -->
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
      
</body>

</html>
