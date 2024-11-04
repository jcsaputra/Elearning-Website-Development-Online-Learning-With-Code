<?php 



 class admin
 {


 	public $host="localhost";
 	public $username="root";
 	public $pass="";
 	public $db_name="cerdasbersama";
 	public $conn;
 	public $user_details;

	public $cat_detail;

 	public $course_count=0;
 	public $video_count=0;
 	public $faq_list;

 	public function __construct()
 	{
 		$this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
 		if ($this->conn->connect_errno)
 		 {
 			die("connection failed");
 		}
 	}

 	public function show_users()    
 	{
 		$query="select * from login";
 		$result=$this->conn->query($query);
 		
 		while($row=$result->fetch_array(MYSQLI_ASSOC))
 		{
 			$this->user_details[]=$row;
 		}
 		return $this->user_details;
 	}

	 public function show_cat()     
 	{
 		$query="select * from category";
 		$result=$this->conn->query($query);
 		
 		while($row=$result->fetch_array(MYSQLI_ASSOC))
 		{
 			$this->cat_detail[]=$row;
 		}
 		return $this->cat_detail;
 	}
 	


 	public function display_course_count()           
 	{
 		$query="select * from programming_languages";
 		$result=$this->conn->query($query);
 		
 		while($row=$result->fetch_array(MYSQLI_ASSOC))
 		{
 			$this->course_count++;
 		}
 		print_r($this->course_count);
 	}

 






	public function display_video_count()
	{
		$query="select * from video_info";
 		$result=$this->conn->query($query);
 		
 		while($row=$result->fetch_array(MYSQLI_ASSOC))
 		{
 			$this->video_count++;
 		}
 		print_r($this->video_count);

	} 

	public function display_faq_list()
	{
		$query="select * from faq";
 		$result=$this->conn->query($query);
 		
 		while($row=$result->fetch_array(MYSQLI_ASSOC))
 		{
 			$this->faq_list[]=$row;
 		}
 		return ($this->faq_list);

	}

}
 ?>