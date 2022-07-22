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
					  <select name="Cartype_id" class="form-control">
							<option> select car type </option>
							<?php foreach($cartype_id_arr as $car)
							{
								?>
								<option value="<?php echo $car->Cartype_id;?>">
								<?php echo $car->Car_type;?></option>
								<?php 
							}?>
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
                      <label>Add location* </label>
                      <select name="Location_id" class="form-control">
							<option> select location </option>
							<?php foreach($loca_id_arr as $loca)
							{
								?>
								<option value="<?php echo $loca->Location_id;?>">
								<?php echo $loca->Loca_name;?></option>
								<?php 
							}?>
							</select></div>
							
					
					<div class="form-group form-inline ">
					     <label for="img" style="margin-top:10px;">Insurance	</label>
                             <input type="file" id="Insurance" name="Insurance" style="margin-left:150px;" accept="image/*"><br>
				     </div> 
					
                      <div class="form-group form-inline">
                      <label>Rent </label>
                      <input type="text" name="Rent" class="form-control" style="margin-left:119px;" placeholder="Enter Rent" name="Rent" >
                    </div>
                    
					 <div class="form-group form-inline">
                      <label>Rent_type </label>
                      <input type="text" name="Rent_type" class="form-control" style="margin-left:119px;" placeholder="Day/Km/Hour" >
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