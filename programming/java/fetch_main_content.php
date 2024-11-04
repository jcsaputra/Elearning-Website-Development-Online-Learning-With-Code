<?php
session_start();

	$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'cerdasbersama');

	
		 $id=$_POST['txt1'];
		echo "hello";
		$q="select * from courses where course_id=$id";
		$result=mysqli_query($con,$q);
		$res=mysqli_fetch_array($result); 

	?>
      <div class="card col-md-6">
           <?php $_SESSION['message']=$res['description'];
           	
           
            header("location:java_programming.php?course_name=".$res['course_name']); ?>


      </div>

	
	<?php ?>