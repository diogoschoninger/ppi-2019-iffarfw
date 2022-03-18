<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="./src/styles/style.css">

	<link rel="shortcut icon" href="./src/img/icone.png">

	<title>CTG Querência Xucra</title>
</head>

<body <?php if (isset($_GET["p"]) && $_GET["p"] =="home") echo "onload='map()'" ?> >
	<nav class="header" id="header">
		<div class="container">
			<div class="row">
				<a href="?p=home" class="brand col-md-12 col-lg text-center" id="brand">CTG Querência Xucra</a>
				
				<span class="col align-self-center text-right">
					<a class="link" href="mailto:maribergenthal@hotmail.com" target="blank">maribergenthal@hotmail.com</a>
					<span>55 99657-6964</span>
				</span>
			</div>
		</div>
	</nav>

	<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top p-0" id="navbar">	
		<div class="container">
			<button class="navbar-toggler mr-auto border-0" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação" id="btn_nav">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav pl-3">
					<a class="nav-link py-3" href="?p=home">Home</a>

					<ul class="p-0 m-0">
						<li class="nav-item dropdown list-unstyled">
							<a class="nav-link dropdown-toggle py-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">História</a>

							<div class="dropdown-menu drop my-0 mr-0 ml-3 w-25" aria-labelledby="navbarDropdown">
								<a class="dropdown-item px-3 drop-item" href="?p=historia">Sobre a entidade</a>
								<a class="dropdown-item px-3 drop-item" href="?p=chama">Chama Crioula</a>
								<a class="dropdown-item px-3 drop-item" href="?p=chimarrao">Chimarrão</a>
								<a class="dropdown-item px-3 drop-item" href="?p=cavalgadas">Cavalgadas</a>
							</div>
						</li>
					</ul>
					
					<a class="nav-link py-3" href="?p=invernadas">Invernadas</a>
					<a class="nav-link py-3" href="?p=patroes">Patrões</a>
				</div>
			</div>
		</div>
	</nav>

	<?php
		if (!(isset($_GET["p"]))) include("./src/pages/home.html");
		else include("./src/pages/" . $_GET["p"] . ".html");
	?>

	<div class="footer">
		<div class="container">
			<span class="copy">&copy;2019 - CTG Querência Xucra - Todos os direitos reservados</span>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script>
		var rodar_btn = 0

		btn_nav.onclick = function() {
			btn_nav.style.transition = "0.5s"

			if (rodar_btn == 0) {
				btn_nav.style.transform = "rotate(180deg)"
				rodar_btn = 1
			} else {
				btn_nav.style.transform = "rotate(0deg)"
				rodar_btn = 0
			}
		}
	</script>
</body>
</html>
