<?php
if(isset($_SESSION['Client_id']))
{
	
}
else
{
     echo "<script>			
		window.location='index';
		</script>";	
}
    include_once('header.php');
?>
<style>
p{
	color: white;
}
</style>

          <div class="Rent" style="margin-left:460px;">
            <div class="col-lg-5 ">
                        <div class="Rent-form ">
                          <h3><p>  Edit Profile</p></h3>
							<br>
							<br>
                            <form method="post" enctype="multipart/form-data" role="form">
							
							<div class="control-group "> 
							        <div class="wthree_input">
							         <p> <b>Profile_img</b></p>
									<input type="file" class="form-control" name="Profile_img" value="" /> 
									<img src="../Admin/upload/client/<?php echo $fetch->Profile_img?>" height="50px" width="50px">
                                </div>
								</div><br>
						   
						    <div class="control-group "> 
							        <div class="wthree_input">
							        <p><b>First name</b></p>
									<input type="text" class="form-control" value="<?php echo $fetch->First_name?>"  name="First_name" placeholder=" Name"  /> 
                                </div>
								</div><br>
								
								  <div class="control-group "> 
							        <div class="wthree_input">
							       <p> <b>Last name</b></p>
									<input type="text" class="form-control" value="<?php echo $fetch->Last_name?>"  name="Last_name" placeholder=" Name"  /> 
                                </div>
								</div><br>
                        				
                               
                               <div class="control-group "> 
							        <div class="wthree_input">
									<p><b>Username</b></p>
									<input type="text" class="form-control" value="<?php echo $fetch->Username?>" name="Username" placeholder="Username"  /> 
                                </div>
								</div><br>
								
								<div class="control-group "> 
							        <div class="wthree_input">
							         <p> <b>Email</b></p>
									<input type="email" class="form-control" value="<?php echo $fetch->Email?>" name="Email" placeholder="Email"  /> 
                                </div>
								</div><br>
								
								<div class="control-group "> 
							        <div class="wthree_input">
							         <p> <b>Mobile_no</b></p>
									<input type="tel" class="form-control" name="Mobile_no" value="<?php echo $fetch->Mobile_no?>" placeholder="Mobile no"  /> 
                                </div>
								</div><br>
								
								<div class="control-group "> 
							        <div class="wthree_input">
							          <b>Address</b>
									<input type="text" class="form-control" value="<?php echo $fetch->Address?>" name="Address" placeholder="Address"  /> 
                                </div>
								</div><br>
								
								<div class="control-group "> 
							        <div class="wthree_input">
							          <b>Pin code</b>
									<input type="tel" class="form-control" name="Pin_code" value="<?php echo $fetch->Pin_code?>" placeholder="Pin_code"  /> 
                                     </div>
								</div><br>
								
								<div class="control-group "> 
							        <div class="wthree_input">
							          <b>City</b>
									<input type="tel" class="form-control" name="City" value="<?php echo $fetch->City?>" placeholder="City" /> 
                                </div>
								</div>
								
	
							
								<br>
			                    
								

							
                                <div>
                                    <button class="btn btn-primary" name="update" value="Save" type="submit">Update</button>
                                </div>
								
                            </form>
							
							
							
            </div>
		</div>		
</div>	
</div>	

<?php
    include_once('footer.php');
?>