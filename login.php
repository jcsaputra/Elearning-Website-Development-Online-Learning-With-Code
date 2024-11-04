<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

	<title>Cerdas Bersama</title>

	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/login.css">

	<link rel="shortcut icon" type="text/css" href="img/mylogo.png">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<meta name="google-signin-client_id" content="808976312783-k901nr0n50did222qa275k0umvn4rpi1.apps.googleusercontent.com">
	
	<script src="https://apis.google.com/js/platform.js" async defer></script>

	<script type="text/javascript" src="js/google_signin.js"></script>

<script type="text/css">
</script>
</head>
<body>
	<section class="slider text-center" id="slider">
	<h1 id="myhead">Cerdas Bersama</h1>
		<div class="modal-dialog ">
			<div class="modal-content">
				<h3 id="login-heading">Login</h3>		
			<div class="modal-body" >
			<div class="left-box">
			<form method="POST" action="validation.php" onsubmit="return validation()">
					<div class="form-group">
						<label><i class="fa fa-user fa-2x"></i>  Username :</label>
						<input type="text" autocomplete="off" name="name" class="form-control" id="username" onkeypress="clear()">
						<label><i class="fa fa-lock fa-2x"></i>  Password :</label>
						<input type="password" autocomplete="off" name="password" class="form-control" id="password">
						<span id="perror"><?php 
						if(isset($_SESSION['error']))
						{
							echo "wrong username or password";
						} 
						else{ echo " ";} 
						?>
						</span>
						<button id="btn-login" type="submit">Login</button>
					</div>
						<div class="register">
						<h2>Belum punya akun?&nbsp<span style ="color: blue;" id="create-account"><a href="signup.php">Buat Akun</span></a> </h2>
						</div>
				</form>
			</div>		
			</div>	
				</div>
			</div>
			</section>

<script type="text/javascript">
	
function validation() {
	var username=document.getElementById('username').value;
	var password=document.getElementById('password').value;

	if ((username=="") ||( password==""))
	 {
	 	document.getElementById('perror').innerHTML="Nama & password salah";
	 	return false;
	 }
}

function clear() {
	document.getElementById('perror').innerHTML="ksdfisdhfg";
}

</script>
<script src="js/jquery.ripples-min.js" type="text/javascript"></script>
<script src="js/typed.min.js" type="text/javascript"></script>

</body>
</html>