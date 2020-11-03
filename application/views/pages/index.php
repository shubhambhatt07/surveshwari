<style type="text/css">
    .icon img{
        height: 50px !important;
        width: 50px !important;
    }
    .icon{

    }
</style>

        <!-- Start Main Banner Area -->
        <div class="home-slides owl-carousel owl-theme">
            <div class="main-banner-item">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center" style="height: 745px !important">
                                <div class="col-lg-6">
                                    <div class="main-banner-content">
                                        <!-- <div class="circle"></div> -->
                                        <!-- <span>Up To 20% Off</span> -->
                                        <!-- <h1>Spices Arrivals Trending Collection</h1> -->

                                        <div class="banner-btn">
                                            <!-- <a href="#" class="default-btn">Shop Now</a> -->
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="banner-image">
                                        <!-- <div class="circle"></div> -->
                                         <!-- <img src="<?=base_url()?>assets/images/S1.jpg" alt="image">  -->
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
                    
                </div>
            </div>

            <!-- <div class="main-banner-item">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="main-banner-content">
                                         <div class="circle"></div> -->
                                        <!-- <span>Up To 20% Off</span> -->
                                        <!-- <h1>Spices Arrivals Trending Collection</h1> -->

                                        <!-- <div class="banner-btn"> -->
                                            <!-- <a href="#" class="default-btn">Shop Nows</a> -->
                                        <!-- </div> -->
                                    <!-- </div> -->
                                <!-- </div> -->

                               <!--  <div class="col-lg-6">
                                    <div class="banner-image">
                                        <div class="circle"></div>
                                         <img src="<?=base_url()?>assets/images/S1.jpg" alt="image"> -->
                                    <!-- </div> -->
                               <!--  </div>
                            </div>
                        </div>
                    </div>
                </div>  -->

                <div class="main-banner-shape">
                    <div class="shape1">
                        <img src="<?=base_url()?>assets/images/S1.jpg" alt="image">
                    </div>
                    <!-- <div class="shape2">
                        <img src="<?=base_url()?>assets/images/S2.jpg" alt="image">
                    </div> -->
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
        <section class="discover-area pb-100" style="position: relative; top: 0px; padding-bottom: 121px !important;">
            <div class="container">
                <div class="section-title">
                    <h2>Discover Product</h2>
                </div>

                <div class="discover-slider owl-carousel owl-theme">
                    <div class="discover-item">
                        <div class="icon" align="center">
                            <!-- <i class="flaticon-like"></i> -->
                         <img height="202" width="202"src="<?=base_url()?>assets/images/satisfaction.png" alt="image">
                        </div>
                        <h3>100% Satisfaction</h3>
                        <p>Quality products with secured payments.</p>
                    </div>

                    <div class="discover-item">
                        <div class="icon" align="center">
                            <!-- <i class="flaticon-shopping-bag"></i> -->
                             <img style="height:202 !important;width:202 !important"src="<?=base_url()?>assets/images/shopscountries.png" alt="image">
                        </div>
                        <h3>Shop in  60 Countries</h3>
                        <p>Delivery to 50+ pincodes.</p>
                    </div>

                    <div class="discover-item">
                        <div class="icon" align="center">
                            <!-- <i class="flaticon-delivery-truck"></i> -->
                             <img height="202" width="202"src="<?=base_url()?>assets/images/Shipment.png" alt="image">
                        </div>
                        <h3>Fast Shipment</h3>
                        <p>Accelerated &amp; assured delivery.</p>
                    </div>

                    <div class="discover-item">
                        <div class="icon" align="center">
                            <!-- <i class="flaticon-credit-card"></i> -->
                             <img height="202" width="202"src="<?=base_url()?>assets/images/MoneyBack.png" alt="image">
                        </div>
                        <h3>Money Back</h3>
                        <p>We guarantee customer satisfaction.</p>
                    </div>

                    <div class="discover-item">
                        <div class="icon" align="center">
                            <!-- <i class="flaticon-customer-service"></i> -->
                             <img height="202" width="202"src="<?=base_url()?>assets/images/Support.png" alt="image">
                        </div>
                        <h3>24/7 Customer Service</h3>
                        <p>Honest, open &amp; responsible support./p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Discover Area -->

        <!-- Start Special Products Area -->
        <section class="special-products-area pb-70" style="position: relative; top: 0px">
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
        <section class=""  >
            <div  class="container" style="width:70%">
                <div class="section-title">
                    <p>Special</p>
                    <h2>Our Special Pickles</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?=base_url()?>assets/images/Aam-ka-achar.jpg" alt="image">
                    </div>
                    <div class="col-md-6">
                        <img src="<?=base_url()?>assets/images/Masale.jpg" alt="image">
                    </div>
                </div>
            </div>
            
                
          
        </section>
        <!-- Start Coming Soon Area -->
        <section class="mt-1"  >
            <div class="section-title">
                    <!-- <p>Special</p> -->
                    <h2>Speciality</h2>
                </div>
            
                <img src="<?=base_url()?>assets/images/Bottom-Image.jpg" alt="image">
          
        </section>
        <!-- End Coming Soon Area -->
