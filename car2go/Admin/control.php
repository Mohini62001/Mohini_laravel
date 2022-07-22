<?php
include_once('model.php');
class control extends model
{ 
	function __construct()
	{
		session_start();
		$path=$_SERVER['PATH_INFO']; 	// GET URL PATH 
		model::__construct();
		
		switch($path)
		{
			
			case '/index':
			if(isset($_REQUEST['submit']))
			{
				$Username=$_REQUEST['Username'];
				$Password=$_REQUEST['Password'];
				$enc_pass=md5($Password);
				
				$where=array("Username"=>$Username,"Password"=>$enc_pass);
				$res=$this->select_where('admin',$where);
				$ans=$res->num_rows;
				if($ans==1) // one means true / 0 means false
				{
					$fetch=$res->fetch_object();
					$Username=$fetch->Username;
					$Admin_id=$fetch->Admin_id;
					$Profile_img=$fetch->Profile_img;
					
					$_SESSION['admin']=$Username;
					$_SESSION['Admin_id']=$Admin_id;
					$_SESSION['Profile_img']=$Profile_img;
					
					
						if(isset($_REQUEST['rem']))
							{
								setcookie('Username',$Username,time()+(24*60*60));
								setcookie('Password',$Password,time()+(24*60*60));
							}
					
					echo "<script>
					alert('Login Success');
					window.location='dashboard';
					</script>";
				}
				else
				{
					echo "<script>
					alert('Login Failed Due To wrong credantial !');
					window.location='index';
					</script>";	
				}
			}
			include_once('index.php');
			break;
			
			case '/logout':
			unset($_SESSION['admin']);
			unset($_SESSION['Admin_id']);
			unset($_SESSION['Profile_img']);
			echo "<script>
					alert('Logout Success');
					window.location='index';
					</script>";
			break;
			
			case '/myaccount':
			$Admin_id=$_SESSION['Admin_id'];
			$where=array("Admin_id"=>$Admin_id);
			$res=$this->select_where('admin',$where);
			$fetch=$res->fetch_object();
			include_once('myaccount.php');
			break;
			
			case '/edit_user':
			if(isset($_REQUEST['btn_Admin_id']))
			{
				$Admin_id=$_REQUEST['btn_Admin_id'];
				$where=array("Admin_id"=>$Admin_id);
				$res=$this->select_where('admin',$where);
				$fetch=$res->fetch_object();
				$old_Profile_img=$fetch->Profile_img;
				
				if(isset($_REQUEST['update']))
				{
					$Name=$_REQUEST['Name'];
					$Username=$_REQUEST['Username'];
					$Email=$_REQUEST['Email'];
					$Mobile_no=$_REQUEST['Mobile_no'];
					$Gender=$_REQUEST['Gender'];
					
					//current dt
					date_default_timezone_set("asia/calcutta");
					$Updated_dt=date("Y-m-d H:i:s");
					
					if($_FILES['Profile_img']['size']>0)
					{
						//img upload
						$Profile_img=$_FILES['Profile_img']['name'];
						$path='upload/admin/'.$Profile_img;
						$dup_Profile_img=$_FILES['Profile_img']['tmp_name'];
						move_uploaded_file($dup_Profile_img,$path);
		
						$data=array("Name"=>$Name,"Username"=>$Username,"Email"=>$Email,"Mobile_no"=>$Mobile_no,"Gender"=>$Gender,"Profile_img"=>$Profile_img,"Updated_dt"=>$Updated_dt);
						$res=$this->update_where('admin',$data,$where);
						if($res)
						{
							unlink('upload/admin/'.$old_Profile_img);
							echo "<script>
							alert('admin Update Success');
							window.location='myaccount';
							</script>";
						}
					}
					else
					{
						$data=array("Name"=>$Name,"Username"=>$Username,"Email"=>$Email,"Mobile_no"=>$Mobile_no,"Gender"=>$Gender,"Updated_dt"=>$Updated_dt);
						$res=$this->update_where('admin',$data,$where);
						if($res)
						{
							echo "<script>
							alert('admin Update Success');
							window.location='myaccount';
							</script>";
						}
					}
					
				}
				
			}
			include_once('edit_admin.php');
			break;
			
			case '/dashboard':
			include_once('dashboard.php');
			break;
			
			case '/add_emp':
			
			if(isset($_REQUEST['submit']))
			{
				$First_name=$_REQUEST['First_name'];
				$Last_name=$_REQUEST['Last_name'];
				$Username=$_REQUEST['Username'];
				$Password=$_REQUEST['Password'];
				$enc_pass=md5($Password);
				$Gender=$_REQUEST['Gender'];
				$Email=$_REQUEST['Email'];
				$Mobile_no=$_REQUEST['Mobile_no'];
				
				//img upload
				$Profile_img=$_FILES['Profile_img']['name'];
				$path='upload/employee/'.$Profile_img;
				$dup_Profile_img=$_FILES['Profile_img']['tmp_name'];
				move_uploaded_file($dup_Profile_img,$path);
				
				//current dt
				date_default_timezone_set("asia/calcutta");
				$curent_dt=date("Y-m-d H:i:s");
				
				$data=array("First_name"=>$First_name,"Last_name"=>$Last_name,"Username"=>$Username,"Password"=>$enc_pass,"Gender"=>$Gender,
				"Email"=>$Email,"Mobile_no"=>$Mobile_no,"Profile_img"=>$Profile_img,"Created_dt"=>$curent_dt,
				"Updated_dt"=>$curent_dt);
				
				$res=$this->insert('employee',$data);
				if($res)
				{
					echo "<script>
					alert('Employee Add Success');
					window.location='add_emp';
					</script>";
				}
				else
				{
					echo "Not success";
				}
			}
			
			include_once('add_emp.php');
			break;
			
			case '/manage_emp':
			$emp_arr=$this->select('employee');
			include_once('manage_emp.php');
			break;
			
			case '/manage_customer':
			$customer_arr=$this->select('customer');
			include_once('manage_customer.php');
			break;
		
			case '/manage_client':
			$client_arr=$this->select('client');
			include_once('manage_client.php');
			break;
			
			case '/add_car_type':
			
			if(isset($_REQUEST['submit']))
			{
				$Car_type=$_REQUEST['Car_type'];
				
				$Description=$_REQUEST['Description'];
			
				
				//img upload
				$Car_img=$_FILES['Car_img']['name'];
				$path='upload/cartype/'.$Car_img;
				$dup_Car_img=$_FILES['Car_img']['tmp_name'];
				move_uploaded_file($dup_Car_img,$path);
				
				//current dt
				date_default_timezone_set("asia/calcutta");
				$curent_dt=date("Y-m-d H:i:s");
				
				$data=array("Car_type"=>$Car_type,"Description"=>$Description,"Car_img"=>$Car_img,"Created_dt"=>$curent_dt,
				"Updated_dt"=>$curent_dt);
				
				$res=$this->insert('car_type',$data);
				if($res)
				{
					echo "<script>
					alert('car type Add Success');
					window.location='add_car_type';
					</script>";
				}
				else
				{
					echo "Not success";
				}
			}
			
			include_once('add_car_type.php');
			break;
			
			case '/manage_car_type':
			$cartype_arr=$this->select('car_type');
			
			include_once('manage_car_type.php');
			break;
			
			case '/manage_car':
			$car_arr=$this->select_join4('caradv','location','caradv.Location_id=location.Location_id','client','caradv.Client_id=client.Client_id','car_type','caradv.Cartype_id=car_type.Cartype_id');
			include_once('manage_car.php');
			break;
			
			case '/manage_booking':
			$booking_arr=$this->select('booking');
			include_once('manage_booking.php');
			break;

			case '/booking_reviews':
			$feedback_arr=$this->select('feedback');
			include_once('booking_reviews.php');
			break;
				
			case '/view_contact':
			$contact_arr=$this->select('contact');
			include_once('view_contact.php');
			break;
			
			case '/delete':
			if(isset($_REQUEST['del_Employee_id']))
			{
				$Employee_id=$_REQUEST['del_Employee_id'];
				$where=array("Employee_id"=>$Employee_id);
				
				$res=$this->select_where('employee',$where);
				$fetch=$res->fetch_object();
				$Profile_img=$fetch->Profile_img;
				
				$res=$this->delete_where('employee',$where);
				if($res)
				{   
			       unlink('upload/employee/'.$Profile_img);
					echo "<script>
					alert('employee Delete Success');
					window.location='manage_emp';
					</script>";
				}
			}
			
			if(isset($_REQUEST['del_Booking_id']))
			{
				$Booking_id=$_REQUEST['del_Booking_id'];
				$where=array("Booking_id"=>$Booking_id);
				$res=$this->delete_where('booking',$where);
				if($res)
				{
					echo "<script>
					alert('booking Delete Success');
					window.location='manage_booking';
					</script>";
				}
			}
			
			if(isset($_REQUEST['del_Caradv_id']))
			{
				$Caradv_id=$_REQUEST['del_Caradv_id'];
				$where=array("Caradv_id"=>$Caradv_id);
				
				$res=$this->select_where('caradv',$where);
				$fetch=$res->fetch_object();
				$Car_img=$fetch->Car_img;
				
				$res=$this->delete_where('caradv',$where);
				if($res)
				{  
			        unlink('upload/caradv/'.$Car_img);
					echo "<script>
					alert('car adv Delete Success');
					window.location='manage_car';
					</script>";
				}
			}
			
			if(isset($_REQUEST['del_Cartype_id']))
			{
				$Cartype_id=$_REQUEST['del_Cartype_id'];
				$where=array("Cartype_id"=>$Cartype_id);
				
				$res=$this->select_where('car_type',$where);
				$fetch=$res->fetch_object();
				$Car_img=$fetch->Car_img;
				
				$res=$this->delete_where('car_type',$where);
				if($res)
				{   
			        unlink('upload/cartype/'.$Car_img);
					echo "<script>
					alert('car type Delete Success');
					window.location='manage_car_type';
					</script>";
				}
			}
			
			if(isset($_REQUEST['del_Client_id']))
			{
				$Client_id=$_REQUEST['del_Client_id'];
				$where=array("Client_id"=>$Client_id);
				
				$res=$this->select_where('client',$where);
				$fetch=$res->fetch_object();
				$Profile_img=$fetch->Profile_img;
				
				$res=$this->delete_where('client',$where);
				if($res)
				{   
			        unlink('upload/client/'.$Profile_img);
					echo "<script>
					alert('client Delete Success');
					window.location='manage_client';
					</script>";
				}
			}
			
			if(isset($_REQUEST['del_Customer_id']))
			{
				$Customer_id=$_REQUEST['del_Customer_id'];
				$where=array("Customer_id"=>$Customer_id);
				
				$res=$this->select_where('customer',$where);
				$fetch=$res->fetch_object();
				$Profile_img=$fetch->Profile_img;
				
				$res=$this->delete_where('customer',$where);
				if($res)
				{
					unlink('upload/customer/'.$Profile_img);
					echo "<script>
					alert('customer Delete Success');
					window.location='manage_customer';
					</script>";
				}
			}
			
			if(isset($_REQUEST['del_Contact_id']))
			{
				$Contact_id=$_REQUEST['del_Contact_id'];
				$where=array("Contact_id"=>$Contact_id);
				$res=$this->delete_where('contact',$where);
				if($res)
				{
					echo "<script>
					alert('contact Delete Success');
					window.location='view_contact';
					</script>";
				}
			}
			
			if(isset($_REQUEST['del_Feedback_id']))
			{
				$Feedback_id=$_REQUEST['del_Feedback_id'];
				$where=array("Feedback_id"=>$Feedback_id);
				$res=$this->delete_where('feedback',$where);
				if($res)
				{
					echo "<script>
					alert('feedback Delete Success');
					window.location='booking_reviews';
					</script>";
				}
			}
			
			case '/status':
			if(isset($_REQUEST['status_Client_id']))
			{
				$Client_id=$_REQUEST['status_Client_id'];
				$where=array("Client_id"=>$Client_id);
				$res=$this->select_where('client',$where);
				$fetch=$res->fetch_object();
				$status=$fetch->status;
				if($status=="Block")
				{
					$data=array("status"=>"Unblock");
					$res1=$this->update_where('client',$data,$where);
					{
						echo"<script>
						alert('client unblock successfully');
						window.location='manage_client';
						</script>";
					}
				}
				else
				{
					$data=array("status"=>"Block");
					$res1=$this->update_where('client',$data,$where);
					{
						echo"<script>
						alert('client block successfully');
						window.location='manage_client';
						</script>";
					}
				}
			}
			
			if(isset($_REQUEST['status_Customer_id']))
			{
				$Customer_id=$_REQUEST['status_Customer_id'];
				$where=array("Customer_id"=>$Customer_id);
				$res=$this->select_where('customer',$where);
				$fetch=$res->fetch_object();
				$status=$fetch->status;
				if($status=="Block")
				{
					$data=array("status"=>"Unblock");
					$res1=$this->update_where('customer',$data,$where);
					{
						echo"<script>
						alert('customer unblock successfully');
						window.location='manage_customer';
						</script>";
					}
				}
				else
				{
					$data=array("status"=>"Block");
					$res1=$this->update_where('customer',$data,$where);
					{
						echo"<script>
						alert('customer block successfully');
						window.location='manage_customer';
						</script>";
					}
				}
			}
			
			break;
			
			
			default:
			echo "Page Not Found";
			break;
			
		}
	}
	
}
$obj=new control;

?>