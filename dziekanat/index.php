
<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>putDziekanat</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/carousel.css" rel="stylesheet">
	<style type="text/css">
		body { padding-top: 70px; }
		#myCarousel { margin-top: -70px; }
	</style>
  </head>

<!-- ######################################################################### -->

<body>
	<div class="navbar-wrapper">
		<div class="container">

			<div class="navbar navbar-default" role="navigation">
				<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Włącz menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">putDziekanat</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="/misja">Nasza misja</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dla studenta<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="/wniosek">Wyślij wniosek</a></li>
								<li><a href="/sprawdz">Sprawdź status wniosku</a></li>
							</ul>
						</li>             
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="/admin">Panel Administratora</a></li>
								<li class="divider"></li>
								<li class="dropdown-header">Dodatkowe</li>
								<li><a href="/o-nas">O putDziekanat</a></li>
								<li><a href="/prywatnosc">Prywatność</a></li>
								<li><a href="/regulamin">Regulamin</a></li>
								<li><a href="/pomoc">Pomoc</a></li>
							</ul>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
				</div><!--/.container-fluid -->
			</div>

		</div>
	</div>


<!-- ######################################################################### -->

    <?php include('include/main.php'); ?>

<!-- ######################################################################### -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
