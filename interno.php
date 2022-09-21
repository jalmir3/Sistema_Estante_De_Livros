<?php


session_start();


if(isset($_SESSION['autenticado'])==false || $_SESSION['autenticado']==false){
	header('Location: index.php');
	
}
$login = $_SESSION['login'];
?>

<html>
	<body>
		<div>
			Você está logado com o login: <?php echo $login ?>
		</div>
		<div>
			<button type="button" onclick="window.location='logout.php'">Sair</button>
		</div>
		
	</body>
</html>
