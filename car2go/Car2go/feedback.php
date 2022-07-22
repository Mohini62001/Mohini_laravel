<?php

include_once('header.php');

?>
        
        
        
        
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Get In Touch</p>
                    <h2>Feedback </h2>
                </div>
                <div class="row">
                    
                    <div class="col-md-9">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form name="sentMessage"  novalidate="novalidate" method="post" enctype="multipart/form-data" role="form" style="margin-left:300px";>
                                <div class="control-group">
                                    <input type="text" class="form-control" name="Name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input type="Email" class="form-control"  name="Email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
								
								 
                                <div class="control-group">
                                    <textarea class="form-control"  name="Message" placeholder="Give Your Feedback" required="required" data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit" value="submit" name="submit" id="sendMessageButton">Send Feedback</button>
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