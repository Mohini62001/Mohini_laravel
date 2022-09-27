<?php
include_once('model.php');
class control extends model
{ 
	function __construct()
	{   
	   
		$path=$_SERVER['PATH_INFO']; 	// GET URL PATH 
		model::__construct();
		
		switch($path)
		{
			case '/register' :
			if(isset($_REQUEST['submit']))
			{
				$Name=$_REQUEST['Name'];
				$Email=$_REQUEST['Email'];
				$Gender=$_REQUEST['Gender'];
				$Language_arr=$_REQUEST['Language'];
				$Language=implode('','',$Language_arr);
				
				$data=array("Name"=>$Name,"Email"=>$Email,"Gender"=>$Gender,"Language"=>$Language);
				
				$res=$this->insert('student',$data);
				if($res)
				{
					echo "<script>
					alert('customer Add Success');
					window.location='manage_student';
					</script>";
				}
				else
				{
					echo "Not success";
				}
			}
			include_once('register.php');
			break;
			
			case '/manage_student':
			$student_arr=$this->select('student');
			include_once('manage_student.php');
			break;
		}
	}
	
}
$obj=new control;

?>