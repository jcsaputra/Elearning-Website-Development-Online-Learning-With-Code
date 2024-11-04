<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

	<title>Cerdas Bersama</title>
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/signupstyle.css">

	<link rel="shortcut icon" type="text/css" href="img/mylogo.png">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
			<section class="slider text-center" id="slider">
				<h1 id="myhead">Cerdas Bersama</h1>
				<div class="modal-dialog ">
					<div class="modal-content">
						<h3 id="login-heading">SIGN UP</h3>
						
					<div class="modal-body" >
						<div class="left-box">
						<form method="POST" action="registration.php"> 
							<div class="form-group">
								<label><i class="fa fa-user fa-2x"></i>&nbspUsername :</label>
								<input type="text" name="name" class="form-control">

							
								<label><i class="fa fa-lock fa-2x"></i>&nbspPassword :</label>
								<input type="password" name="password" class="form-control" id="pwd">
								
								<label><i class="fa fa-lock fa-2x"></i>&nbspConfirm Password :</label>
								<input type="password" name="confirm_password" class="form-control" id="cpwd">
								

								<label><i class="fa fa-envelope fa-2x"></i>&nbspEmail :</label>
								<input type="text" name="email" class="form-control">
								<div id="errorlabel"></div>
								
							</div>
							<button id="btn-signup" type="submit" onclick="return validateForm();">Sign Up</button>
                        </form>
                        <button id="btn-login"><a id="sign" href="login.php">Kembali</a></button>
						
						

				
					
					</div>
					
							
					
				</div>
			</section>

<script type="text/javascript">
	
$(document).ready(function(){

$('#cpwd').keyup(function(){
	var pwd=$('#pwd').val();
	var cpwd=$('#cpwd').val();
	if (cpwd!=pwd) 
	{
		$('#errorlabel').html('**password are not matched');
		$('#errorlabel').css('color','red');
		return false;
	}
	else
	{
		$('#errorlabel').html('');
		return true;
	}
});

});

</script>


<script src="js/jquery.ripples-min.js" type="text/javascript"></script>
<script src="js/typed.min.js" type="text/javascript"></script>



	<script type="text/javascript">
        function validateForm() {
            var name = document.getElementsByName("name")[0].value;
            var email = document.getElementsByName("email")[0].value;
            var password = document.getElementsByName("password")[0].value;
            var confirmPassword = document.getElementsByName("confirm_password")[0].value;

            if (name == "" || email == "" || password == "" || confirmPassword == "") {
                alert("Harap lengkapi semua field");
                return false;
            }

            return true;
        }
    </script>
	
</body>
</html>