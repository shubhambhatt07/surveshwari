
 <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Cart</h2>
                    <ul>
                        <li><a href="<?=base_url('Home/index')?>">Home</a></li>
                        <li>Cart</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Start Page Title -->
       
        <!-- End Page Title -->

        <!-- Start Cart Area -->
		<section class="cart-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <form>
                            <div class="cart-table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Product</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Unit Price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#">
                                                    <img src="<?=base_url()?>assets/img/lookbook/lookbook1.jpg" alt="item">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">Sweet Tea Dresses</a>
                                            </td>
                                            <td class="product-price">
                                                <span class="unit-amount">$455.00</span>
                                            </td>
                                            <td class="product-quantity">
                                                <div class="input-counter">
                                                    <span class="minus-btn">
                                                        <i class='bx bx-minus'></i>
                                                    </span>
                                                    <input type="text" value="1">
                                                    <span class="plus-btn">
                                                        <i class='bx bx-plus'></i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="subtotal-amount">$455.00</span>
                                                <a href="#" class="remove">
                                                    <i class='bx bx-trash'></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#">
                                                    <img src="<?=base_url()?>assets/img/lookbook/lookbook2.jpg" alt="item">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">Too Tempted Clubwear</a>
                                            </td>
                                            <td class="product-price">
                                                <span class="unit-amount">$541.50</span>
                                            </td>
                                            <td class="product-quantity">
                                                <div class="input-counter">
                                                    <span class="minus-btn">
                                                        <i class='bx bx-minus'></i>
                                                    </span>
                                                    <input type="text" value="1">
                                                    <span class="plus-btn">
                                                        <i class='bx bx-plus'></i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="subtotal-amount">$541.50</span>
                                                <a href="#" class="remove">
                                                    <i class='bx bx-trash'></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#">
                                                    <img src="<?=base_url()?>assets/img/lookbook/lookbook3.jpg" alt="item">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">Hourglass Jeans</a>
                                            </td>
                                            <td class="product-price">
                                                <span class="unit-amount">$140.50</span>
                                            </td>
                                            <td class="product-quantity">
                                                <div class="input-counter">
                                                    <span class="minus-btn">
                                                        <i class='bx bx-minus'></i>
                                                    </span>
                                                    <input type="text" value="1">
                                                    <span class="plus-btn">
                                                        <i class='bx bx-plus'></i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="subtotal-amount">$140.50</span>
                                                <a href="#" class="remove">
                                                    <i class='bx bx-trash'></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail">
                                                <a href="#">
                                                    <img src="<?=base_url()?>assets/img/lookbook/lookbook4.jpg" alt="item">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">Porcelain Apparel</a>
                                            </td>
                                            <td class="product-price">
                                                <span class="unit-amount">$547.00</span>
                                            </td>
                                            <td class="product-quantity">
                                                <div class="input-counter">
                                                    <span class="minus-btn">
                                                        <i class='bx bx-minus'></i>
                                                    </span>
                                                    <input type="text" value="1">
                                                    <span class="plus-btn">
                                                        <i class='bx bx-plus'></i>
                                                    </span>
                                                </div>
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="subtotal-amount">$547.00</span>
                                                <a href="#" class="remove">
                                                    <i class='bx bx-trash'></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart-buttons">
                                <div class="row align-items-center">
                                    <div class="col-lg-7 col-sm-7 col-md-7">
                                        <div class="shopping-coupon-code">
                                            <input type="text" class="form-control" placeholder="Coupon code" name="coupon-code" id="coupon-code">
                                            <button type="submit">Apply Coupon</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-sm-5 col-md-5 text-right">
                                        <a href="#" class="default-btn">
                                            Update Cart-Totals
                                            <span></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="cart-totals">
                                <h3>Cart Totals</h3>
                                <ul>
                                    <li>Subtotal 
                                        <span>$1683.50</span>
                                    </li>
                                    <li>Shipping 
                                        <span>$30.00</span>
                                    </li>
                                    <li>Total 
                                        <span><b>$1713.50</b></span>
                                    </li>
                                </ul>
                                <a href="#" class="default-btn">
                                    Proceed to Checkout
                                    <span></span>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
		<!-- End Cart Area -->

        

        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class='bx bx-chevron-up'></i>
        </div>
        <!-- End Go Top Area -->

        <!-- Start QuickView Modal Area -->
        <div class="modal fade productsQuickView" id="productsQuickView" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class='bx bx-x'></i></span>
                    </button>

                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="products-image">
                                <img src="<?=base_url()?>assets/img/quick-view-img.jpg" alt="image">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="products-content">
                                <h3><a href="#">Our Special Xenoz Products</a></h3>

                                <div class="price">
                                    <span class="old-price">$210.00</span>
                                    <span class="new-price">$200.00</span>
                                </div>

                                <div class="products-review">
                                    <div class="rating">
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                        <i class='bx bxs-star'></i>
                                    </div>
                                    <a href="#" class="rating-count">3 reviews</a>
                                </div>

                                <ul class="products-info">
                                    <li><span>Vendor:</span> <a href="#">Lereve</a></li>
                                    <li><span>Availability:</span> <a href="#">In stock (7 items)</a></li>
                                    <li><span>Products Type:</span> <a href="#">T-Shirt</a></li>
                                </ul>

                                <div class="products-color-switch">
                                    <h4>Color:</h4>

                                    <ul>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Black" class="color-black"></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="White" class="color-white"></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Green" class="color-green"></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Yellow Green" class="color-yellowgreen"></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Teal" class="color-teal"></a></li>
                                    </ul>
                                </div>

                                <div class="products-size-wrapper">
                                    <h4>Size:</h4>

                                    <ul>
                                        <li><a href="#">XS</a></li>
                                        <li class="active"><a href="#">S</a></li>
                                        <li><a href="#">M</a></li>
                                        <li><a href="#">XL</a></li>
                                        <li><a href="#">XXL</a></li>
                                    </ul>
                                </div>

                                <div class="products-add-to-cart">
                                    <div class="input-counter">
                                        <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                        <input type="text" value="1">
                                        <span class="plus-btn"><i class='bx bx-plus'></i></span>
                                    </div>

                                    <button type="submit" class="default-btn">Add to Cart</button>
                                </div>

                                <ul class="share">
                                    <li>
                                        <span>Share:</span>
                                    </li>
                                    
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="flaticon-twitter"></i>
                                        </a>
                                    </li>
                
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="flaticon-instagram"></i>
                                        </a>
                                    </li>
                
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="flaticon-facebook"></i>
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="flaticon-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End QuickView Modal Area -->
  