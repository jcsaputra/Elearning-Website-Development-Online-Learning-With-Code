<?php  
session_start();

class users
{
	public $host="localhost";
	public $username="root";
	public $pass="";
	public $db_name="cerdasbersama";
	public $conn;
	public $data;
	public $cat_data;
	public $questios_details;

	public function __construct()               
	{
		$this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
		if ($this->conn->connect_errno) 
		{
			die("database connection failed".$this->conn->connect_errno);
		}
	}


	public function signup($data)                 
	{
		$this->conn->query($data);
		return true;
	}

	public function login($email,$pass)                  
	{
		
		$query=$this->conn->query("select email,password from users where email='$email' and password='$pass'");
		$query->fetch_array(MYSQLI_ASSOC);

		if ($query->num_rows>0) 
		{	
			$_SESSION['email']=$email;
			return true;
		}
		else
		{
			return false;
		}

	}

	public function show_users_profile($email)  		 
	{
		$query=$this->conn->query("select * from login where email='$email'");
		$row=$query->fetch_array(MYSQLI_ASSOC);

		if ($query->num_rows>0) 
		{	
			$this->data[]=$row;

		}
	return $this->data;
	}

	public function show_courses()                
	{
		$query=$this->conn->query("select * from category");

		while($row=$query->fetch_array(MYSQLI_ASSOC))      
		{	
			$this->cat_data[]=$row;
			

		}
		
	return $this->cat_data;
	}


	public function show_questions($course_id)
	{
		$query=$this->conn->query("select * from question_test where course_id='$course_id'");

		while($row=$query->fetch_array(MYSQLI_ASSOC))      
		{	
			$this->questios_details[]=$row;
			

		}
		
	return $this->questios_details;
	}

	public function show_result($data)

	{
		

		$ans=implode("", $data);     
		$course_id=$_SESSION['course_id'];   
		$right=0;
		$wrong=0;
		$no_answer=0;

		$query=$this->conn->query("select test_id,answer from question_test where course_id='$course_id'");

		while($row=$query->fetch_array(MYSQLI_ASSOC))      
		{	
			if ($row['answer']==$_POST[$row['test_id']])          
			 {
				$right++;
			}
			elseif ($_POST[$row['test_id']]=="no_attempt")    
			 {
				$no_answer++;
			}
			else
			{
				$wrong++;                          
			}

		}
		$array=array();                 
		$array['right']=$right;         
		$array['wrong']=$wrong;
		$array['not_attempted']=$no_answer;
		return $array;					 
		
	 }



	public function add_quize($query_string)
	{
		$this->conn->query($query_string);
		return true;
	}

}













?>