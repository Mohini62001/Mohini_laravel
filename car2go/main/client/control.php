
<?php
include_once('../Admin/model.php');
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
				$res=$this->select_where('client',$where);
				$ans=$res->num_rows;
				if($ans==1) // one means true / 0 means false
				{
					$fetch=$res->fetch_object();
					$status=$fetch->status;
					if($status=="Unblock")
					{
					$Username=$fetch->Username;
					$Client_id=$fetch->Client_id;
					$Profile_img=$fetch->Profile_img;
					
					$_SESSION['client']=$Username;
					$_SESSION['Client_id']=$Client_id;
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
						alert('login failed due to client is block');
						window.location='index';
						</script>";
					}
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
			unset($_SESSION['client']);
			unset($_SESSION['Client_id']);
			unset($_SESSION['Profile_img']);
			echo "<script>
					alert('Logout Success');
					window.location='index';
					</script>";
			break;
			
			case '/myaccount':
			$Client_id=$_SESSION['Client_id'];
			$where=array("Client_id"=>$Client_id);
			$res=$this->select_where('client',$where);
			$fetch=$res->fetch_object();
			include_once('myaccount.php');
			break;
			
			case '/edit_user':
			if(isset($_REQUEST['btn_Client_id']))
			{
				$Client_id=$_REQUEST['btn_Client_id'];
				$where=array("Client_id"=>$Client_id);
				$res=$this->select_where('client',$where);
				$fetch=$res->fetch_object();
				$old_Profile_img=$fetch->Profile_img;
				
				if(isset($_REQUEST['update']))
				{
					$First_name=$_REQUEST['First_name'];
					$Last_name=$_REQUEST['Last_name'];
					$Username=$_REQUEST['Username'];
					$Email=$_REQUEST['Email'];
					$Mobile_no=$_REQUEST['Mobile_no'];
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
						$path='../Admin/upload/client/'.$Profile_img;
						$dup_Profile_img=$_FILES['Profile_img']['tmp_name'];
						move_uploaded_file($dup_Profile_img,$path);
		
						$data=array("First_name"=>$First_name,"Last_name"=>$Last_name,
						"Username"=>$Username,"Email"=>$Email,"Mobile_no"=>$Mobile_no,
						"Address"=>$Address,"Pin_code"=>$Pin_code,"City"=>$City,"Profile_img"=>$Profile_img,
						"Updated_dt"=>$Updated_dt);
						$res=$this->update_where('client',$data,$where);
						if($res)
						{
							unlink('../Admin/upload/client/'.$old_Profile_img);
							echo "<script>
							alert('client Update Success');
							window.location='myaccount';
							</script>";
						}
					}
					else
					{
						$data=array("First_name"=>$First_name,"Last_name"=>$Last_name,"Username"=>$Username,
						"Email"=>$Email,"Mobile_no"=>$Mobile_no,"Address"=>$Address,"Pin_code"=>$Pin_code,
						"City"=>$City,"Updated_dt"=>$Updated_dt);
						$res=$this->update_where('client',$data,$where);
						if($res)
						{
							echo "<script>
							alert('client Update Success');
							window.location='myaccount';
							</script>";
						}
					}
					
				}
				
			}
			include_once('edit_client.php');
			break;
			
			case '/dashboard':
			include_once('dashboard.php');
			break;	
				
			
			
			case '/add_car_adv':
		    $cartype_id_arr=$this->select('car_type');
			$loca_id_arr=$this->select('location');
			if(isset($_REQUEST['submit']))
			{
				$Cartype_id=$_REQUEST['Cartype_id'];
				$Car_model=$_REQUEST['Car_model'];
				$Car_brand=$_REQUEST['Car_brand'];
				$Car_no=$_REQUEST['Car_no'];
				$RC_no=$_REQUEST['RC_no'];
				$Passenger_cap=$_REQUEST['Passenger_cap'];
				$Location_id=$_REQUEST['Location_id'];
               
				$Title=$_REQUEST['Title'];
				$Description=$_REQUEST['Description'];
				$Rent=$_REQUEST['Rent'];
				$Rent_type=$_REQUEST['Rent_type'];
				$Client_id=$_SESSION['Client_id']; 
				
				//img upload
				$Car_img=$_FILES['Car_img']['name'];
				$path='../Admin/upload/car/'.$Car_img;
				$dup_Car_img=$_FILES['Car_img']['tmp_name'];
				move_uploaded_file($dup_Car_img,$path);
				
				//current dt
				date_default_timezone_set("asia/calcutta");
				$curent_dt=date("Y-m-d H:i:s");
				
				$data=array("Cartype_id"=>$Cartype_id,"Car_model"=>$Car_model,"Car_brand"=>$Car_brand,
				"Car_no"=>$Car_no,"RC_no"=>$RC_no,"Passenger_cap"=>$Passenger_cap,
				"Location_id"=>$Location_id,"Title"=>$Title,"Description"=>$Description,
				"Rent"=>$Rent,"Rent_type"=>$Rent_type,"Client_id"=>$Client_id,"Car_img"=>$Car_img,"Created_dt"=>$curent_dt,
				"Updated_dt"=>$curent_dt);
				
				$res=$this->insert('caradv',$data);
				if($res)
				{
					echo "<script>
					alert('car Advertisement Add Success');
					window.location='add_car_adv';
					</script>";
				}
				else
				{
					echo "Not success";
				}
			}
			include_once('add_car_adv.php');
			break;
		
			case '/manage_car_adv':
			$Client_id=$_SESSION['Client_id'];
			$where=array("client.Client_id"=>$Client_id);
			$res=$this->select_where_join4('caradv','location','caradv.Location_id=location.Location_id','client','caradv.Client_id=client.Client_id','car_type','caradv.Cartype_id=car_type.Cartype_id',$where);
			while($fetch=$res->fetch_object()) // data db fetch 
			{
				$car_arr[]=$fetch;
			}
			include_once('manage_car_adv.php');
			break;
			
			case '/add_location':
			$loca_id_arr=$this->select('location');
			if(isset($_REQUEST['submit']))
			{
				
				$Loca_name=$_REQUEST['Loca_name'];
				$City=$_REQUEST['City'];
				
	            //current dt
				date_default_timezone_set("asia/calcutta");
				$curent_dt=date("Y-m-d H:i:s");
				
				$data=array("Loca_name"=>$Loca_name,"City"=>$City,"Created_dt"=>$curent_dt,
				"Updated_dt"=>$curent_dt);
				
				$res=$this->insert('location',$data);
				if($res)
				{
					 echo"<script>
					alert('Location Add Success');
					window.location='add_location';
					</script>";
				}
				else
				{
					echo "Not success";
				}
			}
			include_once('add_location.php');
			break;
			
			case '/manage_location':
			$loca_arr=$this->select('location');
			include_once('manage_location.php');
			break;
			
		
			
			case '/manage_booking':
			$booking_arr=$this->select('booking');
			include_once('manage_booking.php');
			break;

			case '/booking_reviews':
			$feedback_arr=$this->select('feedback');
			include_once('booking_reviews.php');
			break;
				
		
			
			
			case '/delete':
	
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
			
			if(isset($_REQUEST['del_Location_id']))
			{
				$Location_id=$_REQUEST['del_Location_id'];
				$where=array("Location_id"=>$Location_id);
				$res=$this->delete_where('location',$where);
				if($res)
				{
					echo "<script>
					alert('location Delete Success');
					window.location='manage_location';
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
					window.location='manage_car_adv';
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
			break;
			
			default:
			echo "Page Not Found";
			break;
			
		}
	}
	
}
$obj=new control;

?>