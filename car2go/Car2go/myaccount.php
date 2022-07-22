<?php
include_once('header.php');
?> 
<style>
*-----------------
	20. Profile
-----------------------*/

.card-box.profile-header {
	margin: 0;
}
.profile-details {
	text-align: center;
}
.personal-info li .title {
	color: #515365;
	float: left;
	font-weight: 500;
	margin-right: 30px;
	width: 30%;
}
.personal-info li .text {
	color: #888da8;
	display: block;
	overflow: hidden;
}
.personal-info li {
	margin-bottom: 10px;
}
.personal-info {
	list-style: none;
	margin-bottom: 0;
	padding: 0;
}
.personal-info .text > a {
	color: #009efb;
}
.profile-view .profile-img-wrap {
	height: 150px;
	width: 150px;
}
.profile-view .profile-img {
	width: 150px;
	height: 150px;
}
.profile-view .profile-img .avatar {
	font-size: 24px;
	height: 150px;
	line-height: 150px;
	margin: 0;
	width: 150px;
}
.profile-view .profile-basic {
	margin-left: 170px;
}
.staff-msg {
	margin-top: 30px;
}
.experience-box {
	position: relative;
}
.experience-list {
	list-style: none;
	margin: 0;
	padding: 0;
	position: relative;
}
.experience-list:before {
	background: #ddd;
	bottom: 0;
	content: "";
	left: 8px;
	position: absolute;
	top: 8px;
	width: 2px;
}
.experience-list > li {
	position: relative;
}
.experience-list > li:last-child .experience-content {
	margin-bottom: 0;
}
.experience-user .avatar {
	height: 32px;
	line-height: 32px;
	margin: 0;
	width: 32px;
}
.experience-list > li .experience-user {
	background: #fff;
	height: 10px;
	left: 4px;
	margin: 0;
	padding: 0;
	position: absolute;
	top: 4px;
	width: 10px;
}
.experience-list > li .experience-content {
	background-color: #fff;
	margin: 0 0 20px 40px;
	padding: 0;
	position: relative;
}
.experience-list > li .experience-content .timeline-content {
	color: #9e9e9e;
}
.experience-list > li .experience-content .timeline-content a.name {
	color: #616161;
	font-weight: bold;
}
.experience-list > li .time {
	color: #bdbdbd;
	display: block;
	font-size: 12px;
	line-height: 1.35;
}
.before-circle {
	background-color: #ddd;
	border-radius: 50%;
	height: 10px;
	width: 10px;
}
.skills > span {
	border: 1px solid #ccc;
	border-radius: 500px;
	display: block;
	margin-bottom: 10px;
	padding: 6px 12px;
	text-align: center;
}
.profile-info-left {
	border-right: 2px dashed #ccc;
}
.profile-tabs .nav-tabs {
	background-color: #fff;
	box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1);
}

</style><br>
        <div class="page-wrapper">
            <div class="content">
                <div class="row"><br>
                    <div class="col-sm-7 col-6">
                        <h4 class="page-title" style="margin-left:100px;">My Profile</h4>
                    </div>

                    <div class="col-sm-5 col-6 text-right m-b-30">
                        <a href="edit_user?btn_Customer_id=<?php echo $fetch->Customer_id;?>" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Edit Profile</a>
                    </div>
                </div>
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <a href="#"><img class="avatar" style ="margin-left:150px;" src="upload/customer/<?php echo $fetch->Profile_img;?>" alt=""></a>
                                    </div>
                                </div><br>
                                <div class="profile-basic" style="margin-right:30px;">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0"><?php echo $fetch->Name;?></h3>
                                                <small class="text-muted"><?php echo $fetch->Username;?></small>
                                                <div class="staff-id"><?php echo $fetch->City;?></div>
                                                <div class="staff-msg"><a href="chat.html" class="btn btn-primary">Send Message</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <span class="title">Phone:</span>
                                                    <span class="text"><a href="#"><?php echo $fetch->Mobile_no;?></a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text"><a href="#"><?php echo $fetch->Email;?></a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Pin code:</span>
                                                    <span class="text"><?php echo $fetch->Pin_code;?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Address:</span>
                                                    <span class="text"><?php echo $fetch->Address;?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Gender:</span>
                                                    <span class="text"><?php echo $fetch->Gender;?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
				
            </div>
     
        </div>
    </div>
	
       		<?php
include_once('footer.php');
?>