<?php
include_once('header.php');
?>

 <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Car Advertisement
           
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Car Information</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form   method="post" enctype="multipart/form-data" role="form">
                    
					
                    

                    
                     <div class="form-group form-inline">
                      <label>Car_type</label>
					  <select style="margin-left:95px;" class="form-control" name="Car_type">
                      <option>-- Class--</option>
										<option value="Economy"> Economy </option>
										<option value="Intermediate">Intermediate </option>
										<option value="Standard"> Standard </option>
										
									</select>
                    </div>
					
                    <div class="form-group form-inline ">
					   <label for="img" style="margin-top:10px;">Car_img	</label>
                       <input type="file" id="Car_img" name="Car_img" style="margin-left:150px;" accept="image/*"><br>
					   
                    </div> 
                    
					
				  <div class="form-group form-inline">
                             <label>Car Model*</label>
                             <input type="text" name="Car_model" class="form-control" style="margin-left:83px;" placeholder="Car's Model"  >
                        </div>
					
					<div class="form-group form-inline">
                             <label>Car Brand*</label>
                             <input type="text" name="Car_brand" class="form-control" style="margin-left:83px;" placeholder="Car's Brand"  >
                        </div>
					
					<div class="form-group form-inline">
                             <label>Car No*</label>
                             <input type="text" name="Car_no" class="form-control" style="margin-left:105px;" placeholder="Car's No"  >
                        </div>
					
					<div class="form-group form-inline">
                             <label>RC No*</label>
                             <input type="text" name="RC_no" class="form-control" style="margin-left:110px;" placeholder="RC No"  >
                        </div>
					
					<div class="form-group form-inline">
                             <label>Passenger Capacity*</label>
                             <input type="text" name="Passenger_cap" class="form-control" style="margin-left:25px;" placeholder="Passenger capacity"  >
                        </div>
                    
                    <div class="form-group form-inline">
                      <label>Title</label>
                      <input type="text" name="Title" class="form-control" style="margin-left:119px;" placeholder="Enter title" name="title" >
                    </div>
					
					<div class="form-group form-inline ">
					  <label style="margin-top:30px;">Description</label>
					  <textarea name="Description" name="Description" class="form-control" style="margin-left:77px;" placeholder="Enter description"  cols="85" rows="5"></textarea>
					</div>
					
					<div class="form-group form-inline">
                             <label>City*</label>
                             <select class="form-control" name="City" style="margin-left:119px;">
										<option>-- City--</option>
										<option value="Ahmedabad"> Ahmedabad </option>
										<option value="Surat"> Surat </option>
										<option value="Vadodara"> Vadodara </option>
										<option value="Anand"> Dahod </option>
										<option value="Gandhinagar"> Gandhinagar </option>
										<option value="Rajkot"> Rajkot </option>
						 </select>
					</div>
					
					<div class="form-group form-inline ">
					     <label for="img" style="margin-top:10px;">Insurance	</label>
                             <input type="file" id="Insurance" name="Insurance" style="margin-left:150px;" accept="image/*"><br>
				     </div> 
					
                      <div class="form-group form-inline">
                      <label>Rent Per Day</label>
                      <input type="text" name="Rent" class="form-control" style="margin-left:119px;" placeholder="Enter Rent" name="Rent" >
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