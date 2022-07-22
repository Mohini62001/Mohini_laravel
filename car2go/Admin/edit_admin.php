<?php
if(isset($_SESSION['Admin_id']))
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
									<img src="../Admin/upload/employee/<?php echo $fetch->Profile_img?>" height="50px" width="50px">
                                </div>
								</div><br>
						   
						    <div class="control-group "> 
							        <div class="wthree_input">
							        <p><b>Name</b></p>
									<input type="text" class="form-control" value="<?php echo $fetch->Name?>"  name="Name" placeholder=" Name"  /> 
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
							        <p>  <b>Gender</b></p>
									<?php
							$Gender=$fetch->Gender;
							if($Gender=="Male")
							{
							?>
							<p>Male:<input type="radio" name="Gender"  value="Male" checked>
							Female:<input type="radio" name="Gender" value="Female"></p>
							<?php
							}
							else
							{
							?>
							<p>Male:<input type="radio" name="Gender" value="Male" >
							Female:<input type="radio" name="Gender" value="Female" checked></p>
							<?php
							}
							?>
                                </div>
								</div>
								<br>
	
							
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