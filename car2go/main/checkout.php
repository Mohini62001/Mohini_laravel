 <?php
    include_once('header.php');
?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Book a Car</h4>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-sm-12">
                        <form method="post" enctype="multipart/form-data" role="form">
                            <div class="row">
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                         <label>Name</label>
                                        <input class="form-control" type="text" name="Name" >
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="text" name="Email">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>Pin Code<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="Pin_code">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>City</label>
                                        <select class="select form-control" name="Location_id">
                                            <option>Select City</option>
											<?php foreach($loca_id_arr as $loca)
											{
											?>
											 <option value="<?php echo $loca->Location_id;?>">
											 <?php echo $loca->Loca_City;?></option>
											 <?php
											}
											?>
                                            
											
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label> Address</label>
                                        <textarea class="form-control" rows="3" name="Address"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>Mobile No<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="Mobile_no">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>Pick-Up date <span class="text-danger">*</span></label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" type="date" name="Pickup_date">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>Return Date <span class="text-danger">*</span></label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" type="date" name="return_date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-white">
                                            <thead>
                                                <tr>
                                                    <th style="width: 20px">No</th>
                                                    <th class="col-sm-2">Car No</th>
                                                    <th class="col-md-6">Car Model</th>
                                                    <th   style="width:100px;">Car Type</th>
                                                    <th style="width:80px;">Passenger Capacity</th>
                                                    <th>Rent</th>
                                                    <th> </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>
                                                        <input class="form-control"  id="carno" type="text" style="min-width:150px" value="<?php echo $fetch->Car_no;?>">
                                                    </td>
                                                    <td>
                                                        <input class="form-control"   id="model"type="text" style="min-width:150px" value="<?php echo $fetch->Car_model;?>" >
                                                    </td>
                                                    <td>
                                                        <input class="form-control" style="width:100px" type="text" value="<?php echo $fetch->Car_type;?>">
                                                    </td>
                                                    <td>
                                                        <input class="form-control" style="width:80px" type="text" value="<?php echo $fetch->Passenger_cap;?>">
                                                    </td>
                                                    <td>
                                                        <input  id="price" input type="price"  class="form-control form-amt"  style="width:120px" value="<?php echo $fetch->Rent;?>" >
                                                    </td>
                                                    <td><a href="javascript:void(0)" class="text-success font-18" title="Add"><i class="fa fa-plus"></i></a></td>
                                                </tr>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-white">
                                            <tbody>
                                                
                                                
                                                <tr>
                                                    <td colspan="5" style="text-align: right; font-weight: bold">
                                                         Total
                                                    </td>
                                                    <td  >
                                                       <input type="price"  class="form-control form-amt"  name="total_amount">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                  
                                </div>
                            </div>
                            <div class="text-center m-t-20">
                                
                                <button class="btn btn-primary submit-btn" name="save" value="Save" type="submit">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
   <?php
    include_once('footer.php');
?>