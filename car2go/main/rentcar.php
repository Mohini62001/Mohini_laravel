<style>
/*************************
*******checkout CSS******
**************************/

.step-one {
  margin-bottom: -10px
}

.register-req, .step-one .heading {
  background: none repeat scroll 0 0 #F0F0E9;
  color: #363432;
  font-size: 20px;
  margin-bottom: 35px;
  padding: 10px 25px;
  font-family: 'Roboto', sans-serif;
}

.checkout-options {
  padding-left: 20px
}


.checkout-options h3 {
  color: #363432;
  font-size: 20px;
  margin-bottom: 0;
  font-weight: normal;
  font-family: 'Roboto', sans-serif;
}

.checkout-options p {
  color: #434343;
  font-weight: 300;
  margin-bottom: 25px;
}

.checkout-options .nav li {
  float: left;
  margin-right: 45px;
  color: #696763;
  font-size: 18px;
  font-family: 'Roboto', sans-serif;
  font-weight: normal;
}

.checkout-options .nav label {
  font-weight: normal;
}

.checkout-options .nav li a {
  color: #FE980F;
  font-size: 18px;
  font-weight: normal;
  padding: 0
}

.checkout-options .nav li a:hover {
  background: inherit;
}

.checkout-options .nav i {
  margin-right: 10px;
  border-radius: 50%;
  padding: 5px;
  background: #FE980F;
  color:#fff;
  font-size: 14px;
  padding: 2px 3px;
}


.register-req  {
  font-size: 14px;
  font-weight: 300;
  padding: 15px 20px;
  margin-top: 35px;

}

.register-req p {
  margin-bottom: 0
}



.shopper-info p, 
.bill-to p, 
.order-message p {
  color: #696763;
  font-size: 20px;
  font-weight: 300
}


.shopper-info .btn-primary {
  background: #FE980F;
  border: 0 none;
  border-radius: 0;
  margin-right: 15px;
  margin-top: 20px;
}


.form-two, .form-one {
  float: left;
  width: 47%
}


.shopper-info > form > input, 
.shopper-info > form > select,
.form-two > form > select, 
.form-two > form > input, 
.form-one > form > input {
  background:#F0F0E9;
  border: 0 none;
  margin-bottom:10px;
  padding: 10px;
  width: 100%;
  font-weight: 300
}

.form-two > form > select {
  padding:10px 5px
}

.form-two {
  margin-left: 5%
}

.shopper-info textarea {
	background:#F0F0E9;
	 font-size: 12px;
  height: 100px;
  width: 100%;
  margin-bottom: 20px;
  padding: 15px 20px;
}
	
.order-message textarea {
  font-size: 12px;
  height: 335px;
  margin-bottom: 20px;
  padding: 15px 20px;
}

.order-message label {
  font-weight:300;
  color: #696763;
  font-family: 'Roboto', sans-serif;
  margin-left: 10px;
  font-size: 14px
}


.review-payment h2 {
  color: #696763;
  font-size: 20px;
  font-weight: 300;
  margin-top: 45px;
  margin-bottom: 20px
}

.payment-options {
  margin-bottom:125px;
  margin-top: -25px
}

.payment-options span label {
  color: #696763;
  font-size: 14px;
  font-weight: 300;
  margin-right: 30px;
}

#cart_items .cart_info 
.table.table-condensed.total-result {
  margin-bottom: 10px;
  margin-top: 35px;
  color: #696763
}

#cart_items .cart_info 
.table.table-condensed.total-result tr {
  border-bottom: 0
}

#cart_items .cart_info 
.table.table-condensed.total-result span {
  color: #FE980F;
  font-weight: 700;
  font-size: 16px
}

#cart_items .cart_info 
.table.table-condensed.total-result 
.shipping-cost {
  border-bottom: 1px solid #F7F7F0;
}


.order_button button {
  cursor: pointer;
  font-size: 16px;
  line-height: 30px;
  padding: 5px 10px;
  text-transform: capitalize;
  color: #ffffff;
  background: #1D1678;
  font-weight: 600;
  -webkit-transition: 0.3s;
  transition: 0.3s;
  margin-bottom: 0;
  border-radius: 5px;
  margin-top : 300px;
  margin-left : 540px;
}
@media only screen and (max-width: 767px) {
  .order_button button {
    font-size: 14px;
  }
}
.order_button button:hover {
  background: #242424;
}


</style>


			
<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
						<div class="shopper-info">
							<h3 style="color: #ffffff ; background-color: #1D1678 ; height: 50px ; text-align: center";>Car Information</h3>
							<form>
							     <h3>Car Type*</h3>
								 <select style=" padding:10px 5px";>
										<option>-- Class--</option>
										<option value="Economy"> Economy </option>
										<option value="Intermediate">Intermediate </option>
										<option value="Standard"> Standard </option>
										
									</select>
									
							     <h3>Car Model*</h3>
								<input id="model" input type="text" placeholder="Car's Model">
								
								 <h3>Car Brand* </h3>
								<input id="brand" type="text"  placeholder="Car's Brand" required="" />
								
								<h3>Car No*</h3>
								<input id="carno" input type="text" placeholder="Car's No">
								
								<h3>RC No*</h3>
								<input id="rcno" input type="text" placeholder="RC No">
								
								<h3>Car Image*</h3>
								<input id="img" type="file"  placeholder="Car's image" required="" />
								
								<h3>Description*</h3>
								<textarea name="description" placeholder="Description" required="required" ></textarea>
								
								<h3>Passenger Capacity*</h3>
								<input id="passenger" input type="text" placeholder="Passenger capacity">
								
								<h3>Rent Per Day</h3>
								<input id="price" input type="price" placeholder="Rent">
							</form>
							
						</div>
					</div>
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
						<h3 style="color: #ffffff ; background-color: #1D1678 ; height: 50px ; text-align: center";>Personal Information</h3>
							<div class="form-one">
								<form>
							        <h3>  Email*</h3>
									<input type="text" placeholder="Email*">
									
									<h3>First Name*</h3>
									<input type="text" placeholder="First Name *">
									
									
									
									<h3>Last Name*</h3>
									<input type="text" placeholder="Last Name *">
									
									<h3>Street address*</h3>
									<input type="text" placeholder="House number and street name">
									
									
									<input type="text" placeholder="Apartment, suite, unit etc. (optional)">
									
									<h3>License*</h3>
									<input type="file">
									
									<h3>Aadhaar Card*</h3>
									<input type="file">
								</form>
							</div>
							<div class="form-two">
								<form>
								
									<h3>Pin Code*</h3>
									<input type="text" placeholder="Pin Code *">
									<h3>City*</h3>
									<select>
										<option>-- City--</option>
										<option value="Ahmedabad"> Ahmedabad </option>
										<option value="Surat"> Surat </option>
										<option value="Vadodara"> Vadodara </option>
										<option value="Anand"> Dahod </option>
										<option value="Gandhinagar"> Gandhinagar </option>
										<option value="Rajkot"> Rajkot </option>
									</select>
									
									
							        
									<h3>Mobile No*</h3>
									<input type="text" placeholder="Mobile ">
									
								</form>
								<div class="order_button">
                                    <button  type="submit">Rent Car</button> 
                                </div> 
							</div>
						</div>
					</div>

				</div>
			</div>