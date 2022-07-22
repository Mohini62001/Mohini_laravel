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
<style>
/*-----------------
	14. Edit Profile
-----------------------*/

.profile-img-wrap {
	height: 120px;
	position: absolute;
	width: 120px;
	background: #fff;
	overflow: hidden;
}
.profile-basic {
	margin-left: 140px;
}
.profile-img-wrap img {
	width: 120px;
	height: 120px;
}
.fileupload.btn {
	position: absolute;
	right: 0;
	bottom: 0;
	background: rgba(33, 33, 33, 0.5);
	border-radius: 0;
	padding: 3px 10px;
	border: none;
}
.fileupload input.upload {
	cursor: pointer;
	filter: alpha(opacity=0);
	font-size: 20px;
	margin: 0;
	opacity: 0;
	padding: 0;
	position: absolute;
	right: -3px;
	top: -3px;
	padding: 5px;
}
.btn-text {
	color: #fff;
}
</style>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Edit Profile</h4>
                    </div>
                </div>
               <form method="post" enctype="multipart/form-data" role="form">
                    <div class="card-box">
                        <h3 class="card-title">Basic Informations</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-img-wrap">
                                    <img class="inline-block"  src="upload/customer/<?php echo $fetch->Profile_img?>" alt="user">
                                    <div class="fileupload btn">
                                        <span class="btn-text">edit</span>
                                        <input class="upload"  input type="file" class="form-control" name="Profile_img">
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="focus-label"> Name</label>
                                                <input type="text" class="form-control floating" value="<?php echo $fetch->Name?>" name="Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="focus-label">Username</label>
                                                <input type="text" class="form-control floating" value="<?php echo $fetch->Username?>"name="Username">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group ">
                                                <label class="focus-label">Email</label>
                                                <div class="cal-icon">
                                                    <input class="form-control floating datetimepicker" type="text" value="<?php echo $fetch->Email?>" name="Email">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group select-focus">
                                                <label class="focus-label">Gender</label>
												<?php
													$Gender=$fetch->Gender;
													if($Gender=="Male")
													{
												?>
                                                <select class="select form-control floating">
                                                    <option value="male selected" name="Gender"  value="Male">Male</option>
                                                    <option value="female" name="Gender" value="Female">Female</option>
                                                </select>
												<?php
													}
													else
													{
												?>
												<select class="select form-control floating">
                                                    <option value="male " name="Gender"  value="Male">Male</option>
                                                    <option value="female selected" name="Gender" value="Female">Female</option>
                                                </select>
												<?php
													}
												?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title">Contact Informations</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="focus-label">Address</label>
                                    <input type="text" class="form-control floating" value="<?php echo $fetch->Address?>" name="Address">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="focus-label">City</label>
                                    <input type="text" class="form-control floating" value="<?php echo $fetch->City?>" name="City">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="focus-label">Pin Code</label>
                                    <input type="text" class="form-control floating" value="<?php echo $fetch->Pin_code?>" name="Pin_code">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="focus-label">Phone Number</label>
                                    <input type="text" class="form-control floating" value="<?php echo $fetch->Mobile_no?>" name="Mobile_no">
                                </div>
                            </div>
                        </div>
                    </div>
                    
	
           
					
                    <div class="text-center m-t-20">
                        <button class="btn btn-primary submit-btn" name="update" value="Save" type="submit">UPDATE</button>
                    </div>
                </form>
            </div>
           

        </div>
    </div>
       <?php
include_once('footer.php');
?>