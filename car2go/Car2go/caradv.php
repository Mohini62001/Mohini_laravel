<?php
include_once('header.php');
?>
        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Book Car</p>
                    <h2><span style="color:red";>Find</span>   &amp;   <span style="color:red";>Book</span> <br> a Great Deal Today</h2>
                </div>
				
                <div class="row">
				<?php
					foreach($adv_arr as $d)
					{
					?>
				
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="../Admin/upload/car/<?php echo $d->Car_img?>" style=" height:250px" alt="Image">
                                <div class="meta-date">
                                    <span>Rent</span>
                                    <strong><?php echo $d->Rent;?></strong>
                                    <span><?php echo $d->Rent_type;?></span>
                                </div>
                            </div>
                            <div class="blog-text">
                                <h3><a href="product?btn_Caradv_id=<?php echo $d->Caradv_id;?>"><?php echo $d->Title;?></a></h3>
                                <p>
                                    <?php echo $d->Description;?>
						   </p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href=""><?php echo $d->Passenger_cap;?></a></p>
                                <p><i class="fa fa-car"></i><a href=""><?php echo $d->Car_model;?></a></p>
								
                                <p><i class="fa fa-location"></i><a href="">15 Comments</a></p>
								
                            </div>
                        </div>
						
                    </div>
					<?php
					}
					?>
					
                  
					
                    
					
                </div>
            </div>
        </div>
        <!-- Blog End -->


<?php
include_once('footer.php');
?>