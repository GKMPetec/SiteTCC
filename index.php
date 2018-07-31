<!--
TODO:
	-Develop showing room list
	-Develop showing room-content
	-Develop showing room-chat
	-Develop php to sidebar
	-Develop the database
-->
<!DOCTYPE html>
<?php
	function showGroup($g){
		if($g == 1){
			echo("<h1>Grupo 1</h1>");
		}else if($g == 2){
			echo("<h1>Grupo 2</h1>");
		}else{
			echo("<h1>Grupo Inválido</h1>");
		}
	}
?>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
	<!-- CSS -->
	<link href="css/style/home.css" rel="stylesheet">
	
	<!-- Javascript -->
	
	
	<title>
	<?php
		showGroup($_GET["g"]);
	?>
	</title>
	
</head>

<body>
<div id="tudo" class="container-fluid" style="width:100%">
	<!-- Cabeçalho -->
	<div id="header" class="row header">
		<div id="base" class="col-sm-2 bg-primary">
			<a href="#" class="btn btn-primary btn-block">Home</a>
		</div>
		<div class="col-sm-10 bg-info">
		</div>
	<div>
	
	<!-- Resto da Página -->
	<div id="pageBody" class="pageBody">
		<!-- Menu Lateral -->
		<div id="sideMenu" class="sideMenu">
			<div class="group">
				<a href="?g=1">Grupo 1</a>
			</div>
			<div class="group">
				<a href="?g=2">Grupo 2</a>
			</div>
		</div>
		
		
		<div id="main" class="main container-fluid" >
			<script>
				document.getElementById("main").style.marginLeft = document.getElementById("tudo").clientWidth/6 + "px";
			</script>
			<?php
				if(isset($_GET["g"]) && ($_GET["g"] != "")){
					showGroup($_GET["g"]);
				}else{
					echo("<h1>Não há nenhum grupo selecionado.</h1>");
				}
			?>
		</div>
	</div>
</div>
</body>
</html>