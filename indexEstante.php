<?php
  session_start();

	include_once("bd.php");
	$lista_livros = pesquisarListaLivros();
  
  $codigo=[];
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
     <h1 class="brand-logo">Estante de Livros</h1>
      <ul class="right hide-on-med-and-down">
        <li>Bem vindo: <?php echo $login ?></li>
        <li><a href="indexEstante.php"><i class="material-icons">refresh</i></a></li>
        <li><a href="logout.php"><i class="material-icons">exit_to_app</i></a></li>
      </ul>
    </div>
  </nav><br>
<form action="bd.php" method="post">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nome do Livro</th>
      <th scope="col">Nome do Autor</th>
      <th scope="col">Nome da Editora</th>
      <th scope="col">Detalhes</th>
    </tr>
  </thead>
  <tbody>
   <?php
  for($i=0;$i<count($lista_livros); $i++){ 
   $lista_editora=pesquisarListaEditora();
  ?>
  <form action="" method="GET">
    <tr>
      <th scope="row"><?php echo $lista_livros[$i]['titulo'];?></th>
      <td ><a href="dados_autor.php?codigo=<?php echo $lista_livros[$i]['id']?>"><?php echo $lista_livros[$i]['nome'];?></a></td>
      <td ><a href="dados_editora.php?codigo=<?php echo $lista_editora[$i]['id']?>"><?php echo $lista_editora[$i]['nome'];?></a></td>
      <td ><a href="detalhes_livro.php?codigo=<?php echo $lista_livros[$i]['id']?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
</svg></a></td>
    </tr>
    </form>
	<?php
   }

	?>
  </tbody>
</table>
</form>
<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="materialize.min.js"></script>
</body>
</html>