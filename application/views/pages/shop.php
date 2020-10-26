
        <!-- Start Page Title -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Shop Grid</h2>
                    <ul>
                        <li><a href="<?=base_url('Home/index')?>">Home</a></li>
                        <li>Shop</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Start Shop Area -->
        <section class="shop-area pt-100 pb-100">
            <div class="container">
                <div class="woocommerce-topbar">
                    <div class="row align-items-center">
                        <div class="col-lg-8 col-md-7 col-sm-6">
                            <div class="woocommerce-result-count">
                                <p>Showing 1-8 of 14 results</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 col-sm-6">
                            <div class="woocommerce-topbar-ordering">
                                <select>
                                    <option value="1">Default sorting</option>
                                    <option value="2">Catwalk Juniors Clothing</option>
                                    <option value="0">Too Tempted Clubwear</option>
                                    <option value="3">Red Betty Boutique</option>
                                    <option value="4">Hot Head Threads</option>
                                    <option value="5">Fringe Apparel for Juniors</option>
                                    <option value="6">Proud Mama Maternity</option>
                                    <option value="6">South City Streetwear</option>
                                    <option value="6">Porcelain Apparel</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <?php foreach($crops_ as $item): ?>
                     
                        <div class="col-lg-4 col-md-6">
                            <div class="products-item">
                                <div class="image">
                                    <a href="<?=base_url('Shop/productDetails/').$item->product_id?>">
                                        <img src="<?=base_url('assets/products_image/').$item->image?>" alt="image">
                                    </a>

                                    <ul class="social">
                                        <li>
                                            <a href="#">
                                                <i class="flaticon-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="flaticon-transfer"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#productsQuickView">
                                                <i class="flaticon-loupe"></i>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="new">
                                        <span>New</span>
                                    </div>

                                    <div class="shop-btn">
                                        <a href="#" class="default-btn">Add To Cart</a>
                                    </div>
                                </div>

                                <div class="content">
                                    <h3>
                                        <a href="<?=base_url('Shop/productDetails')?>"><?=$item->name?></a>
                                    </h3>
                                    <span><?=$item->price?></span>
                                    <ul class="star-list">
                                        <li>
                                            <i class="flaticon-star"></i>
                                        </li>
                                        <li>
                                            <i class="flaticon-star"></i>
                                        </li>
                                        <li>
                                            <i class="flaticon-star"></i>
                                        </li>
                                        <li>
                                            <i class="flaticon-star"></i>
                                        </li>
                                        <li>
                                            <i class="flaticon-star"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                    

                   
                </div>
            </div>
        </section>
        <!-- End Shop Area -->

        <!-- Start Discover Area -->
        <section class="discover-area pb-100">
            <div class="container">
                <div class="section-title">
                    <h2>Discover Xenoz Product</h2>
                </div>

                <div class="discover-slider owl-carousel owl-theme">
                    <div class="discover-item">
                        <div class="icon">
                            <i class="flaticon-like"></i>
                        </div>
                        <h3>100% Satisfaction</h3>
                        <p>There are many variations</p>
                    </div>

                    <div class="discover-item">
                        <div class="icon">
                            <i class="flaticon-shopping-bag"></i>
                        </div>
                        <h3>Shop in  60 Countries</h3>
                        <p>There are many variations</p>
                    </div>

                    <div class="discover-item">
                        <div class="icon">
                            <i class="flaticon-delivery-truck"></i>
                        </div>
                        <h3>Fast Shipment</h3>
                        <p>There are many variations</p>
                    </div>

                    <div class="discover-item">
                        <div class="icon">
                            <i class="flaticon-credit-card"></i>
                        </div>
                        <h3>Money Back</h3>
                        <p>There are many variations</p>
                    </div>

                    <div class="discover-item">
                        <div class="icon">
                            <i class="flaticon-customer-service"></i>
                        </div>
                        <h3>24/7 Customer Service</h3>
                        <p>There are many variations</p>
                    </div>
                </div>
            </div>
        </section>
  
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
                                <img src="assets/img/quick-view-img.jpg" alt="image">
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
        
       