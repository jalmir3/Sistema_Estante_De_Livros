<?php
session_start();
include_once("bd.php");

$login = $_POST['login'];
$senha = $_POST['senha'];

if(isset($_POST['lembrar']) && $_POST['lembrar']=='on')
{ 
	setcookie('login', $login);
} else{
	 setcookie('login', null, -1);
}
$conexao = obterConexao();
$comandoSQL = "select * from usuario where login='$login' and senha='$senha'";
$result = mysqli_query($conexao, $comandoSQL);

if(mysqli_num_rows($result) > 0)
{
	
	$_SESSION['autenticado'] = true;
	$_SESSION['login'] = $login;

	header('Location: indexEstante.php');
	
} else{
	session_destroy();
	header('Location: index.php');
	
}