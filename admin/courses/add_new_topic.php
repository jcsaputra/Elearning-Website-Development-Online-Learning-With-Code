 <?php 
include "../includes/header.php";
  ?>
 
<form  method="POST" action="verify_add_topic.php">
	<input type="hidden" name="id" value="<?php echo $_GET['course_id']; ?>">
	Enter topic name :<input type="text" name="topic_name" class="form-control"><br>
	Enter course name:<input type="text" name="coursename" class="form-control">
<textarea id="editor" name="editor" class="ckeditor" placeholder="Enter the content..."></textarea>

<button type="submit" name="submitbtn" class="btn btn-success">submit</button>
</form>


 <script src="../ckeditor/ckeditor.js"></script>