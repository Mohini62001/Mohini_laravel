<?php 
include_once('header.php');
?>


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Location
          
          </h1>

        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Location Information</h3>
                </div><!-- /.box-header -->
                <div class="box-body"  style="overflow-x:auto;">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Location_id </th>
                        <th>Loca_name</th>
                        <th>City</th>
						<th>Created_dt/Updated_dt</th>
						<th>Delete</th>
						<th>Edit</th>
                        
                        
						
						
                      </tr>
                    </thead>
                    <tbody>
                      <?php
					  foreach($loca_arr as $data)
					  {
						?>
                            <tr>
							<td><?php echo $data->Location_id ?></td>
							<td><?php echo $data->Loca_name ?></td>
							<td><?php echo $data->Loca_City ?></td>
							<td><?php echo $data->Created_dt?>/<?php echo $data->Updated_dt?></td>
							<td><a href="delete?del_Location_id=<?php echo $data->Location_id?>" class="btn btn-danger">Delete</a></td>
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