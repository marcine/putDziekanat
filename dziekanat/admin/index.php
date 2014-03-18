<?php
	session_start();

	if(isset($_POST['login']) && isset($_POST['password']))
	{
		$login = $_POST['login'];
		$haslo = $_POST['password'];
		if($login=="admin" && $haslo=="admin") 
		{
			$_SESSION['login'] = $login;
		}
	}
	if(isset($_POST['logout']))
	{
		unset($_SESSION['login']);
		session_destroy();
	}

	if(isset($_SESSION['login']))
	{
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Admin putDziekanat</title>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../bootstrap/css/dashboard.css" rel="stylesheet">
</head>

<body>

	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Włącz menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">putDziekanat</a>
			</div>
			<div class="navbar-collapse collapse">
				<form class="navbar-form navbar-right" role="form" action="index.php" method="POST">
					<button class="btn btn-danger" name="logout" type="submit">Sign out</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Ustawienia</a></li>
							<li><a href="#">Moje konto</a></li>
							<li><a href="#">Lorem ipsum</a></li>
							<li><a href="#">Dolor sit amet</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">Dodatkowe</li>
							<li><a href="#">Pomoc</a></li>
							<li><a href="#">O putDziekanat</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3 col-md-2 sidebar">
				<ul class="nav nav-sidebar">
					<li><a href="/admin">Home</a></li>
					<li><a href="aktualnosci">Aktualności</a></li>
					<li><a href="wnioski">Wnioski</a></li>
				</ul>
				<ul class="nav nav-sidebar">
					<li><a href="">Lorem ipsum</a></li>
				</ul>
			</div>
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				
				<?php include('include/main.php'); ?>
				
			</div>
		</div>
	</div>
	
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$('#tabs').tab();
		});
	</script> 
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

<?php
  }
  else
  {
    include("login.php");
  }
?>