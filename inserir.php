<?php
session_start();

	include_once("bd.php");
    $codigo=$_GET['codigo'];
	$livros = pesquisarLivro($codigo);
  $editora= pesquisarEditora($codigo);
  $autor= pesquisarAutor($codigo);
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
     <h1 class="brand-logo">Inserir Livro na Estante</h1>
      <ul class="right hide-on-med-and-down">
        <li>Bem vindo: <?php echo $login ?></li>
        <li><a href="inserir.php"><i class="material-icons">refresh</i></a></li>
        <li><a href="logout.php"><i class="material-icons">exit_to_app</i></a></li>
      </ul>
    </div>
  </nav><br>
<form action="inserirLivro.php" method="GET">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titulo</th>
      <th scope="col">ISBN</th>
      <th scope="col">Nº Paginas</th>
      <th scope="col">Nº Edição</th>
      <th scope="col">Ano Publicação</th>
      <th scope="col">Id_Editora</th>
    </tr>
  </thead>
  <tbody>
    <h2>Dados do Livro</h2>
   <?php
  //foreach($livros as $livro){
    
  ?>
<tr>
      <td ><input type="text" name="id" ></td>
      <td ><input type="text" name="titulo" ></td>
      <td ><input type="text" name="isbn"></td>
      <td ><input type="text" name="numpaginas"></td>
      <td ><input type="text" name="numedicao" ></td>
      <td ><input type="text" name="ano"></td>
      <td ><input type="text" name="id_editora"></td>
</tr>

	<?php
 //  }

	?>
  </tbody>
</table>
<table class="table">
  <thead class="thead-dark">
    <tr>
    <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Cidade</th>
      <th scope="col">Telefone</th>
      <th scope="col">Email</th>
      <th scope="col">Site</th>
    </tr>
  </thead>
  <tbody>
    <h2>Dados da Editora</h2>
   <?php
  //foreach($editora as $edi){
    
  ?>
<tr>
      <td ><input type="text" name="id_edi" ></td>
      <td ><input type="text" name="nome_edi" ></td>
      <td ><input type="text" name="cidade" ></td>
      <td ><input type="text" name="telefone" ></td>
      <td ><input type="text" name="email_edi" ></td>
      <td ><input type="text" name="site_edi"  ></td>
</tr>

	<?php
   //}

	?>
  </tbody>
</table>
</table>
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
    <h2>Dados do Autor</h2>
   <?php
  //foreach($autor as $aut){
    
  ?>
<tr>
      <td ><input type="text" name="id_aut" ></td>
      <td ><input type="text" name="nome_aut" ></td>
      <td ><input type="text" name="email_aut" ></td>
      <td ><input type="text" name="site_aut" ></td>
      <td ><input class="btn btn-primary" type="submit" value="Salvar"></td>
</tr>

	<?php
  // }

	?>
  </tbody>
</table>
</form>
<a href="indexEstante.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Voltar para a Estante</a>

<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="materialize.min.js"></script>
</body>
</html>
    

       