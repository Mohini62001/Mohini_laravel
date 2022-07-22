<?php
include_once('header.php');
?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Add Employee
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"> Employee</a></li>
            <li class="active">Add Employee</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Personal Information</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form method="post" enctype="multipart/form-data" role="form">
                    
					<div class="form-group form-inline ">
					   <label for="img" style="margin-top:10px;">Profile_img	</label>
                       <input type="file" id="Profile_img" name="Profile_img" style="margin-left:135px;" accept="image/*"><br>
					   
                    </div> 
					
                    <div class="form-group form-inline">
                      <label >First_name</label>
                       <input type="text" name="First_name" class="form-control " style="margin-left:65px;" placeholder="First Name" >					  
                    </div>
					
					<div class="form-group form-inline">
                      <label >Last_name</label>
                       <input type="text" name="Last_name" class="form-control " style="margin-left:68px;" placeholder="Last Name" >					  
                    </div>
					
					<div class="form-group form-inline">
                      <label >Username</label>
                       <input type="text" name="Username" class="form-control " style="margin-left:73px;" placeholder="Username" >					  
                    </div>
					
					<div class="form-group form-inline">
                      <label >Password</label>
                       <input type="text" name="Password" class="form-control " style="margin-left:75px;" placeholder="Password" >					  
                    </div>
                  
				    <div class="form-group form-inline">
					    <label style="margin-top:30px;">Gender</label>
						<b style="margin-left:90px;">Female</b><input type="radio" name="Gender" style="margin-left:4px;"  value="female"> <b style="margin-left:40px;">Male</b><input type="radio" name="Gender" style="margin-left:4px;"  value="male">
					</div>
             
				<div class="form-group form-inline ">
					  <label style="margin-top:30px;">Email</label>
					  <input type="email" class="form-control" id="Email" style="margin-left:98px;" placeholder="Enter Email" name="Email" >
					</div>
			 
                   	<div class="form-group form-inline ">
					  <label style="margin-top:30px;">Mobile_no</label>
					  <input type="text" class="form-control" style="margin-left:70px;" placeholder="Enter Mobile No" name="Mobile_no" >
					</div>
					
					

                   
                  
					<div class="form-group">
                      <input type="submit" name="submit" style="margin-left:500px;" value="Submit" class="btn btn-primary">
                    </div>

                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     <?php
include_once('footer.php');
?>
