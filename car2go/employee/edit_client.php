<?php

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
                          <h3><p>  Edit Client</p></h3>
							<br>
							<br>
                            <form method="post" enctype="multipart/form-data" role="form">
							
							
						   
						   
								
								 
                               
                               <div class="control-group "> 
							        <div class="wthree_input">
									<p><b>Username</b></p>
									<input type="text" class="form-control" value="<?php echo $fetch->Username?>" name="Username" placeholder="Username"  /> 
                                </div>
								</div><br>
								
								 <div class="control-group "> 
							        <div class="wthree_input">
									<p><b>Password</b></p>
									<input type="text" class="form-control" value="<?php echo $fetch->Password?>" name="Password" placeholder="Password"  /> 
                                </div>
								</div><br>
								
								
	
							
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