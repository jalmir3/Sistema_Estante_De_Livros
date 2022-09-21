<?php
  session_start();
	include_once("bd.php");
  $codigo=$_GET['codigo'];
	$autores = pesquisarAutor($codigo);

  if(isset($_SESSION['autenticado'])==false || $_SESSION['autenticado']==false){
    header('Location: index.php');
    
  }
  $login = $_SESSION['login'];
?>

<html>
<head>
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
<nav>
    <div class="nav-wrapper">
     <h1 class="brand-logo">Dados do Autor</h1>
      <ul class="right hide-on-med-and-down">
        <li>Bem vindo:<?php echo $login ?></li>
        <li><a href="logout.php"><i class="material-icons">exit_to_app</i></a></li>
      </ul>
    </div>
  </nav><br>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Site</th> 
    </tr>
  </thead>
  <tbody>
   <?php
  foreach($autores as $autor){ 
  ?>
    <tr>
      <th><?php echo $autor['id'];?></th>
      <td ><?php echo $autor['nome'];?></td>
      <td ><?php echo $autor['email'];?></td>
      <td ><?php echo $autor['website'];?></td>
    </tr>
	<?php
   }

	?>
  </tbody>
</table>
<a href="indexEstante.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Voltar para a Estante</a>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="materialize.min.js"></script>
</body>
</html>