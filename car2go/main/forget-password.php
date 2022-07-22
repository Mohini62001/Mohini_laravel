<?php
    include_once('header.php');
?>
<head>
<style>
.Rent .Rent-form {
	width: 100%;
    padding: 45px 30px;
	margin-left: 400px;
    background: #E81C2E;
    border-radius: 5px;
	margin-top: 50px;
}

.Rent .Rent-form h3 {
    color: #ffffff;
    font-size: 25px;
    font-weight: 700;
    margin-bottom: 25px;
}

.Rent .Rent-form h5 {
    color: #ffffff;
    font-size: 15px;
    font-weight: 700;
}

.Rent .Rent-form p {
    color: #ffffff;
    font-size: 15px;
    font-weight: 700;
	margin-left: 85px;
}

.Rent .Rent-form b {
    color: #ffffff;
    font-size: 15px;
    font-weight: 700;
	margin-left: 85px;
}

.Rent .Rent-form .control-group {
    margin-bottom: 15px;
	width: 80%;
}

.Rent .Rent-form .form-control {
    height: 45px;
    color: #ffffff;
    padding: 0 15px;
    border-radius: 5px;
    border: 1px solid #ffffff;
    background: transparent;
}

.Rent .Rent-form textarea.form-control {
    height: 120px;
    padding: 15px;
	width: 80%;
}

.Rent .Rent-form .form-control::placeholder {
    color: #ffffff;
    opacity: 1;
	width: 80%;
}

.Rent .Rent-form .form-control:-ms-input-placeholder,
.Rent .Rent-form .form-control::-ms-input-placeholder {
    color: #ffffff;
}

.Rent .Rent-form .btn.btn-custom {
    width: 40%;
    color: #E81C2E;
    background: #ffffff;
    box-shadow: inset 0 0 0 0 #202C45;
	margin-left: 155px;
}

.Rent .Rent-form .btn.btn-custom:hover {
    color: #ffffff;
    background: #E81C2E;
    box-shadow: inset 400px 0 0 0 #202C45;
}

@media(min-width: 576px) and (max-width: 991.89px) {
    .Rent .Rent-form .btn.btn-custom:hover {
        box-shadow: inset 650px 0 0 0 #202C45;
    }
}
</style>
</head>
          <div class="Rent">
            <div class="col-lg-5">
                        <div class="Rent-form">
                            <h3>Forget Password</h3>
                            <form>
							   
                               <div class="control-group "> 
							        <div class="wthree_input">
							          <i class="fa fa-envelope" aria-hidden="true"></i>
									<input type="email" class="form-control" placeholder="Email" required="required" /> 
                                </div>
								</div>
							    
                                <br>
							
                                <div>
                                    <button class="btn btn-custom" type="submit">Reset Password</button>
                                </div>
								
                            </form>
							
							

									
									<a href="login" ><h5>Login now</h5></a>
                        </div>
            </div>
		</div>			
<?php
    include_once('footer.php');
?>