@extends('Frontend.Layout.mainlayout')
@section('remaining_content')

@push ('title')
 <title>Cart</title>
 @endpush

<!-- Main Start -->
	<div class="main-section"> 
	 <div class="page-section">
	   <div class="container">
	     <div class="row">
	       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	         <div class="woocommerce">
		     <form method="post" action="#">
			 <table class="shop_table shop_table_responsive cart">
			 	<thead>
       				<tr>
       					<th class="product-remove">PRODUCT</th>
       					<th class="product-thumbnail">Price</th>
       					<th class="product-name">Quantity</th>
       					<th class="product-price">Total</th>
       				</tr>
				</thead>
					<tbody>
                            <tr class="cart_item">
                                   <td class="product-remove">
                                   <a data-product_sku="" data-product_id="31" title="Remove this item" class="remove" href="#">×</a>
                                   <a href="#" class="product-thumbnail"><img src="{{url('Frontend/assets/extra-images/product-img-1.jpg')}}" alt=""/></a>
                                   <a href="#" class="product-name">Brembo Sport Brakes</a>					
                                   </td>
                                   <td data-title="Price" class="product-price">
                                   <span class="amount cs-color">$2,000.00</span>					
                                   </td>
                                   <td data-title="Quantity" class="product-quantity">
                                   <form id='myform' method='POST' action='#' class="cart">
                                     <div class="quantity">
                                          <input type='button' value='-' class='qtyminus' field='quantity' />
                                          <input type='text' name='quantity' value='0' class='qty' />
                                          <input type='button' value='+' class='qtyplus' field='quantity' />
                                      </div>
                                   </form>
                                   </td>
                                   <td data-title="Total" class="product-subtotal">
                                   <span class="amount">$110.00</span>					
                                   </td>
                            </tr>
                            <tr class="cart_item">
                                   <td class="product-remove">
                                   <a data-product_sku="" data-product_id="31" title="Remove this item" class="remove" href="#">×</a>
                                   <a href="#" class="product-thumbnail"><img src="{{url('Frontend/assets/extra-images/product-img-2.jpg')}}" alt=""/></a>
                                   <a href="#" class="product-name">USB Air Compressor</a>					
                                   </td>
                                   <td data-title="Price" class="product-price">
                                   <span class="amount cs-color">$140.00</span>					
                                   </td>
                                   <td data-title="Quantity" class="product-quantity">
                                   <form id='myform' method='POST' action='#' class="cart">
                                     <div class="quantity">
                                          <input type='button' value='-' class='qtyminus' field='quantity' />
                                          <input type='text' name='quantity' value='0' class='qty' />
                                          <input type='button' value='+' class='qtyplus' field='quantity' />
                                      </div>
                                   </form>
                                   </td>
                                   <td data-title="Total" class="product-subtotal">
                                   <span class="amount">$110.00</span>					
                                   </td>
                            </tr>
                            <tr class="cart_item">
                                   <td class="product-remove">
                                   <a data-product_sku="" data-product_id="31" title="Remove this item" class="remove" href="#">×</a>
                                   <a href="#" class="product-thumbnail"><img src="{{url('Frontend/assets/extra-images/product-img-3.jpg')}}" alt=""/></a>
                                   <a href="#" class="product-name">Air Filter</a>					
                                   </td>
                                   <td data-title="Price" class="product-price">
                                   <span class="amount cs-color">$15.00</span>					
                                   </td>
                                   <td data-title="Quantity" class="product-quantity">
                                   <form id='myform' method='POST' action='#' class="cart">
                                     <div class="quantity">
                                          <input type='button' value='-' class='qtyminus' field='quantity' />
                                          <input type='text' name='quantity' value='0' class='qty' />
                                          <input type='button' value='+' class='qtyplus' field='quantity' />
                                      </div>
                                   </form>
                                   </td>
                                   <td data-title="Total" class="product-subtotal">
                                   <span class="amount">$110.00</span>					
                                   </td>
                            </tr>
                            <tr class="cart_item">
                                   <td class="product-remove">
                                   <a data-product_sku="" data-product_id="31" title="Remove this item" class="remove" href="#">×</a>
                                   <a href="#" class="product-thumbnail"><img src="{{url('Frontend/assets/extra-images/product-img-4.jpg')}}" alt=""/></a>
                                   <a href="#" class="product-name">Car speaker</a>					
                                   </td>
                                   <td data-title="Price" class="product-price">
                                   <span class="amount cs-color">$20.00</span>					
                                   </td>
                                   <td data-title="Quantity" class="product-quantity">
                                   <form id='myform' method='POST' action='#' class="cart">
                                     <div class="quantity">
                                          <input type='button' value='-' class='qtyminus' field='quantity' />
                                          <input type='text' name='quantity' value='0' class='qty' />
                                          <input type='button' value='+' class='qtyplus' field='quantity' />
                                      </div>
                                   </form>
                                   </td>
                                   <td data-title="Total" class="product-subtotal">
                                   <span class="amount">$110.00</span>					
                                   </td>
                            </tr>
                            <tr class="cart_item">
                                   <td class="product-remove">
                                   <a data-product_sku="" data-product_id="31" title="Remove this item" class="remove" href="#">×</a>
                                   <a href="#" class="product-thumbnail"><img src="{{url('Frontend/assets/extra-images/product-img-5.jpg')}}" alt=""/></a>
                                   <a href="#" class="product-name">Car wheel</a>					
                                   </td>
                                   <td data-title="Price" class="product-price">
                                   <span class="amount cs-color">$99.00</span>					
                                   </td>
                                   <td data-title="Quantity" class="product-quantity">
                                   <form id='myform' method='POST' action='#' class="cart">
                                     <div class="quantity">
                                          <input type='button' value='-' class='qtyminus' field='quantity' />
                                          <input type='text' name='quantity' value='0' class='qty' />
                                          <input type='button' value='+' class='qtyplus' field='quantity' />
                                      </div>
                                   </form>
                                   </td>
                                   <td data-title="Total" class="product-subtotal">
                                   <span class="amount">$110.00</span>					
                                   </td>
                            </tr>
                            <tr class="cart_item">
                                   <td class="product-remove">
                                   <a data-product_sku="" data-product_id="31" title="Remove this item" class="remove" href="#">×</a>
                                   <a href="#" class="product-thumbnail"><img src="{{url('Frontend/assets/extra-images/product-img-6.jpg')}}" alt=""/></a>
                                   <a href="#" class="product-name">Car Brush</a>					
                                   </td>
                                   <td data-title="Price" class="product-price">
                                   <span class="amount cs-color">$2,000.00</span>					
                                   </td>
                                   <td data-title="Quantity" class="product-quantity">
                                   <form id='myform' method='POST' action='#' class="cart">
                                     <div class="quantity">
                                          <input type='button' value='-' class='qtyminus' field='quantity' />
                                          <input type='text' name='quantity' value='0' class='qty' />
                                          <input type='button' value='+' class='qtyplus' field='quantity' />
                                      </div>
                                   </form>
                                   </td>
                                   <td data-title="Total" class="product-subtotal">
                                   <span class="amount">$110.00</span>					
                                   </td>
                            </tr>
                            <tr>
                                   <td class="actions" colspan="6">
                                   <input type="submit" value="Continue shoping" name="Continue shoping" class="button pull-left">
                                   <input type="submit" value="Update Cart" name="Update Cart" class="button pull-right">
                                   </td>
                            </tr>
                        </tbody>
			 </table>
	         </form>
                <div class="coupon">
                    <label for="coupon_code">Coupon</label> 
                    <p>Enter your coupon code if you have one.</p>
                    <input type="text" placeholder="Coupon code" value="" id="coupon_code" class="input-text" name="coupon_code"> 
                    <input type="submit" value="Apply Coupon" name="apply_coupon" class="button">
                </div>
                     <div class="cart-collaterals">
                        <div class="cart_totals calculated_shipping">
                             <table cellspacing="0" class="shop_table shop_table_responsive">
                                 <tbody>
                                 <tr class="cart-subtotal">
                                   <th>Sub total:</th>
                                   <td data-title="Subtotal"><span class="amount">$559.00</span></td>
                                 </tr>
                                 <tr class="order-total">
                                   <th>total:</th>
                                   <td data-title="Total"><strong><span class="amount">$559.00</span></strong> </td>
                                 </tr>
                                </tbody>
                             </table>
                            <div class="wc-proceed-to-checkout"> 
                            <a class="checkout-button button alt wc-forward" href="#">Procee to checkout</a>
                          </div>
                        </div>
                     </div>
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