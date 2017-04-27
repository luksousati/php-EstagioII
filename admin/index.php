<?php include("includes/conecta.inc.php"); ?>
<html>
<head>
	<meta charset="UTF-8"/>
	<link href="../outros/bootstrap/css/bootstrap.css" rel="stylesheet"/>
</head>
<body>
	<div class="container">
		<div class"col-lg-12">
			<h1 class="pag-header">Painel Admin</h1>
			<nav>
			<ol class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li><a href="?pg=listar">Listar</a></li>
				<li><a href="?pg=inserir">Inserir</a></li>
			</ol>
			</nav>
		</div>
		<div>
			<?php
            if(empty($_SERVER["QUERY_STRING"])){
                $var = "home.php";
                include_once("$var");
            }else{
                $pg = $_GET['pg'];
                include_once("$pg.php");
            }
			?>
		</div>
<!-- 		<?php include("../arquivos/footer.php");?> -->
	</div>
</body>
</html>