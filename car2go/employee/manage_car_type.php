<?php 
include_once('header.php');
?>


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manage Car Type
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"> Car Type</a></li>
            <li class="active">Manage Car Type</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Car Information</h3>
                </div><!-- /.box-header -->
                <div class="box-body"  style="overflow-x:auto;">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Cartype_id</th>
                        <th>Car_type</th>
                        <th>Car_img</th>
						
						<th>Description</th>
						
						<th>Created_dt/Updated_dt</th>
						<th>Delete</th>
						<th>Edit</th>
                        
                        
						
						
                      </tr>
                    </thead>
                    <tbody>
                      <?php
					  foreach($cartype_arr as $data)
					  {
						?>
                            <tr>
							<td><?php echo $data->Cartype_id?></td>
							<td><?php echo $data->Car_type?></td>
							<td><img src="../Admin/upload/cartype/<?php echo $data->car_img?>" width="50px" height="50px"></td>

							
							<td><?php echo $data->Description?></td>
						
							<td><?php echo $data->Created_dt?>/<?php echo $data->Updated_dt?></td>
						<td><a href="delete?del_Cartype_id=<?php echo $data->Cartype_id?>" class="btn btn-danger">Delete</a></td>
							<td><a href="edit_cartype?btn_Cartype_id=<?php echo $data->Cartype_id;?>" class="btn btn-primary">Edit</a></td>
							
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