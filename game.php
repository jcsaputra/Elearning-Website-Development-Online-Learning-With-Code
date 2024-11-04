
 <!DOCTYPE html>

<html lang="en" onclick="jump()">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/game.css">
    <title>Cerdas Bersama</title>

	<link rel="stylesheet" type="text/css" href="css/programming.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>

				<h1 style="color: white;" >Cerdas Bersama</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">

				<ul class="nav navbar-nav navbar-right">
					<li> <a href="index.php">Back to Home</a></li>
				</ul>

			</div>
		</div>
	</nav>

<br><br><br><br><br><br>
    <div class="game">
        <div id="character"></div>
        <div id="block"></div>
    </div>
    <p>Score: <span id="scoreSpan"></span></p>
</body>


<script src="js/game.js"></script>
</html>