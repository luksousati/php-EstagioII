<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="widith=device-width"/>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
	<link rel="stylesheet" href="css/estilo.css">
	<title>Luciano</title>
</head>


<body>


	<?php
		include_once("header.php"); 
			if(empty($_SERVER['QUERY_STRING'])){
				include_once("slider/slider.php");
				$var = "conteudo.php";
				include_once($var);
			}else if (isset($_GET['pg'])){
				$pg = $_GET['pg'];
				if(file_exists($pg.".php")){
					include_once($pg.".php");
				}else{
					include_once("404.php");
				}
			}

		echo '</div>';
		include_once ("footer.php");


	?>







<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>