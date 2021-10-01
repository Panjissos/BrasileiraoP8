
<?php include "connect2.php";

      session_start();




      $query = "SELECT * FROM times ORDER BY nome ASC";
      $query2 = "SELECT * FROM usuario ORDER BY pontuacao ASC";

      $a = $mysqli->query($aposta);
      
      $q = $mysqli->query($query); 
      $q2 = $mysqli->query($query2); ?>
<!DOCTYPE html>
<html>
<head>
	<title>User</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
 

</head>

<body>
<div class="page-wrapper chiller-theme toggled">

  <a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="#">Hairon Champ</a>
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
          <span class="user-name"><?php  session_start(); echo $_SESSION['user']; ?><!-- <?php //var_dump($_SESSION['admin']); ?>-->
            <strong>Fulano</strong>
          </span>
          <span class="user-role">User</span>
          <span class="user-status">
            <i class="fa fa-circle"></i>
            <span>Online</span>
          </span>
        </div>
      </div>
      <!-- sidebar-header  -->
      <div class="sidebar-search">
        <div>
          <div class="input-group">
            <input type="text" class="form-control search-menu" placeholder="Search...">
            <div class="input-group-append">
              <span class="input-group-text">
                <i class="fa fa-search" aria-hidden="true"></i>
              </span>
            </div>
          </div>
        </div>
      </div>
      <!-- sidebar-search  -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>

          <li class="sidebar">
            <a href="Aposta.<?php  ?>">
              <i class="fa fa-tachometer-alt"></i>
              <span>Aposta</span>
              <span class="badge badge-pill badge-warning">New</span>
            </a>
            
          </li>
          <!--<li class="sidebar-dropdown">-->
            <li>
            <a href="user_list.php">
              <i class="fa fa-shopping-cart"></i>
              <span>Lista de users</span>
              <span class="badge badge-pill badge-danger"><!--Aq da pra colocar um numero indicando qtd de algo --></span>
            </a>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="far fa-gem"></i>
              <span>Components</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">General</a>
                </li>
                <li>
                  <a href="#">Panels</a>
                </li>
                <li>
                  <a href="#">Tables</a>
                </li>
                <li>
                  <a href="#">Icons</a>
                </li>
                <li>
                  <a href="#">Forms</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-chart-line"></i>
              <span>Charts</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Pie chart</a>
                </li>
                <li>
                  <a href="#">Line chart</a>
                </li>
                <li>
                  <a href="#">Bar chart</a>
                </li>
                <li>
                  <a href="#">Histogram</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Maps</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Google maps</a>
                </li>
                <li>
                  <a href="#">Open street map</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="header-menu">
            <span>Extra</span>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Documentation</span>
              <span class="badge badge-pill badge-primary">Beta</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-calendar"></i>
              <span>Calendar</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-folder"></i>
              <span>Examples</span>
            </a>
          </li>
        </ul>
      </div>
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->
    <div class="sidebar-footer" style="">
      <a href="#">

        <i class="fa fa-bell"></i>
        <span class="badge badge-pill badge-warning notification">TESTE</span><!-- Tabela de times  -->
      </a>
      <a href="#">
        <i class="fa fa-cog"></i>
        <span class="badge-sonar"></span><!--Coloca um link pra config pro perfil do individuo -->
      </a>
      <a href="#">
        <i class="fa fa-power-off"> </i> <!--sair da sessao- -->
      </a>
    </div>
  </nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
    <h2>TESTE</h2>
      <div class="row">
        
      
      <hr>

        <div class="col-sm-6" >
        <div class="panel panel" >
          <div class="panel-heading" style="background-color: #363636;">
            <h3 class="panel-title"><font color="#F0FFFF"> HaironChamp</font></h3>

          </div>
          <div class="panel-body">
          <table class="table table-striped table-bordered" id="myTable">
      <thead>
        <th> <font color="black">Nome </font> </th>
       
      </thead>
      <tbody>
        <?php  
                  include 'connect.php';

                  $query = "SELECT * FROM `times` ORDER BY `times`.`pontuacao` DESC";
                  $res = mysqli_query($conn,$query);
                  
                  $i = 1;
                  while ($resultado = mysqli_fetch_assoc($res)) {
                    echo "<tr>";
                      echo "<td>";
                        echo $i;
                      echo "</td>";
                      echo "<td>";
                        echo '<img width="30" height="30" role="presentation" src="imagens/'.$resultado['nome'].'.png">';
                       
                        echo ucfirst($resultado['nome']);
                      echo "</td>";

                     
                      

                    echo "</tr>";
                    $i++;
                  }
                ?>
      </tbody>
    </table>
    <?php $q->close(); ?>
          </div>
        </div>
      </div>
      

       <div class="col-sm-6" >
        <div class="panel panel" >
          <div class="panel-heading" style="background-color: #363636;">
            <h3 class="panel-title"><font color="#F0FFFF"> Pontuação</font></h3>

          </div>
          <div class="panel-body">
          <table class="table table-striped table-bordered" id="myTable">
      <thead>
        <th> <font color="black">Pontuacao </font> </th>
       
      </thead>
      <tbody>
        <?php 
          while ($dado2 = mysqli_fetch_assoc($q2)) {?>
           <tr>
            <td><?=$dado2['pontuacao']?></td>
            
            
          <?php } ?>
           </tr>  
      </tbody>
    </table>
          </div>
        </div>
      </div>

    

      
    </div>


     
      </div>
    </div>

  </main>
  <!-- page-content" -->
</div>
<!-- page-wrapper -->
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