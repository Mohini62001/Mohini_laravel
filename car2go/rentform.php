<?php

include_once('header.php');

?>
        
        
        
        
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Rent-A-Car</p>
                     <h2>Rent your <span style="color:red";>CAR</span>, And <span style="color:red";>EARN</span> Money</h2>
                       </div>
                <div class="row">
                  
                    <div class="col-md-7">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form name="sentMessage"  novalidate="novalidate" mathod="post" enctype="multipart/form-data" role="form">
                                
								<div class="control-group">
								<h5>  First Name*</h5>
                                    <input type="text" class="form-control"  name="First_name" placeholder="Your First Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
								
								<div class="control-group">
								<h5>  Last Name*</h5>
                                    <input type="text" class="form-control"  name="Last_name" placeholder="Your Last Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                               
							   <div class="control-group">
								<h5>  Email*</h5>
                                    <input type="email" class="form-control"  name="Email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                               
							   <div class="control-group">
							   <h5>  Mobile No*</h5>
                                    <input type="text" class="form-control"  name="Mobile_no" placeholder="Mobile no" required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
								
                                <div class="control-group">
								 <h5>  Address*</h5>
                                    <textarea class="form-control"  name="Address" placeholder="Address" required="required" data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
								
								 <div class="control-group">
							   <h5>  Pin Code*</h5>
                                    <input type="text" class="form-control"  name="Pin_code" placeholder="Pin Code" required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
								
								<div class="control-group">
							   <h5>  City*</h5>
                                    <input type="text" class="form-control"  name="City" placeholder="City" required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
								
								<div class="control-group">
							   <h5>  License*</h5>
                                    <input type="file" class="form-control"  name="License" placeholder="License" required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
								
								<div class="control-group">
							   <h5>  Aadhaar Card*</h5>
                                    <input type="file" class="form-control"  name="Adhaarcard" placeholder="Adhaarcard" required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
								
                                <div>
                                    <button class="btn btn-custom" type="submit" name="submit" value="submit" id="sendMessageButton">Send Request</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Contact End -->


      <?php
	   include_once('footer.php');
	   ?>