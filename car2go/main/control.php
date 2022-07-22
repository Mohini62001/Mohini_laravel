<?php
 include_once('../Admin/model.php');
class control extends model
{ 
	function __construct()
	{
		session_start();
		$path=$_SERVER['PATH_INFO']; 	// GET URL PATH 
		 model::__construct();// step 3
		
		
		switch($path)
		{
			case '/index':
			include_once('index.php');
			break;
			
			case '/about':
			include_once('about.php');
			break;
			
			case '/short':
			include_once('short.php');
			break;
			
			case '/blog':
			include_once('blog.php');
			break;
			
			case '/booking':
			include_once('booking.php');
			break;
			
			case '/billing':
			include_once('billing.php');
			break;
			
			case '/rentform':
			if(isset($_REQUEST['submit']))
			{
				$First_name=$_REQUEST['First_name'];
				$Last_name=$_REQUEST['Last_name'];
			    $Email=$_REQUEST['Email'];
				$Mobile_no=$_REQUEST['Mobile_no'];
				$Address=$_REQUEST['Address'];
				$Pin_code=$_REQUEST['Pin_code'];
				$City=$_REQUEST['City'];
				$License=$_REQUEST['License'];
				$Adhaarcard=$_REQUEST['Adhaarcard'];
				
                //current dt
				date_default_timezone_set("asia/calcutta");
				$curent_dt=date("Y-m-d H:i:s");
				
				$data=array("First_name"=>$First_name,"Last_name"=>$Last_name,
				"Email"=>$Email,"Mobile_no"=>$Mobile_no,"Address"=>$Address,"Pin_code"=>$Pin_code,
				"City"=>$City,"License"=>$License,"Adhaarcard"=>$Adhaarcard,
				"Created_dt"=>$curent_dt,"Updated_dt"=>$curent_dt);
				
				$res=$this->insert('client',$data);
				if($res)
				{
					echo "<script>
					alert('Your request add Success');
					window.location='rentform';
					</script>";
				}
				else
				{
					echo "Not success";
				}
			}
			include_once('rentform.php');
			break;
			
			case '/caradv':
			$adv_arr=$this->select('caradv');
			include_once('caradv.php');
			break;
			
			case '/bookcar':
			$cartype_id_arr=$this->select('car_type');
			$loca_id_arr=$this->select('location');
			include_once('bookcar.php');
			break;
			
			case '/product':
			if(isset($_REQUEST['btn_Caradv_id']))
			{
				$Caradv_id=$_REQUEST['btn_Caradv_id'];
				$where=array("Caradv_id"=>$Caradv_id);
				$res=$this->select_where_join3('caradv','location','caradv.Location_id=location.Location_id','car_type','caradv.Cartype_id=car_type.Cartype_id',$where);
			    $fetch=$res->fetch_object();
			}	
			include_once('Product1.php');
			break;
			
			case '/contact':
			if(isset($_REQUEST['submit']))
			{
				$Name=$_REQUEST['Name'];
				$Email=$_REQUEST['Email'];
				$Subject=$_REQUEST['Subject'];
				$Message=$_REQUEST['Message'];
				
				//current dt
				date_default_timezone_set("asia/calcutta");
				$curent_dt=date("Y-m-d H:i:s");
				
				$data=array("Name"=>$Name,"Email"=>$Email,"Subject"=>$Subject,"Message"=>$Message,
				"Created_dt"=>$curent_dt,"Updated_dt"=>$curent_dt);
				$res=$this->insert('contact',$data);
				if($res)
				{
					echo "<script>
					alert('Contact Success');
					window.location='index';
					</script>";
				}
				else
				{
					echo "<script>
					alert('Contact not success !');
					
					</script>";	
				}
			}
			include_once('contact.php');
			break;
			
			case '/feedback':
			if(isset($_REQUEST['submit']))
			{    
				$Name=$_REQUEST['Name'];
				$Email=$_REQUEST['Email'];
				
				$Message=$_REQUEST['Message'];
				
				//current dt
				date_default_timezone_set("asia/calcutta");
				$curent_dt=date("Y-m-d H:i:s");
				
				$data=array("Name"=>$Name,"Email"=>$Email,"Message"=>$Message,"Created_dt"=>$curent_dt,"Updated_dt"=>$curent_dt);
				$res=$this->insert('feedback',$data);
			
				if($res)
				{
					echo "<script>
					alert('Thanks for your Feedback');
					window.location='index';
					</script>";
				}
				else
				{
					echo "<script>
					alert('please login first !');
					window.location='login';
					
					</script>";	
				}
			}
			include_once('feedback.php');
			break;
			
			
			case '/location':
			include_once('location.php');
			break;
			
			case '/Ride':
			include_once('Ride.php');
			break;
			
			case '/Rent':
			include_once('Rent.php');
			break;
			
			case '/economy':
			include_once('economy.php');
			break;
			
			case '/intermediate':
			include_once('intermediate.php');
			break;
			
			case '/standard':
			include_once('standard.php');
			break;
			
			case '/Search':
			include_once('Search.php');
			break;
			
			case '/login':
			if(isset($_REQUEST['login']))
			{
				$Username=$_REQUEST['Username'];
				$Password=$_REQUEST['Password'];
				$enc_pass=md5($Password);
				
				$where=array("Username"=>$Username,"Password"=>$enc_pass);
				$res=$this->select_where('customer',$where);
				$ans=$res->num_rows;
				if($ans==1) // one means true / 0 means false
				{
					$fetch=$res->fetch_object();
					$status=$fetch->status;
					if($status=="Unblock")
					{
					$Name=$fetch->Name;
					$Customer_id=$fetch->Customer_id;
					$Profile_img=$fetch->Profile_img;
					
					$_SESSION['Name']=$Name;
					$_SESSION['Customer_id']=$Customer_id;
						$_SESSION['Profile_img']=$Profile_img;
					
					echo "<script>
					alert('Login Success');
					window.location='index';
					</script>";
					}
					else
					{
						echo "<script>
						alert('login failed due to User is block');
						window.location='login';
						</script>";
					}
				}
				else
				{
					echo "<script>
					alert('Login Failed Due To wrong credantial !');
					window.location='login';
					</script>";	
				}
			}
			include_once('login.php');
			break;
			
			case '/logout':
			unset($_SESSION['Name']);
			unset($_SESSION['Customer_id']);
			unset($_SESSION['Profile_img']);
		
			echo "<script>
					alert('Logout Success');
					window.location='index';
					</script>";
			include_once('login.php');
			break;
			
			case '/forget-password':
			include_once('forget-password.php');
			break;
			
			case '/registeration':
			if(isset($_REQUEST['signup']))
			{
				$Name=$_REQUEST['Name'];
				
				$Username=$_REQUEST['Username'];
				$Password=$_REQUEST['Password'];
				$enc_pass=md5($Password);
				$Email=$_REQUEST['Email'];
				$Mobile_no=$_REQUEST['Mobile_no'];
				
				//current dt
				date_default_timezone_set("asia/calcutta");
				$curent_dt=date("Y-m-d H:i:s");
				
				$data=array("Name"=>$Name,"Username"=>$Username,"Password"=>$enc_pass,
				"Email"=>$Email,"Mobile_no"=>$Mobile_no,"Created_dt"=>$curent_dt,
				"Updated_dt"=>$curent_dt);
				
				$res=$this->insert('customer',$data);
				if($res)
				{
					echo "<script>
					alert('Signup Success');
					window.location='login';
					</script>";
				}
				else
				{
					echo "Not success";
				}
			}
			
			include_once('registeration.php');
			break;
			
			case '/myaccount':
			$Customer_id=$_SESSION['Customer_id'];
			$where=array("Customer_id"=>$Customer_id);
			$res=$this->select_where('customer',$where);
			$fetch=$res->fetch_object();
			include_once('myaccount.php');
			break;
			
			case '/edit_user':
			if(isset($_REQUEST['btn_Customer_id']))
			{
				$Customer_id=$_REQUEST['btn_Customer_id'];
				$where=array("Customer_id"=>$Customer_id);
				$res=$this->select_where('customer',$where);
				$fetch=$res->fetch_object();
				$old_Profile_img=$fetch->Profile_img;
				
				if(isset($_REQUEST['update']))
				{
					$Name=$_REQUEST['Name'];
					$Username=$_REQUEST['Username'];
					$Email=$_REQUEST['Email'];
					$Mobile_no=$_REQUEST['Mobile_no'];
					$Gender=$_REQUEST['Gender'];
					$Address=$_REQUEST['Address'];
					$Pin_code=$_REQUEST['Pin_code'];
					$City=$_REQUEST['City'];
					//current dt
					date_default_timezone_set("asia/calcutta");
					$Updated_dt=date("Y-m-d H:i:s");
					
					if($_FILES['Profile_img']['size']>0)
					{
						//img upload
						$Profile_img=$_FILES['Profile_img']['name'];
						$path='upload/customer/'.$Profile_img;
						$dup_Profile_img=$_FILES['Profile_img']['tmp_name'];
						move_uploaded_file($dup_Profile_img,$path);
		
						$data=array("Name"=>$Name,"Username"=>$Username,"Email"=>$Email,"Mobile_no"=>$Mobile_no,"Gender"=>$Gender,"Address"=>$Address,"Pin_code"=>$Pin_code,"City"=>$City,"Profile_img"=>$Profile_img,"Updated_dt"=>$Updated_dt);
						$res=$this->update_where('customer',$data,$where);
						if($res)
						{
							unlink('upload/customer/'.$old_Profile_img);
							echo "<script>
							alert('customer Update Success');
							window.location='myaccount';
							</script>";
						}
					}
					else
					{
						$data=array("Name"=>$Name,"Username"=>$Username,"Email"=>$Email,"Mobile_no"=>$Mobile_no,"Gender"=>$Gender,"Address"=>$Address,"Pin_code"=>$Pin_code,"City"=>$City,"Updated_dt"=>$Updated_dt);
						$res=$this->update_where('customer',$data,$where);
						if($res)
						{
							echo "<script>
							alert('customer Update Success');
							window.location='myaccount';
							</script>";
						}
					}
					
				}
				
			}
			include_once('edit_user.php');
			break;
			
			case '/service':
			include_once('service.php');
			break;
			
			case '/checkout':
			$loca_id_arr=$this->select('location');
			if(isset($_REQUEST['btn_Caradv_id']))
			{
				$Caradv_id=$_REQUEST['btn_Caradv_id'];
				$where=array("Caradv_id"=>$Caradv_id);
				$res=$this->select_where_join2('caradv','car_type','caradv.Cartype_id=car_type.Cartype_id',$where);
			    $fetch=$res->fetch_object();
			    $Client_id=$fetch->Client_id;
			
			if(isset($_REQUEST['save']))
				{
					
					$Name=$_REQUEST['Name'];
					$Email=$_REQUEST['Email'];
					$Pin_code	=$_REQUEST['Pin_code'];
					$Location_id=$_REQUEST['Location_id'];
					$Address=$_REQUEST['Address'];
					$Mobile_no=$_REQUEST['Mobile_no'];
					$Pickup_date=$_REQUEST['Pickup_date'];
					$return_date=$_REQUEST['return_date'];
					$total_amount=$_REQUEST['total_amount'];
					$Customer_id=$_SESSION['Customer_id']; 
					
					
					//current dt
					date_default_timezone_set("asia/calcutta");
					$Created_dt=date("Y-m-d H:i:s");
					
					
						$data=array("Name"=>$Name,"Email"=>$Email,"Pin_code"=>$Pin_code,"Location_id"=>$Location_id,"Address"=>$Address,"Mobile_no"=>$Mobile_no,"Pickup_date"=>$Pickup_date,
						"return_date"=>$return_date,"total_amount"=>$total_amount,"Customer_id"=>$Customer_id,"Created_dt"=>$Created_dt);
						
						$res=$this->insert('booking',$data,$where);
						if($res)
						{
							echo "<script>
							alert('booking Success');
							window.location='caradv';
							</script>";
						}
					
					
				}
				
			}
			include_once('checkout.php');
			break;
			
			case '/rentcar':
			include_once('rentcar.php');
			break;
			
			case '/single':
			include_once('single.php');
			break;
			
			case '/team':
			include_once('team.php');
			break;
			
			
			
			default:
			echo "Page Not Found";
			break;
			
		}
	}
	
}
$obj=new control;

?>