<!-- <?php print_r($crops_)?> -->

        <!-- Start Page Title -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Products Details</h2>
                    <ul>
                        <li><a href="<?=base_url('Home/index')?>">Home</a></li>
                        <li>Products Details</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Start Product Details Area -->
        <section class="product-details-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="product-details-image">
                            <img src="<?=base_url('assets/products_image/').$crops_->image?>" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="product-details-desc">
                            <h3><?=$crops_->name?></h3>
                            <div class="price">
                                <span class="new-price">&#8377; <?=$crops_->price?></span>
                                <span class="old-price">&#8377; <?=$crops_->discount?></span>
                            </div>
                            
                            <p><?=$crops_->description?></p>
                            <div class="product-add-to-cart">
                                <div class="input-counter">
                                    <span class="minus-btn">
                                        <i class='bx bx-minus'></i>
                                    </span>
                                    <input type="text" min="1" value="1">
                                    <span class="plus-btn">
                                        <i class='bx bx-plus'></i>
                                    </span>
                                </div>
                                <a href="javascript:void(0)" class="default-btn cartt" product="<?=$crops_->product_id?>">Add to cart
                                    <span></span></a>
                                
                            </div>
                            <div class="buy-checkbox-btn">
                                <div class="item">
                                    <input class="inp-cbx" id="cbx" type="checkbox">
                                    <label class="cbx" for="cbx">
                                        <span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>I agree with the terms and conditions</span>
                                    </label>
                                </div>
                                <div class="item">
                                    <a href="javascript:void(0)" class="btn btn-light cartt" product="<?=$crops_->product_id?>">Buy it now!
                                    <span></span></a>
                                    <!-- <a href="#" class="btn btn-light">Buy it now!</a> -->
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <!-- <div class="col-lg-12 col-md-12">
                        <div class="tab products-details-tab">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <ul class="tabs">
                                        <li>
                                            <a href="#">
                                                <div class="dot"></div> 
                                                Description
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="dot"></div> 
                                                Additional information
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="dot"></div> 
                                                Reviews
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="tab_content">
                                        <div class="tabs_item">
                                            <div class="products-details-tab-content">
                                                <p><?=$crops_->description?></p>
                                            </div>
                                        </div>
                                        <div class="tabs_item">
                                            <div class="products-details-tab-content">
                                                <ul class="additional-information">
                                                    <li>
                                                        <span>Brand:</span> 
                                                        ThemeForest
                                                    </li>
                                                    <li>
                                                        <span>Color:</span> 
                                                        Brown
                                                    </li>
                                                    <li>
                                                        <span>Size:</span> 
                                                        Large, Medium
                                                    </li>
                                                    <li>
                                                        <span>Weight:</span> 
                                                        27 kg
                                                    </li>
                                                    <li>
                                                        <span>Dimensions:</span> 
                                                        22 x 123 cm
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="tabs_item">
                                            <div class="products-details-tab-content">
                                                <div class="product-review-form">
                                                    <h3>Customer Reviews</h3>
                                                    <div class="review-title">
                                                        <div class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="far fa-star"></i>
                                                        </div>
                                                        <p>Based on 3 reviews</p>
                                                        <a href="#" class="default-btn">
                                                            Write a Review
                                                            <span></span>
                                                        </a>
                                                    </div>
                                                    <div class="review-comments">
                                                        <div class="review-item">
                                                            <div class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </div>
                                                            <h3>Good</h3>
                                                            <span><strong>Admin</strong> on <strong>Sep 21, 2019</strong></span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                                            <a href="#" class="review-report-link">Report as Inappropriate</a>
                                                        </div>
                                                        <div class="review-item">
                                                            <div class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </div>
                                                            <h3>Good</h3>
                                                            <span><strong>Admin</strong> on <strong>Sep 21, 2019</strong></span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                                            <a href="#" class="review-report-link">Report as Inappropriate</a>
                                                        </div>
                                                        <div class="review-item">
                                                            <div class="rating">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="far fa-star"></i>
                                                            </div>
                                                            <h3>Good</h3>
                                                            <span><strong>Admin</strong> on <strong>Sep 21, 2019</strong></span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                                            <a href="#" class="review-report-link">Report as Inappropriate</a>
                                                        </div>
                                                    </div>
                                                    <div class="review-form">
                                                        <h3>Write a Review</h3>
                                                        <form>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="form-group">
                                                                        <input type="text" id="name" name="name" placeholder="Enter your name" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6">
                                                                    <div class="form-group">
                                                                        <input type="email" id="email" name="email" placeholder="Enter your email" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <input type="text" id="review-title" name="review-title" placeholder="Enter your review a title" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12">
                                                                    <div class="form-group">
                                                                        <textarea name="review-body" id="review-body" cols="30" rows="7" placeholder="Write your comments here" class="form-control"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 col-md-12">
                                                                    <button type="submit" class="default-btn">
                                                                        Submit Review
                                                                        <span></span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>

            <div class="related-products">
                <div class="container">
                    <div class="products-title">
                        <span class="sub-title">Our Shop</span>
                        <h2>Related Products</h2>
                    </div>
                    <div class="row">
                        <?php foreach($relatedProducts as $pro): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="products-item">
                                <div class="image">
                                    <a href="#">
                                        <img src="<?=base_url('assets/products_image/').$pro->image?>" alt="image">
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
                                        <a href="javascript:void(0)" class="default-btn cartt" product="<?=$pro->product_id?>">Add To Cart</a>
                                    </div>
                                </div>
    
                                <div class="content">
                                    <h3><?=$pro->name?></h3>
                                    <span>&#8377; <?=$pro->price?></span>
                                    
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                       <!--  <div class="col-lg-4 col-md-6">
                            <div class="products-item">
                                <div class="image">
                                    <a href="#">
                                        <img src="<?=base_url()?>assets/img/top-trending/image2.jpg" alt="image">
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
                                        <span>Sale</span>
                                    </div>
    
                                    <div class="shop-btn">
                                        <a href="#" class="default-btn">Add To Cart</a>
                                    </div>
                                </div>
    
                                <div class="content">
                                    <h3>Shoes</h3>
                                    <span>$75.00</span>
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
    
                        <div class="col-lg-4 col-md-6">
                            <div class="products-item">
                                <div class="image">
                                    <a href="#">
                                        <img src="<?=base_url()?>assets/img/top-trending/image3.jpg" alt="image">
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
                                    <h3>Gents T-Shirt</h3>
                                    <span>$55.00</span>
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
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
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
       