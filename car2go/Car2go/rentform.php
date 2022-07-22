 <?php
    include_once('header.php');
?>
<br>
<br>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                   <div class="section-header text-center">
                    <p>Rent-A-Car</p>
                     <h2>Rent your <span style="color:red";>CAR</span>, And <span style="color:red";>EARN</span> Money</h2>
                       </div>
                </div><br>
                <div class="row">
                    <div class="col-sm-12">
                        <form method="post" enctype="multipart/form-data" role="form">
                            <div class="row">
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                         <label>First Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control"  name="First_name" placeholder="Your First Name" required="required" data-validation-required-message="Please enter your name" />
                                    </div>
                                </div>
								 <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                         <label>Last Name<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control"  name="Last_name" placeholder="Your Last Name" required="required" data-validation-required-message="Please enter your name" />
                                   </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>Email</label>
                                         <input type="email" class="form-control"  name="Email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                   </div>
                                </div>

                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>Pin Code<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control"  name="Pin_code" placeholder="Pin Code" required="required" data-validation-required-message="Please enter a subject" />
                                     </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control"  name="City" placeholder="City" required="required" data-validation-required-message="Please enter a subject" />
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label> Address</label>
                                        <textarea class="form-control"  name="Address" placeholder="Address" required="required" data-validation-required-message="Please enter your message"></textarea>
                                   </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>Mobile No<span class="text-danger">*</span></label>
                                        <input type="text" class="form-control"  name="Mobile_no" placeholder="Mobile no" required="required" data-validation-required-message="Please enter a subject" />
                                     </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>License <span class="text-danger">*</span></label>
                                        <div class="cal-icon">
                                             <input type="file" class="form-control"  name="License" placeholder="License" required="required" data-validation-required-message="Please enter a subject" />
                                    </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label>Aadhaar Card <span class="text-danger">*</span></label>
                                        <div class="cal-icon">
                                            <input type="file" class="form-control"  name="Adhaarcard" placeholder="Adhaarcard" required="required" data-validation-required-message="Please enter a subject" />
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center m-t-20">
                                
                                <button class="btn btn-custom" type="submit" name="submit" value="submit" id="sendMessageButton">Send Request</button>
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