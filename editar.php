<?php
session_start();

	include_once("bd.php");
    $codigo=$_GET['codigo'];
	$livros = pesquisarLivro($codigo);
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
     <h1 class="brand-logo">Editar Livro</h1>
      <ul class="right hide-on-med-and-down">
        <li>Bem vindo: <?php echo $login ?></li>
        <li><a href="detalhes_livro.php"><i class="material-icons">refresh</i></a></li>
        <li><a href="logout.php"><i class="material-icons">exit_to_app</i></a></li>
      </ul>
    </div>
  </nav><br>
<form action="editarLivro.php" method="GET">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Titulo</th>
      <th scope="col">ISBN</th>
      <th scope="col">Nº Paginas</th>
      <th scope="col">Nº Edição</th>
      <th scope="col">Ano Publicação</th>
      <th scope="col">Id_Editora</th>
    </tr>
  </thead>
  <tbody>
  <?php
  foreach($livros as $livro){
?>
<tr>
      <td><input type="text" name="id" value="<?php echo $livro['id'];?>"></td>
      <td ><input type="text" name="titulo" value="<?php echo $livro['titulo'];?>"></td>
      <td ><input type="text" name="isbn" value="<?php echo $livro['isbn'];?>"></td>
      <td ><input type="text" name="numpaginas" value="<?php echo $livro['numpaginas'];?>"></td>
      <td ><input type="text" name="numedicao" value="<?php echo $livro['numedicao'];?>"></td>
      <td ><input type="text" name="ano" value="<?php echo $livro['anopublicacao'];?>"></td>
      <td ><input type="text" name="id_editora" value="<?php echo $livro['id_editora'];?>"></td>
      <td ><input class="btn btn-primary" type="submit" value="Salvar"></td>
</tr>

	<?php
   }

	?>
  </tbody>
</table>
</form>
<a href="indexEstante.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Voltar</a>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="materialize.min.js"></script>
</body>
</html>
    

       