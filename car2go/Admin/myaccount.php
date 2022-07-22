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
                                <img src="upload/admin/<?php echo $fetch->Profile_img;?>" style="width:35%; border-radius:50%; height:250px" align="center" alt="">
                              
                            </div>
							<br>
                            <div class="blog-text" style="margin-left:30px;">
                              <p><b>Name :</b> <?php echo $fetch->Name;?></p><br>
							
                               
								<p><b >User Name:</b>  <?php echo $fetch->Username;?></p><br>
								<p><b>Gender:</b>  <?php echo $fetch->Gender;?></p><br>
								<p><b>Email:</b>  <?php echo $fetch->Email;?></p><br>
								
								<p><b>Mobile:</b>  <?php echo $fetch->Mobile_no;?></p><br>
								
								
								
                                <br>
								
                            </div>
							<button class="btn btn-primary" style="margin-left:30px;">
							<a href="edit_user?btn_Admin_id=<?php echo $fetch->Admin_id;?>"  ><p>Edit Profile</p></a>
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