
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
                                <p>Showing <?=count($crops_)?> results</p>
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
                                            <a href="#" data-toggle="modal" data-target="#productsQuickView">
                                                <i class="flaticon-loupe"></i>
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="new">
                                        <span>New</span>
                                    </div>

                                    <div class="shop-btn">
                                        <a href="javascript:void(0)" class="default-btn cartt" product="<?=$item->product_id?>">Add to cart
                                    </a>
                                       
                                    </div>
                                </div>

                                <div class="content">
                                    <h3>
                                        <a href="<?=base_url('Shop/productDetails')?>"><?=$item->name?></a>
                                    </h3>
                                    <span><?=$item->price?></span>
                                   
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
                    <h2>Discover OUr Product</h2>
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
  
       
        <!-- End QuickView Modal Area -->
        <script type="text/javascript">
                $(document).ready(function(){
                    var cartUrl="<?=base_url('Cart/addToCart/')?>";
                    $('.cartt').on('click',function(){
                        var product_id=$(this).attr('product');
                        // alert("Product Id: "+product_id);
                        $.ajax({
                            url:cartUrl,
                            type:"post",
                            data:{product_id:product_id},
                            success:function(response){
                                response=JSON.parse(response);
                                if(response.code==1){                            
                                 swal("Good job!", "Item Added To Cart", "success");
                                }else{
                                    swal("Ooops!", "Failed to Add!", "warning");
                                }
                            }
                        })
                    });
                });
            </script>
        
       