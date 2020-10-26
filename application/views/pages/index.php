
        <!-- Start Main Banner Area -->
        <div class="home-slides owl-carousel owl-theme">
            <div class="main-banner-item">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="main-banner-content">
                                        <!-- <div class="circle"></div> -->
                                        <span>Up To 20% Off</span>
                                        <h1>Spices Arrivals Trending Collection</h1>

                                        <div class="banner-btn">
                                            <a href="#" class="default-btn">Shop Now</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="banner-image">
                                        <!-- <div class="circle"></div> -->
                                        <img src="<?=base_url()?>assets/images/S1.jpg" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-banner-shape">
                    <div class="shape1">
                        <img src="<?=base_url()?>assets/images/S2.jpg" alt="image">
                    </div>
                    <!-- <div class="shape2">
                        <img src="<?=base_url()?>assets/images/S2.jpg" alt="image">
                    </div> -->
                </div>
            </div>

            <div class="main-banner-item">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="main-banner-content">
                                        <!-- <div class="circle"></div> -->
                                        <span>Up To 20% Off</span>
                                        <h1>Spices Arrivals Trending Collection</h1>

                                        <div class="banner-btn">
                                            <a href="#" class="default-btn">Shop Nows</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="banner-image">
                                        <!-- <div class="circle"></div> -->
                                        <img src="<?=base_url()?>assets/images/S2.jpg" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main-banner-shape">
                    <div class="shape1">
                        <img src="<?=base_url()?>assets/images/S1.jpg" alt="image">
                    </div>
                    <div class="shape2">
                        <img src="<?=base_url()?>assets/images/S2.jpg" alt="image">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Banner Area -->

        <!-- Start Collections Area -->
        <section class="collections-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <p>Collections</p>
                    <h2>Top Trending Spices</h2>
                </div>

                <div class="row">
                    <?php foreach($crops_ as $crops_): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="collections-item">
                                <div class="image">
                                    <a href="<?=base_url('Shop/productDetails/').$crops_->product_id?>">
                                        <img src="<?=base_url('assets/products_image/').$crops_->image?>" alt="image">
                                    </a>

                                    <div class="shop-btn">
                                        <a href="<?=base_url('Shop/productDetails/').$crops_->product_id?>" class="default-btn">Shop Now</a>
                                    </div>
                                </div>
                                <div class="content">
                                    <h3>
                                        <a href="<?=base_url('Shop/index')?>"><?=$crops_->name?></a>
                                    </h3>
                                    <span>&#8377; <?=$crops_->price?></span>
                                    
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>

                   
            </div>
        </section>
        <!-- End Collections Area -->

        <!-- Start Overview Area -->
       
        <!-- End Overview Area -->

        <!-- Start Discover Area -->
        <section class="discover-area pb-100">
            <div class="container">
                <div class="section-title">
                    <h2>Discover Product</h2>
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
        <!-- End Discover Area -->

        <!-- Start Special Products Area -->
        <section class="special-products-area pb-70">
            <div class="container">
                <div class="section-title">
                    <p>Special</p>
                    <h2>Our Special Products</h2>
                </div>

                <div class="row">
                    <?php foreach($specialcrops_ as $item): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="special-products-item">
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
                                            <a href="#" data-toggle="modal" data-target="#productsQuickView">
                                                <i class="flaticon-loupe"></i>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="percentage">
                                        <span>10%</span>
                                    </div>
                                </div>

                                <div class="content">
                                    <h3>
                                        <a href="<?=base_url('Shop/productDetails/').$item->product_id?>"><?=$item->name?></a>
                                    </h3>
                                    <span>&#8377; <?=$item->price?></span>
                                   
                                </div>
                            </div>
                        </div>

                       <?php endforeach; ?>

                  
                </div>
            </div>
        </section>
        <!-- End Special Products Area -->

        <!-- Start Coming Soon Area -->
        <section class="coming-soon-area ptb-100">
            <div class="container">
                <div class="coming-soon-title">
                    <span>Limited Offer!</span>
                    <h3>Weekly Sale On 60% Off</h3>
                </div>

                <div class="coming-soon-content">
                    <div id="timer">
                        <div id="days"></div>
                        <div id="hours"></div>
                        <div id="minutes"></div>
                        <div id="seconds"></div>
                    </div>
                </div>
            </div>
            <div class="coming-soon-shape">
                <img src="<?=base_url()?>assets/images/S2.jpg" alt="image">
            </div>
        </section>
        <!-- End Coming Soon Area -->
