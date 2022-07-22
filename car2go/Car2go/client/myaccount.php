  <?php
include_once('header.php');
?> 
<style>
p{
	color: white;
}
</style>

 <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>My Account</p>
                    
                </div>
				<br>
				<div class="container  "  >
                <div class="row">
                  
                    <div class="col ">
                        <div class="blog-item" style="margin-left:440px;">
                            <div class="blog-img">
                                <img src="../Admin/upload/client/<?php echo $fetch->Profile_img;?>" style="width:35%; border-radius:50%; height:250px" align="center" alt="">
                              
                            </div>
							<br>
                            <div class="blog-text" style="margin-left:30px;">
                              <p><b>First name :</b> <?php echo $fetch->First_name;?></p><br>
							<p><b>Last name :</b> <?php echo $fetch->Last_name;?></p><br>
                               
								<p><b >User Name:</b>  <?php echo $fetch->Username;?></p><br>
								
								<p><b>Email:</b>  <?php echo $fetch->Email;?></p><br>
								
								<p><b>Mobile:</b>  <?php echo $fetch->Mobile_no;?></p><br>
								<p><b>Address:</b>  <?php echo $fetch->Address;?></p><br>
								
								<p><b>Pin code:</b>  <?php echo $fetch->Pin_code;?></p><br>
								<p><b>City:</b>  <?php echo $fetch->City;?></p>
								
								
								
                                <br>
								
                            </div>
							<button class="btn btn-primary" style="margin-left:30px;">
							<a href="edit_user?btn_Client_id=<?php echo $fetch->Client_id;?>"  ><p>Edit Profile</p></a>
                           </button>
                        </div>
                    </div>
                    
					
                </div>
				</div>
				
            </div>
        </div><br>
        <!-- Blog End -->
		
		<?php
include_once('footer.php');
?> 