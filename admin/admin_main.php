<?php 
  include("classes/admin.php");
  $admin=new admin;
  $userd=$admin->show_users();
  $catd=$admin->show_cat();
 ?>

<!doctype html>
<html lang="en">
  <head>



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin panel</title>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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

     .mytable1 .card
     {
     background: #5f2c82;  
background: -webkit-linear-gradient(to right, #49a09d, #5f2c82);  
background: linear-gradient(to right, #49a09d, #5f2c82); 
     }

     .mytable2 .card
     {
      background: #EC6F66; 
background: -webkit-linear-gradient(to right, #F3A183, #EC6F66);  
background: linear-gradient(to right, #F3A183, #EC6F66); 

     }
     .card 
     {
      overflow: hidden;
      transition: all 0.9s ease;
     }
     .card:hover
     {
      transform: scale(1.04);
     }



    

</style>

  </head>

  <body style="background-color:#f1efef">

  <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
  <a class="navbar-brand text-white" href="#">Cerdas Bersama</a>


</nav>

    <div class="container-fluid" style="margin-top: 50px;" >
      <div class="row">
        <div class="col-sm-2 col-md-2 sidebar badge-dark" style="margin:inherit;" id="sidebar" >
        <ul class="list-group text-white sidebar-list">
            <li class="list-group-item  bg-dark "><a href="admin_main.php">Welcome Admin</a></li>
            <li class="list-group-item bg-dark "><a href="manage_courses/manage_courses.php">Manage Courses</a></li>
            <li class="list-group-item bg-dark"><a href="manage_quiz/manage_quiz.php">Manage Quizes</a></li>
            <li class="list-group-item bg-dark"><a href="manage_videos/manage_videos.php">Manage Videos</a></li>
            <li class="list-group-item bg-dark"><a href="../login.php">Logout</a></li>
          </ul>
        </div>

        <div class=" col-md-10">
               <div class="card-header bg-white" style="margin-right: -45px; height: 60px;">
                 <b>DASHBOARD</b>
                  <button type="btn btn-outline-success" class="btn btn-primary float-right" style="height: 40px;"><a href="../login.php" class="text-white ">Logout</a> </button>
                  </div>
                 <div class="row">

          <div class="col-md-4 mt-3 ml-5">
            <div class="card shadow " style="width: 18rem; box-shadow: 1px 1px 1px 1px #e1dbdb; border-radius:0px; border-top-left-radius: 0px; cursor:pointer;">

              <img class="myimg" src="../uploadimg/file3.png" alt="Card" width="288" height="200">
              <div class="card-body">
                <p class="card-text"><a href="manage_courses/manage_courses.php" style="text-decoration: none;">MANAGE YOUR COURSE <i class="fa fa-book ml-3"></i></a></p>
              </div>
            </div>
            
          </div>

           <div class="col-md-4 mt-3">
            <div class="card shadow" style="width: 18rem;cursor:pointer; box-shadow:1px 1px 1px 1px #e1dbdb; border-radius:0px; border-top-left-radius: 0px;">

              <img class="" src="../uploadimg/file4.png" alt="Card" width="288" height="200">
              <div class="card-body">
                <p class="card-text "><a href="manage_videos/manage_videos.php" style="text-decoration: none; color: orangered">MANAGE YOUR VIDEOS</a><i class="fa fa-video-camera ml-3" style="color: orangered"></i></p>
              </div>
            </div>
            
          </div>

          <div class="col-sm-3 mt-3">

            <table class="table table-borderless">
   
    <tbody >
      <tr>
        <td class="mytable1">
           <div class="card shadow border-0 " style="width: 15rem; height: 110px; box-shadow: 2px 3px #827171; border-radius:0px; border-top-left-radius: 0px;">

              <div class="card-body">
                <p class="card-text text-white"><b class="h4">Jumlah Kursus: </b><br><span style="font-size: 20px;"><?php $admin->display_course_count(); ?></span></p>
              </div>
            </div>

        </td>
        
      </tr>
      <tr>
        <td class="mytable2">
           <div class="card shadow border-0" style="width: 15rem; height: 110px; box-shadow: 2px 2px #827171; border-radius:0px; border-top-left-radius: 0px;">

             <div class="card-body">
                <p class="card-text text-white"><b class="h4">Jumlah Kategori Video:</b><br><span style="font-size: 20px;"><?php $admin->display_video_count(); ?></span></p>
              </div>

        </td>
       
      </tr>
     
    </tbody>
  </table>
           
            
          </div>     


            </div>

            <div class="row ">    
              <div class="col-md-8">    
                <table class="table ml-5 bg-white shodow pl-5 table-responsive" style=" height : 355px;overflow-y: scroll;display: inline-block; width: 640px;"> 

                <p class="ml-5">Daftar User</p>
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Email</th>
                  </tr>
                </thead>
                <tbody >

                   <?php 
                          foreach ($userd as $userdata) {
                            
                          
                   ?> 
                  <tr >
                    <th scope="row"><?php echo $userdata['login_id']; ?></th>
                    <td ><?php echo $userdata['username']; ?></td>
                    <td><?php echo $userdata['password']; ?></td>
                    <td><?php echo $userdata['email']; ?></td>
                  </tr>
                 
                 <?php } ?>
                </tbody>
              </table>

              </div>  

              <div class="row ">    
              <div class="col-md-8">    
                <table class="table ml-5 bg-white shodow pl-5 table-responsive" style=" height : 355px;overflow-y: scroll;display: inline-block; width: 640px;"> 

                <p class="ml-5">Daftar Kategori</p>
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nama</th>
                  </tr>
                </thead>
                <tbody >

                   <?php 
                          foreach ($catd as $cat) {
                            
                          
                   ?> 
                  <tr >
                    <th scope="row"><?php echo $cat['category_id']; ?></th>
                    <td><?php echo $cat['cat_name']; ?></td>
                  </tr>
                 
                 <?php } ?>
                </tbody>
              </table>

              </div>  

           <div class="col-md-3 mt-5 ml-5">
            <div class="card shadow" style="width: 15rem; height:22rem; box-shadow:1px 1px 1px 1px #e1dbdb; border-radius:0px; border-top-left-radius: 0px;">


              <img class="" src="../uploadimg/file6.png" alt="Card" width="210" height="300">
              <div class="card-body">
                <p class="card-text "><a href="manage_quiz/manage_quiz.php" style="text-decoration: none; color: orangered">MANAGE YOUR QUIZ</a></p>
              </div>
            </div>
            
          </div>
              
            <div class="row">    

              <div class="col-md-8 ml-5">   

              <table class="table bg-white" style="height : 355px;overflow-y: scroll;display: inline-block; width:640px">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th scope="col">MANAGE FAQs</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php  $faq=$admin->display_faq_list();

                      foreach ($faq as $faq_list)
                       {
                          
                     ?>

                    <tr style="width: 500px;" >
                      <th><?php echo $faq_list['faq_id']; ?></th>
                      <td><?php echo $faq_list['faq_title']; ?><br><blockquote class="rounded p-2 text-muted " style="font-size: 13px; background-color: #db6a8f57;"><?php echo $faq_list['faq_description']; ?></blockquote></td>
                    </tr>

                  <?php } ?>
                   
                   
                  </tbody>
                </table>
                </div>  
              
            </div>            

        </div>

      </div>
    </div>        

    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
