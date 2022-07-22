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
                          <h3><p>  Edit Car Type</p></h3>
							<br>
							<br>
                            <form method="post" enctype="multipart/form-data" role="form">
							
							
						   
						   
								
								 
                               
                               <div class="control-group "> 
							        <div class="wthree_input">
									<p><b>Car_type</b></p>
									<input type="text" class="form-control" value="<?php echo $fetch->Car_type?>" name="Car_type" placeholder="Enter Car Type"  /> 
                                </div>
								</div><br>
								
								 <div class="control-group "> 
							        <div class="wthree_input">
									<p><b>Car_img</b></p>
									<input type="file" class="form-control" name="car_img" value="" /> 
									<img src="../Admin/upload/cartype/<?php echo $fetch->car_img?>" height="50px" width="50px">
									</div>
								</div><br>
								
								<div class="control-group "> 
							        <div class="wthree_input">
									<p><b>Description</b></p>
									<input type="text" class="form-control" value="<?php echo $fetch->Description?>" name="Description" placeholder="Description"  /> 
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