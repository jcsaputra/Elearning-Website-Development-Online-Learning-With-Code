
<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

 <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

 <style type="text/css">
  

    .sidebar-list
    {
        margin-right: -15px;
        
        font-family: 'Quicksand', sans-serif; 
        font-size: 14px
    }

    .sidebar-list li:hover
    {
      background-color: deepskyblue !important;
    }
     .sidebar-list li a
     {
        color:white;
        text-decoration: none;
     }
 </style>
</head>

<body>
  
<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
  <a class="navbar-brand text-white" href="../admin_main.php">Cerdas Bersama</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item active">
        <a class="nav-link text-white" href="manage_videos.php">Back  <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

 <div class="container-fluid" style="margin-top: 50px;" >
      <div class="row">



        <div class="col-sm-2 col-md-2 sidebar badge-dark" style="margin:inherit;" id="sidebar" >
         <ul class="list-group text-white sidebar-list">
         <li class="list-group-item  bg-dark "><a href="../admin_main.php">Welcome Admin</a></li>
            <li class="list-group-item bg-dark "><a href="../manage_courses/manage_courses.php">Manage Courses</a></li>
            <li class="list-group-item bg-dark"><a href="../manage_quiz/manage_quiz.php">Manage Quizes</a></li>
            <li class="list-group-item bg-dark"><a href="manage_videos.php">Manage Videos</a></li>
            <li class="list-group-item bg-dark"><a href="../../login.php">Logout</a></li>
            <li class="list-group-item bg-dark"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></li>
          </ul>
        </div>


      <div class="col-md-10 ">  


      <?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'cerdasbersama');


?>

<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'cerdasbersama');

if (isset($_GET['video_id'])) {
  $video_id = $_GET['video_id'];
  $q = "SELECT * FROM videos WHERE video_id='$video_id'";
  $result = mysqli_query($con, $q);

  while ($res = mysqli_fetch_array($result)) {
    ?>
    <div class="mt-1">
      <h3 class="text-center">Update Videos</h3>
    </div>

    <form method="POST" action="verify_video_update.php" class="ml-3">
      <input type="hidden" name="video_id" value="<?php echo $res['video_id']; ?>">

      Enter Course Name:<input type="text" name="coursename" readonly="readonly" class="form-control" value="<?php echo $res['course_name'] ?>"><br>
      Enter Video Name :<input type="text" name="video_name" class="form-control" value="<?php echo $res['video_name'] ?>">
      Enter Video Path :<input type="text" name="video_path" class="form-control" value="<?php echo $res['video_path'] ?>">
      Enter Video Image :<input type="text" name="video_image" class="form-control" value="<?php echo $res['video_image'] ?>">

      <button type="submit" name="submitupdate" class="btn btn-success">Submit</button>
    </form>
    <?php
  }
} else {
 echo "Video anda berhasil diupdate!";
}
?>


  </div>
  </div>


<body>  
</html>