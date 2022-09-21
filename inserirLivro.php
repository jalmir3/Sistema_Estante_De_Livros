<?php
    include_once("bd.php");
    $conexao = obterConexao();
    $id=$_GET['id'];
    $titulo=$_GET['titulo'];
    $isbn=$_GET['isbn'];
    $numpag=$_GET['numpaginas'];
    $numed=$_GET['numedicao'];
    $ano=$_GET['ano'];
    $idEdit=$_GET['id_editora'];

    $idEd=$_GET['id_edi'];
    $nomeEd=$_GET['nome_edi'];
    $cidadeEd=$_GET['cidade'];
    $telefoneEd=$_GET['telefone'];
    $emailEd=$_GET['email_edi'];
    $siteEd=$_GET['site_edi'];

    $idAut=$_GET['id_aut'];
    $nomeAut=$_GET['nome_aut'];
    $emailAut=$_GET['email_aut'];
    $siteAut=$_GET['site_aut'];

  if($idAut>0){
  $comandoSQL3 = "INSERT INTO autor VALUES ('$idAut','$nomeAut','$emailAut','$siteAut')";
  $query = mysqli_query($conexao, $comandoSQL3);}
  if($idEd>0){
  $comandoSQL2 = "INSERT INTO editora VALUES ('$idEd','$nomeEd','$cidadeEd','$telefoneEd','$emailEd','$siteEd')";
  $query = mysqli_query($conexao, $comandoSQL2);}
  if($id>0){
  $comandoSQL1 = "INSERT INTO livro VALUES ('$id','$titulo','$isbn','$numpag','$numed','$ano','$idEdit')";
  $query = mysqli_query($conexao, $comandoSQL1);}
  if($id >0 && $idAut >0){
  $comandoSQL = "INSERT INTO livro_autor VALUES ('$id','$idAut')";
  $query = mysqli_query($conexao, $comandoSQL);}

  
  
  
    
	
	

    header('Location: indexEstante.php');
?>