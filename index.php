<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<?php



session_start();

include_once("bd.php");


if(isset($_SESSION['autenticado'])==true){
	header('Location: interno.php');
	
}


$login = '';
$selecionado = '';
if(isset($_COOKIE['login']))
{ 
	$login = $_COOKIE['login'];
	$selecionado = 'checked';
}
?>
<section class="vh-100" style="background-color: #508bfc;">
<form method="POST" action="login.php">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Entrar na Estante</h3>

            <div class="form-outline mb-4">
              <input type="text" class="form-control form-control-lg" name="login" value="<?=$login?>">
              <label class="form-label">Login</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" class="form-control form-control-lg" name="senha" />
              <label class="form-label">Senha</label>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" name="lembrar" <?=$selecionado?> />
              <label class="form-check-label" > Lembrar usuário </label>
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

            <hr class="my-4">
        </div>
        </div>
      </div>
    </div>
  </div>
  </form>
</section>
</body>
</html>
