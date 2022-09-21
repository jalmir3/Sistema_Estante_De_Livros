<?php
include_once("bd.php");
$conexao = obterConexao();
    $id=$_GET['id'];
    $titulo=$_GET['titulo'];
    $isbn=$_GET['isbn'];
    $numpag=$_GET['numpaginas'];
    $numed=$_GET['numedicao'];
    $ano=$_GET['ano'];
    $idEdi=$_GET['id_editora'];
	
    $comandoSQL = "UPDATE livro SET titulo='$titulo',isbn='$isbn',numpaginas=$numpag,numedicao='$numed',anopublicacao='$ano',id_editora='$idEdi' WHERE id='$id'";
    $query = mysqli_query($conexao, $comandoSQL);

    header('Location: indexEstante.php');
    
 

	
?>