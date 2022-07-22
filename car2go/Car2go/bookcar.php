<?php

include_once('header.php');

?>
    
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Find Your Car</p>
                    <h2></h2>
                </div>
                <div class="row">
                <div class="col-md-4">
                        <div class="contact-info">
                            <h2>Quick Contact Info</h2>
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="far fa-clock"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h3>Opening Hour</h3>
                                    <p>Mon - Fri, 8:00 - 9:00</p>
                                </div>
                            </div>
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fa fa-phone-alt"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h3>Call Us</h3>
                                    <p>+012 345 6789</p>
                                </div>
                            </div>
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h3>Email Us</h3>
                                    <p>info@example.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form name="search"  novalidate="novalidate" mathod="post" enctype="multipart/form-data" role="form">
							
                                <div class="control-group">
                                    <label>Car type</label>
                                    <select name="Cartype_id" class="form-control">
							<option> select car type </option>
							<?php foreach($cartype_id_arr as $car)
							{
								?>
								<option value="<?php echo $car->Cartype_id;?>">
								<?php echo $car->Car_type;?></option>
								<?php 
							}?>
							</select><p class="help-block text-danger"></p>
                                </div>
								
                                <div class="control-group">
                                    <label>Location</label>
                                    <select name="Location_id" class="form-control">
							<option> select location </option>
							<?php foreach($loca_id_arr as $loca)
							{
								?>
								<option value="<?php echo $loca->Location_id;?>">
								<?php echo $loca->Loca_City;?></option>
								<?php 
							}?>
							</select><p class="help-block text-danger"></p>
                                </div>
                                
                                <div>
                                    <button class="btn btn-custom" type="submit" name="submit" value="submit" id="search">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
				</div>
				
            </div>
        </div>
        <!-- Contact End -->
		
		<!-- new-project start -->
		<section  class="footer">
				<div class="container">
					<div class="footer-contact">
						<div class="row">
							<div class="col-md-10 col-sm-8">
								<div class="single-new-project" style="margin-bottom:25px";>
									<h2 >
										Want to Rent a car ? Let’s Start!
									</h2>
								</div><!-- /.single-new-project-->	
							</div><!-- /.col-->	
							<div class="col-md-2 col-sm-4">
								<div class="footer-newsletter">
									<a href="rentform" class="btn btn-custom">
										start now
									</a>
								</div><!-- /.single-new-project-->	
							</div><!-- /.col-->	
						</div><!-- /.row-->	
					</div><!-- /.new-project-details-->	
				</div><!-- /.container-->	

		</section><!-- /.new-project-->	
		<!-- new-project end -->
		


      <?php
	   include_once('footer.php');
	   ?>