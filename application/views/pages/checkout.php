<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="//geodata.solutions/includes/countrystatecity.js"></script>

        <!-- Start Page Title -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Checkout</h2>
                    <ul>
                        <li><a href="<?=base_url('Home')?>">Home</a></li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Start Checkout Area -->
		<section class="checkout-area ptb-100">
            <div class="container">
                
                <form action="<?=base_url('Cart/orderPlaced')?>" method="post">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="billing-details">
                                <h3 class="title">Billing Details</h3>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
										    <label>Country 
                                                <span class="required">*</span>
                                            </label>
                                            <div class="select-box">
                                                <select name="country" class=" form-control" id="countries">
                                                    <option value="">Select Country</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>First Name 
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="first_name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Last Name 
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="last_name">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label>Address 
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="full_address">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-6">
                                        <div class="form-group">
                                            <label>State  
                                                <span class="required">*</span>
                                            </label>
                                            <select name="state" class="states form-control" id="stateId">
                                                <option value="">Select State</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label> City 
                                                <span class="required">*</span>
                                            </label>
                                            <select name="city" class="cities form-control" id="cityId">
                                                <option value="">Select City</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Postcode / Zip 
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="zip_code">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Email Address 
                                                <span class="required">*</span>
                                            </label>
                                            <input type="email" class="form-control" name="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Phone 
                                                <span class="required">*</span>
                                            </label>
                                            <input type="text" class="form-control" name="phone">
                                        </div>
                                    </div>
                                    
                                    <!-- <div class="col-lg-12 col-md-12">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="ship-different-address">
                                            <label class="form-check-label" for="ship-different-address">Ship to a different address?</label>
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="notes" id="notes" cols="30" rows="5" placeholder="Order Notes" class="form-control"></textarea>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="order-details">
                                <h3 class="title">Your Order</h3>
                                <div class="order-table table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $arrayItems=$this->cart->contents();
                                                    // print_r($arrayItems);
                                            ?>
                                            <?php $totalPrice=0;?>
                                            <?php foreach($arrayItems as $items): ?>
                                                <tr>
                                                    <td class="product-name">
                                                        <a href="#"><?=ucwords($items['name']);?></a>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="subtotal-amount">&#8377; <?=$to=($items['price']) * ($items['qty']);?></span>
                                                    </td>
                                                </tr>
                                            <?php $totalPrice+=$to;?>
                                            <?php endforeach;?>
                                            
                                            <tr>
                                                <td class="total-price">
                                                    <span>Order Total</span>
                                                </td>
                                                <td class="product-subtotal">
                                                    <span class="subtotal-amount">&#8377; <?=$totalPrice+30?></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="payment-box">
                                    <div class="payment-method">
                                        <!-- <p>
                                            <input type="radio" id="direct-bank-transfer" name="radio-group" checked>
                                            <label for="direct-bank-transfer">Direct Bank Transfer</label>
                                            Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                                        </p> -->
                                        <!-- <p>
                                            <input type="radio" id="paypal" name="radio-group">
                                            <label for="paypal">PayPal</label>
                                        </p> -->
                                        <!-- <p>
                                            <input type="radio" id="paypal" name="payumoney">
                                            <label for="paypal">Payumoney</label>
                                        </p>
                                        <p>
                                            <input type="radio" id="cash-on-delivery" name="radio-group">
                                            <label for="cash-on-delivery">Cash on Delivery</label>
                                        </p> -->
                                         <div class="custom-control custom-radio">
                                    <input id="credit" value="online" name="paymentMethod" type="radio" class="custom-control-input"  required>
                                    <label class="custom-control-label" for="credit">Online</label>
                                </div>
                                 <div class="custom-control custom-radio">
                                    <input id="cod" name="paymentMethod" type="radio" value="c_o_d" class="custom-control-input"  required>
                                    <label class="custom-control-label" for="cod">Cash On Delivery</label>
                                </div>
                                    </div>
                                    
                                <!-- <div class="col-12 d-flex shopping-box" id="placOrde"> <a href="<?=base_url('Cart/orderConfirmation')?>" class="ml-auto default-btn  btn hvr-hover">Place Order</a> 
                                </div> -->
                              
                                    <input type="submit" class="default-btn order-btn" value="Place Order">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
		<!-- End Checkout Area -->
