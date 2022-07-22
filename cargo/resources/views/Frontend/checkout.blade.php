@extends('Frontend.Layout.mainlayout')
@section('remaining_content')

@push ('title')
 <title>Checkout</title>
 @endpush
<!-- Main Start -->
	<div class="main-section"> 
	 <div class="page-section">
	   <div class="container">
	     <div class="row">
	       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	         <div class="woocommerce">
	           <div class="woocommerce-info">
	            <span class="cs-color">Informational.</span>
	            Returning customer?
                 <a class="showlogin cs-color" href="#">Click here to login</a>
	           </div>
	           <form class="checkout woocommerce-checkout row">
	             <div id="customer_details" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	               <div class="col2-set">
	                 <div class="woocommerce-billing-fields">
	                   <h4>Billing Details</h4>
	                   <p class="form-row form-row form-row-first validate-required">
		                   <label class="" for="billing_first_name">First Name <abbr title="required" class="required">*</abbr></label>
		                   <input type="text" value="" placeholder="John" class="input-text ">
	                   </p>
	                   <p class="form-row form-row form-row-last validate-required">
	                     <label class="" for="billing_last_name">Last Name <abbr title="required" class="required">*</abbr></label>
	                     <input type="text" value="" placeholder="Snow" id="billing_last_name" name="billing_last_name" class="input-text ">
	                   </p>
	                   <p class="form-row form-row form-row-first validate-required">
		                   <label class="" for="billing_first_name">Company Name</label>
		                   <input type="text" value="" placeholder="Chimp Solutions" class="input-text ">
	                   </p>
	                   <p class="form-row form-row form-row-last validate-required">
	                     <label class="" for="billing_last_name">Email Address  <abbr title="required" class="required">*</abbr></label>
	                     <input type="text" value="" placeholder="Info@chimpsolutions.co.uk" id="billing_last_name" name="billing_last_name" class="input-text ">
	                   </p>
	                   <p class="form-row form-row form-row-first validate-required">
		                   <label class="" for="billing_first_name">Phone  <abbr title="required" class="required">*</abbr></label>
		                   <input type="text" value="" placeholder="+44 123 4567 89" class="input-text ">
	                   </p>
	                   <p class="form-row form-row form-row-last validate-required">
	                     <label class="" for="billing_last_name">Country   <abbr title="required" class="required">*</abbr></label>
	                     <input type="text" value="" placeholder="United Kingdom" id="billing_last_name" name="billing_last_name" class="input-text ">
	                   </p>
	                   <p class="form-row form-row form-row-first validate-required">
		                   <label class="" for="billing_first_name">Address <em>(1)</em>   <abbr title="required" class="required">*</abbr></label>
		                   <input type="text" value="" placeholder="Street Address" class="input-text ">
	                   </p>
	                   <p class="form-row form-row form-row-last validate-required">
	                     <label class="" for="billing_last_name">Address <em>(2)</em>  <abbr title="required" class="required">*</abbr></label>
	                     <input type="text" value="" placeholder="Apartment, suite, unit etc. (optional)" id="billing_last_name" name="billing_last_name" class="input-text ">
	                   </p>
	                   <p class="form-row form-row form-row-first validate-required">
		                   <label class="" for="billing_first_name">Town / City    <abbr title="required" class="required">*</abbr></label>
		                   <input type="text" value="" placeholder="London" class="input-text ">
	                   </p>
	                   <p class="form-row form-row form-row-last validate-required">
	                     <label class="" for="billing_last_name">Postcode / Zipe   <abbr title="required" class="required">*</abbr></label>
	                     <input type="text" value="" placeholder="NW1W" id="billing_last_name" name="billing_last_name" class="input-text ">
	                   </p>
	                   <div class="clear"></div>
	                   <p class="form-row form-row-wide create-account">
							<input type="checkbox" value="1" name="createaccount" id="createaccount" class="input-checkbox"> 
						    <label class="checkbox" for="createaccount">Create an account?</label>
						</p>
						<div class="create-account" style="display: block;">
				         <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
				         <p id="account_password_field" class="form-row form-row form-row-first validate-required"><label class="" for="account_password">Account password 
				         <abbr title="required" class="required">*</abbr></label><input type="password" value="" placeholder="Password" id="account_password" name="account_password" class="input-text ">
				         </p>
			            </div>
	                 </div>
	               </div>
	             </div>
	             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	               <h4>Your order</h4>
	             <div class="woocommerce-checkout-review-order" id="order_review">
		           <table class="shop_table woocommerce-checkout-review-order-table">
					<thead>
						<tr>
							<th class="product-name">Product</th>
							<th class="product-total">Total</th>
						</tr>
					</thead>
					<tbody>
						<tr class="cart_item">
					     <td class="product-name"> Air Filter  × 1</td>
					     <td class="product-total"><span class="amount">$250.00</span></td>
				        </tr>			
					</tbody>
					<tfoot>
						<tr class="cart-subtotal">
							<th>Subtotal</th>
							<td><span class="amount">$250.00</span></td>
						</tr>			
						<tr class="shipping">
						<th>Shipping</th>
						<td></td>
						</tr>		
						<tr class="order-total">
							<th>Total</th>
							<td><strong><span class="amount">$250.00</span></strong> </td>
						</tr>			
					</tfoot>
                   </table>
	             </div>
	            </div>
	            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	              <h4>payment</h4>
                 <div class="woocommerce-checkout-payment" id="payment">
					<ul class="wc_payment_methods payment_methods methods">
						<li class="wc_payment_method payment_method_cheque">
				         <input type="radio" data-order_button_text="" name="1" value="cheque" class="input-radio" id="payment_method_cheque">
				         <label for="payment_method_cheque">Cheque Payment</label>
						<div class="payment_box payment_method_cheque">
						 <p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
					    </div>
				      </li>
					  <li class="wc_payment_method payment_method_paypal">
						<input type="radio" data-order_button_text="Proceed to PayPal" name="1" value="paypal" class="input-radio" id="payment_method_paypal">
						<label for="payment_method_paypal">
							PayPal 
						</label>
						</li>
						<li>
							<div class="radiobox">
							  <input type="radio" name="2" value="" id="paypal">
							  <label for="paypal"><img src="{{url('Frontend/assets/images/paypal-img.jpg')}}" alt=""/></label>
							</div>
							<div class="radiobox">
							  <input type="radio" name="2" value="skrill" id="skrill">
							  <label for="skrill"><img src="{{url('Frontend/assets/images/skrill-img.jpg')}}" alt=""/></label>
							</div>
							<div class="radiobox">
							  <input type="radio" name="2" value="fastbank" id="fastbank">
							  <label for="fastbank"><img src="{{url('Frontend/assets/images/fastbank-img.jpg')}}" alt=""/></label>
							</div>	
							<div class="radiobox">
							  <input type="radio" name="2" value="authorize" id="authorize">
							  <label for="authorize"><img src="{{url('Frontend/assets/images/authorize-img.jpg')}}" alt=""/></label>
							</div>
						</li>
				    </ul>
					<div class="form-row place-order">
						<input type="submit" data-value="Upload Photos" value="Upload Photos" class="button alt cs-bgcolor">	
					</div>
                   </div>
                 </div>
	           </form>
	         </div>
	       </div>
	     </div>
	   </div>
	 </div>
	 <div style="background:#19171a;;" class="page-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div style="text-align:center; padding:55px 0 25px;" class="cs-ad">
							<div class="cs-media">
								<figure> <img src="{{url('Frontend/assets/extra-images/cs-ad-img.jpg')}}" alt=""> </figure>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Main End --> 
	@endsection