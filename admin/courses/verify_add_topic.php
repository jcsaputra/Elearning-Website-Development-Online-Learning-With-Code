
<?php
	


		  $con=mysqli_connect('localhost','root');
      mysqli_select_db($con,'cerdasbersama');

       $topicname=$_POST['topic_name'];
	 	$coursename=$_POST['coursename'];
	 	$description=$_POST['editor'];
	 	$qy="INSERT INTO `courses`( `topic_name`, `description`, `course_name`) VALUES ('$topicname','$description','$coursename')";


 	mysqli_query($con,$qy);
 	header('location:admin_edit_courses.php?course_name='.$coursename);
?>