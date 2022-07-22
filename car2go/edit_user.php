<?php
if(isset($_SESSION['Customer_id']))
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


          <div class="Rent" style="margin-left:460px;">
            <div class="col-lg-5 ">
                        <div class="Rent-form ">
                            <h3>Edit Profile</h3>
							<br>
							<br>
                            <form method="post" enctype="multipart/form-data" role="form">
							
							<div class="control-group "> 
							        <div class="wthree_input">
							          <b>Profile_img</b>
									<input type="file" class="form-control" name="Profile_img" value="" /> 
									<img src="upload/customer/<?php echo $fetch->Profile_img?>" height="50px" width="50px">
                                </div>
								</div><br>
						   
						    <div class="control-group "> 
							        <div class="wthree_input">
							        <b>Name</b>
									<input type="text" class="form-control" value="<?php echo $fetch->Name?>"  name="Name" placeholder=" Name"  /> 
                                </div>
								</div><br>
                        				
                               
                               <div class="control-group "> 
							        <div class="wthree_input">
									<b>Username</b>
									<input type="text" class="form-control" value="<?php echo $fetch->Username?>" name="Username" placeholder="Username"  /> 
                                </div>
								</div><br>
								
								<div class="control-group "> 
							        <div class="wthree_input">
							          <b>Email</b>
									<input type="email" class="form-control" value="<?php echo $fetch->Email?>" name="Email" placeholder="Email"  /> 
                                </div>
								</div><br>
								
								<div class="control-group "> 
							        <div class="wthree_input">
							          <b>Mobile_no</b>
									<input type="tel" class="form-control" name="Mobile_no" value="<?php echo $fetch->Mobile_no?>" placeholder="Mobile no"  /> 
                                </div>
								</div><br>
								
								<div class="control-group "> 
							        <div class="wthree_input">
							          <b>Gender</b><br>
									<?php
							$Gender=$fetch->Gender;
							if($Gender=="Male")
							{
							?>
							Male:<input type="radio" name="Gender"  value="Male" checked>
							Female:<input type="radio" name="Gender" value="Female">
							<?php
							}
							else
							{
							?>
							Male:<input type="radio" name="Gender" value="Male" >
							Female:<input type="radio" name="Gender" value="Female" checked>
							<?php
							}
							?>
                                </div>
								</div>
								<br>
								
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
                                    <button class="btn btn-custom" name="update" value="Save" type="submit">Update</button>
                                </div>
                            </form>
							
							
            </div>
		</div>		
</div>	
</div>	

<?php
    include_once('footer.php');
?>