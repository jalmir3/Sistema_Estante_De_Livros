	<?php


	function obterConexao(){
		$conexao = mysqli_connect("localhost", "root1", "aluno", 
		"estante");
		return $conexao;
	}	
	function pesquisarListaAutores(){
		$conexao = obterConexao();
		$comandoSQL = "select * from autor";
		$query = mysqli_query($conexao, $comandoSQL);
		$resultado = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $resultado;
	}
	function pesquisarListaLivros(){
		$conexao = obterConexao();
		$comandoSQL = "select * from livro
		inner join autor on livro.id = autor.id";
		$query = mysqli_query($conexao, $comandoSQL);
		$resultado = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $resultado;
	}
	function pesquisarListaEditora(){
		$conexao = obterConexao();
		$comandoSQL = "select * from livro
		inner join editora on livro.id_editora=editora.id";
		$query = mysqli_query($conexao, $comandoSQL);
		$resultado = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $resultado;
	}
	function pesquisarAutor($codigo){
		$conexao = obterConexao();
		$comandoSQL = "select * from autor where id=$codigo";
		$query = mysqli_query($conexao, $comandoSQL);
		$resultado = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $resultado;
	}
	function pesquisarEditora($codigo){
		$conexao = obterConexao();
		$comandoSQL = "select * from editora where id=$codigo";
		$query = mysqli_query($conexao, $comandoSQL);
		$resultado = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $resultado;
	}
	function pesquisarLivro($codigo){
		$conexao = obterConexao();
		$comandoSQL = "select * from livro where id=$codigo";
		$query = mysqli_query($conexao, $comandoSQL);
		$resultado = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $resultado;
	}
	function inserirLivro($id,$titulo,$isbn,$numpag,$numed,$ano,$idEdit){
		$conexao = obterConexao();
		$comandoSQL = "INSERT INTO livro VALUES ('$id','$titulo','$isbn','$numpag','$numed','$ano','$idEdit')";
		$query = mysqli_query($conexao, $comandoSQL);
		$resultado = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $resultado;
	}
	function validarUsuario($login,$senha){
		$conexao = obterConexao();
		$comandoSQL = "SELECT userLogin,senha FROM usuario WHERE userLogin ='$login' AND  senha = '$senha'";
		$query = mysqli_query($conexao, $comandoSQL);
		$resultado = mysqli_fetch_all($query, MYSQLI_ASSOC);
		return $comandoSQL;
	}
	
	
