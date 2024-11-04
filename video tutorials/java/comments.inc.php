<?php 

function setComments($con)
{
	
	if (isset($_POST['commentSubmit']))
	 {
		 
	 	$video_id=$_POST['vid'];
	 	$uid=$_SESSION['username'];
		 $date=$_POST['date'];
		 $message=$_POST['message'];

		 $sql="INSERT INTO `commentsection`(`uid`, `date`, `message`,video_id) VALUES ('$uid','$date','$message','$video_id')";
		 
		 $r=mysqli_query($con,$sql);
		   

	 }
}	

function getComments($con)
{
	$video_id=$_SESSION['vid'];
	$sql="SELECT * FROM commentsection where video_id='$video_id'";
	$result=mysqli_query($con,$sql);
	while ($row=mysqli_fetch_array($result)) {
		echo "<div class='comment-box shadow bg-light'><p>";
			echo "<b>".$row['uid']."</b>&nbsp;&nbsp;&nbsp;";
			echo $row['date']."<br><br>";
			echo nl2br($row['message']);  
		echo "</p>";

		if ($_SESSION['username']==$row['uid']) 
		{
			echo "<form class='delete-form' method='POST' action='".deleteComment($con)."'>
			<input type='hidden' name='cid' value='".$row['cid']."'>
			<button type='submit' name='CommentDelete'>Delete</button> 
			</form>";
			$_SESSION['id']=$row['cid'];

			

			echo "
			<input type='hidden' name='cid' value='".$row['cid']."'>
			<button type='button' class='btnEdit'  data-toggle='modal' data-target='#myModal' style='position: absolute !important;
	top:0px !important;
	right:120px !important;'>edit</button> 
			";




echo '
<div id="myModal" class="modal fade col-md-6 m-auto" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title">Edit Comment</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button><br>
        
      </div>
      <div class="modal-body">
       

 <form action="'.editComment($con).'" method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" name="cid" class="form-control" id="recipient-name" value="'.$_SESSION['id'].'">
          </div>
          <div class="form-group" style="padding:-20px;">
            <label for="message-text" class="col-form-label" >Message:</label>
            <textarea class="form-control" id="message-text" name="message" value="sunil">'.$row['message'].'</textarea>
          </div>
        




      </div>
      <div class="modal-footer">
      	<button type="submit" class="btn btn-default btn-primary" name="commentEdit" >Submit</button>

        <button type="button" class="btn btn-default btn-danger" data-dismiss="modal">Close</button>

      </div>
      </form>
    </div>

  </div>
</div>
';



		}
		
		echo "</div>";
	}
	
	
 }

 function deleteComment($con)
 {
 	if (isset($_POST['CommentDelete']))  
	 {
		 $cid=$_POST['cid'];
		 
		 $sql="DELETE FROM commentsection where cid='$cid'";  
		 
		 $r=mysqli_query($con,$sql);
		 


		 
		 
		 
		      
 
	 }

 }



function editComment($con)
{

	if (isset($_POST['commentEdit']))  
	 {
		 $cid=$_POST['cid'];
		 $message=$_POST['message'];
		 
		 
		$sql="UPDATE `commentsection` SET `message`='$message' WHERE cid='$cid'";
		 
		  $r=mysqli_query($con,$sql);
		  
		 
		         
	 }
} 
?>