<?php
if(isset($_SESSION['Customer_id']))
{
	echo "<script>			
		window.location='index';
		</script>";
}
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
    width: 30%;
    color: #E81C2E;
    background: #ffffff;
    box-shadow: inset 0 0 0 0 #202C45;
	
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
                            <h3>Sign In</h3>
                            <form method="post" enctype="multipart/form-data" role="form">
							   
                               <div class="control-group "> 
							        <div class="wthree_input">
										<i class="fa fa-user" aria-hidden="true"></i>
										<input type="text" class="form-control" name="Username" placeholder="Username" required="required" /> 
									</div>
                                </div>
							    
                                <div class="control-group">
									<div class="wthree_input">
										<i class="fa fa-key" aria-hidden="true"></i>
										<input type="password" class="form-control" name="Password" placeholder="Password" required="required" /> 
									</div>
								</div>
							<br>
							
                                <div>
                                    <button class="btn btn-custom" name="login" type="submit">Login</button>
                                </div>
								
                            </form>
							
							<div class="social-auth-links text-center control-group" ><br>
								<p>- OR -</p>
									<a href="https://www.facebook.com/"  ><i class="fa fa-facebook   " ></i><b> Sign in using Facebook</b></a><br>
									<a href="https://accounts.google.com/Login/signinchooser?flowName=GlifWebSignIn&flowEntry=ServiceLogin" ><i class="fa fa-google-plus "></i> <b>Sign in using Google+</b></a>
							</div><!-- /.social-auth-links -->

									<a href="forget-password"><h5>I forgot my password</h5></a>
									<a href="registeration" ><h5>Create New Account</h5></a>
                        </div>
            </div>
		</div>			

<?php
 include_once('footer.php');
?>
						