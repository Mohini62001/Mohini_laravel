<?php 
include_once('header.php');
?>


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manage Booking
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Car Booking</a></li>
            <li class="active">Manage Booking</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Manage Booking</h3>
                </div><!-- /.box-header -->
                <div class="box-body" style="overflow-x:auto;">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Booking_id</th>
                        <th>Customer_id</th>
                        <th>Caradv_id</th>
                        <th>Car_img</th>
						<th>Car_model</th>
						<th>Car_no</th>
						<th>Car_type</th>
						<th>Pickup</th>
						<th>Return</th>
						<th>Rent</th>
						 <th>Created_dt/Updated_dt</th>
						<th>Delete</th>
						<th>Edit</th>
                        
						
                      </tr>
                    </thead>
                    <tbody>
                      <?php
					  foreach($booking_arr as $data)
					  {
						?>
                            <tr>
							<td><?php echo $data->Booking_id?></td>
							<td><?php echo $data->Customer_id?></td>
							<td><?php echo $data->Caradv_id?></td>
							<td><?php echo $data->Car_img?></td>
							<td><?php echo $data->Car_model?></td>
							<td><?php echo $data->Car_no?></td>
							<td><?php echo $data->Car_type?></td>
							<td><?php echo $data->Pickup?></td>
							<td><?php echo $data->Return?></td>
							<td><?php echo $data->Rent?></td>
							<td><?php echo $data->Created_dt?>/<?php echo $data->Updated_dt?></td>
							<td><a href="delete?del_Booking_id=<?php echo $data->Booking_id?>" class="btn btn-danger">Delete</a></td>
							<td><a href="" class="btn btn-primary">Edit</a></td>
                            </tr>	
                       <?php							
					  }
					  ?>
                    </tbody>
                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    <?php
	include_once('footer.php');
	?>