<!DOCTYPE html>

<html lang="pt-br">
	
	<head>
		<meta charset="UTF-8"/>
		<title>Estudante de Ouro</title>
		<link rel="stylesheet" type="text/css" href="css/estilogeral.css"/>
		<link rel="shortcut icon" href="img/favicon.ico" />
		
		<style>
			a{
				color: #00F;
				text-decoration: none;
			}
			
			iframe{
				min-height: 400px;
			}
		
			input[type=text], input[type=password] {
				width: 100%;
				padding: 12px 20px;
				margin: 8px 0;
				display: inline-block;
				border: 1px solid #ccc;
				box-sizing: border-box;
			}

			button {
				background-color: #4CAF50;
				color: white;
				padding: 14px 20px;
				margin: 8px 0px;
				border: none;
				cursor: pointer;
				width: 100%;
			}
			
			button:hover{
				background-color: #228B22;
			}
		</style>

		<script>
			
		</script>
		
	</head>
	
	<body>
		<header>
		
		</header>
		
		<section id="corpo">
			<h1>Criador de Ficha Online para OWDEN ANTIDILUVIANIS</h1>
		</section>
		
		<section id="fichaA">
			<canvas id="fichaLadoA" width="210" height="297"></canvas>
			
			<script>
				var c = document.getElementById("fichaLadoA");
				var ctx = c.getContext("2d");
				var img = document.getElementById("scream");
				ctx.drawImage(img, 0, 0);
			</script>
			
		</section>
		<footer>

		</footer>
	</body>
</html>