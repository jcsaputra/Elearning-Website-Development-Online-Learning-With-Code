<?php
session_start();
if (!isset($_SESSION['username'])) {
	header('location:login.php');
}
?>


<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<title>Cerdas Bersama</title>
	
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

	
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">


	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	

	
	<link rel="stylesheet" type="text/css" href="css/style.css">

	
	<link rel="shortcut icon" type="text/css" href="img/mylogo.png">

	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>

	
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>

	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<style type="text/css">
	html
	{
		scroll-behavior: smooth;
	}
	</style>

</head>
<body onload="myfunction()">
	<div id="loading"></div>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1 style="color: white;margin-top: 10px;" id="myhead">Cerdas Bersama</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="#" onclick="scrollToTop()">HOME</a></li>
					<li> <a href="#myservice_section">SERVICES</a></li>
					<li> <a href="#work">BAHASA PEMROGRAMAN</a></li>
					<li> <a href="#our-members">PENGAJAR</a></li>
					<li> <a href="#myfaq">FAQs</a></li>
					<li> <a href="logout.php" id="our-location" class="btn-success" ><?php echo $_SESSION['username'];   ?></a></li>
				</ul>
			</div>
		</div>
	</nav>

			<section class="slider text-center" id="slider">
				<div class="slider-overlay">
					<div class="slider-content">
						<div class="icons">
							<i class="fa fa-apple"></i>
							<i class="fa fa-android"></i>
							<i class="fa fa-windows"></i>
						</div>
						<br>
						<div class="text">    
							
						</div>
							<div class="cta-div">
								<a href="#emailHelp" class="btn1">CONTACT US</a>
								<a href="#myservice_section" class="btn2">LEARN TODAY</a>
							</div>
							<br><br>
							<div class="social-networks">
								<a href="https://www.facebook.com/profile.php?id=100093278970306" class="fa fa-facebook"></a>
								<a href="https://twitter.com/cerdas_bersama" class="fa fa-twitter"></a>
								<a href="https://www.instagram.com/cerdasbersama_/" class="fa fa-instagram"></a>
							</div>
					</div>
				</div>
			</section>


         

         <br><br>
         <div class="container-fluid servicebody" id="myservice_section">
         <div class="service-are" id="service">
         	<div class="row">
         		<div class="col-xs-12">
         			<div class="section-title text-center">
         				<h2><b>SERVICES</b></h2>
         				<p>
							Berikut adalah hal-hal yang bisa anda pelajari dengan kami<br>Semoga bermanfaat!
         				</p>
         			</div>
         		</div>
         	</div>
         	<div class="row">
         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-book"></i>
         				</div>
         				<h3><a href="programmingdemo.php">MODUL PEMBELAJARAN</a></h3>
         				<p>
         					Dapatkan modul pembelajaran untuk memperluas wawasan anda
         				</p>
         			</div>
         		</div>

         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="video tutorials\java\display_video_courses.php">VIDEO TUTORIAL</a></h3>
         				<p>
         					Tonton video-video menarik yang akan meningkatkan kemampuan anda
         				</p>
         			</div>
         		</div>

         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-bolt"></i>
         				</div>
         				<h3><a href="online_quize/quizhome.php">QUIZ</a></h3>    
         				<p>
         					Quiz menarik untuk mengasah dan meningkatkan kemampuan anda
         				</p>
         			</div>
         		</div>

				 <div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-gamepad"></i>
         				</div>
         				<h3><a href="game.php">MINI GAME</a></h3>  
         				<p>
         					Mini game untuk menghibur anda :D
         				</p>
         			</div>
         		</div>
         		
         	</div>
         </div>
     </div>
<br><br>
			<section class="work" id="work"><br>
				<h2 id="work-heading" class="text-center" style="font-weight: bold;">BAHASA PEMROGRAMAN</h2>
				<p class="text-center">Berikut merupakan bahasa pemrograman yang kami ajarkan</p>
				<div class="container-fluid">

					<div class="row no-gutters">
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work1.jpg" title="Python">
								<img src="img/work1.jpg" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work2.jpg" title="Java">
								<img src="img/work2.jpg" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work3.png" title="Android">
								<img src="img/work3.png" class="img-responsive">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="img/work4.png" title="MySql">
								<img src="img/work4.png" class="img-responsive">
							</a>
							
						</div>
						
					</div>

						
					</div>

				</div>
				


			</section>

			<br><br><br>
			<div class="container text-center" id="our-members">
				<h2><b>PENGAJAR</b></h2>
				<p>
					Ini adalah guru kami yang luar biasa. Anda dapat menghubungi siapa saja kapan saja <br> dan semuanya ahli dan berpengalaman
				</p>
			</div>


			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="team-memebers" class="owl-carousel owl-theme">
							<div class="team-member text-center">
								<img style="width: 300px; height: 400px;" src="img/juan.jpg" class="img-responsive">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Juanito Arvin</h4>
									<h4 class="team-member-designation">Spesialisasi: Java</h4>
									<ul class="social-list">
										<li><a href="https://www.instagram.com/juanitoarvn/" class="social-icon icon-gray"><i class="fa fa-instagram"></i></a></li>
										<li><a href="https://wa.me/6285156197007" class="social-icon icon-gray"><i class="fa fa-whatsapp"></i></a></li>
										<li><a href="https://www.facebook.com/juanito.arvin" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
									</ul>
								</div>
							</div>


							<div class="team-member text-center">
								<img style="width: 300px; height: 400px;" src="img/kevin.jpg" class="img-responsive">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Kevin Aditya Hartono</h4>
									<h4 class="team-member-designation">Spesialisasi: Python & MySql</h4>
									<ul class="social-list">
										<li><a href="https://www.instagram.com/kvn_hrtn/" class="social-icon icon-gray"><i class="fa fa-instagram"></i></a></li>
										<li><a href="https://wa.me/62882005002023" class="social-icon icon-gray"><i class="fa fa-whatsapp"></i></a></li>
										<li><a href="https://www.facebook.com/kevin.adityahartono/" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
									</ul>
								</div>
							</div>


							<div class="team-member text-center">
								<img style="width: 300px; height: 400px;" src="img/Julius.jpg" class="img-responsive">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Julius Calvin</h4>
									<h4 class="team-member-designation">Spesialisasi: Android</h4>
									<ul class="social-list">
										<li><a href="https://www.instagram.com/juliuscalvinsaputra/" class="social-icon icon-gray"><i class="fa fa-instagram"></i></a></li>
										<li><a href="https://wa.me/6281802998420" class="social-icon icon-gray"><i class="fa fa-whatsapp"></i></a></li>
										<li><a href="https://www.facebook.com/profile.php?id=100012189222855" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
									</ul>
								</div>
							</div>

							<div class="team-member text-center">
								<img style="width: 300px; height: 400px;" src="img/alvin.jpg" class="img-responsive">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Alvin Agustio</h4>
									<h4 class="team-member-designation">Spesialisasi: Android & Python</h4>
									<ul class="social-list">
										<li><a href="https://www.instagram.com/alvin__agustio/" class="social-icon icon-gray"><i class="fa fa-instagram"></i></a></li>
										<li><a href="https://wa.me/6281802998420" class="social-icon icon-gray"><i class="fa fa-whatsapp"></i></a></li>
										<li><a href="https://www.facebook.com/profile.php?id=100012189222855" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
									</ul>
								</div>
							</div>

							<div class="team-member text-center">
								<img style="width: 300px; height: 400px;" src="img/nelson.jpg" class="img-responsive">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Nelson Saputra</h4>
									<h4 class="team-member-designation">Spesialisasi: Java & Python</h4>
									<ul class="social-list">
										<li><a href="https://www.instagram.com/nelsonsaputra__/" class="social-icon icon-gray"><i class="fa fa-instagram"></i></a></li>
										<li><a href="https://wa.me/6281802998420" class="social-icon icon-gray"><i class="fa fa-whatsapp"></i></a></li>
										<li><a href="https://www.facebook.com/profile.php?id=100012189222855" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
									</ul>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

			<br><br><br>
			<section class="faq" id="myfaq">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2><b>GENERAL FAQs</b></h2>
							<div class="sub-heading">
								<p>
									Anda dapat menanyakan tentang masalah yang Anda hadapi kepada Kami
								</p>
								
							</div>
						</div>	

					</div>
				</div> <br><br><br>
				<div class="container">
					<div class="row">
						<div class="col-md-7">
							<div class="panel-group" id="accordian">


								<?php 

								  $con=mysqli_connect('localhost','root');
									   if (!$con) {
									   	die('connection failed'.mysqli_connect_error());
									   }

									mysqli_select_db($con,'cerdasbersama');

									$sql="select * from faq";
									$result=mysqli_query($con,$sql);
									while ($row=mysqli_fetch_array($result))
									{
					?>

								<div class="panel panel-default">
									<div class="panel-heading" id="headingOne">
										<h4 class="panel-title">
											<a href="#<?php echo $row['faq_id']; ?>" data-toggle="collapse" class="collapse" data-parent="#accordian"><?php echo $row['faq_title']; ?></a>
										</h4>
									</div>
									<div id="<?php echo $row['faq_id']; ?>" class="panel-collapse collapse " aria-labelledby="headingOne">
										<div class="panel-body">
											<p>
												<?php echo $row['faq_description']; ?>
											</p>
										</div>
									</div>
								</div>

							<?php } ?>
								
							</div>
						</div>

						<div class="freeimage" id="meimg">
							<div class="col-md-2 col-md-offset">
								<img src="img/faq1.png">
							</div>
						</div>

					</div>
				</div>
				

			</section>

<div class="row text-center">
	<h2><b>CONTACT US</b></h2><br><br>
	<center>
	<div class="card" style="width: 30rem;">
  <div class="card-body border-info">
   
   <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">message</label>
    <input type="password" class="form-control"  placeholder="enter your message">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div></center>
</div>

<script type="text/javascript">
	
	var preloader=document.getElementById('loading');
	function myfunction()
	 {
		preloader.style.display='none';
	}


	function addButton() {
		var body=document.getElementsByTagName('body')[0];
		var myfaq1=document.getElementById('myfaq');
		var btn=document.createElement('button');
		btn.innerHTML='';
		myfaq1.appendChild(btn);
		body.appendChild(myfaq);
	}

</script>

<script src="js/jquery.ripples-min.js" type="text/javascript"></script>
<script src="js/typed.min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>

<?php 
include 'admin/includes/footer.php';
 ?>

</body>
</html>