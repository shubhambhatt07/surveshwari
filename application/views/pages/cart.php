
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
                    <?php 
                        if($this->session->flashdata('msg')){
                            echo '<div class="alert alert-info">'.$this->session->flashdata('msg').'</div>';
                        }
                    ?>
                    <div class="col-lg-12 col-md-12">
                    <?php 
                        $arrayItems=$this->cart->contents();
                        // print_r($arrayItems);
                    ?>
                        <form action="<?=base_url('Cart/updateCart')?>" method="post" enctype="multipart/form-data">
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
                                        <?php $totalPrice=0;?>
                                        <?php foreach ($arrayItems as $items) : ?>
                                            <tr>
                                                <td class="product-thumbnail">
                                                    <a href="#">
                                                        <img src="<?=base_url('assets/products_image/').$items['options']['image'];?>" alt="item">
                                                    </a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="#"><?=ucwords($items['name']);?></a>
                                                </td>
                                                <td class="product-price">
                                                    <span class="unit-amount">&#8377;  <?=$items['price'];?></span>
                                                </td>
                                                <td class="product-quantity">
                                                    <div class="input-counter">
                                                        <span class="minus-btn">
                                                            <i class='bx bx-minus'></i>
                                                        </span>
                                                        <input type="text" name="<?=$items['rowid']?>" value="<?=$items['qty']?>">
                                                        <span class="plus-btn">
                                                            <i class='bx bx-plus'></i>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal">
                                                    <span class="subtotal-amount">&#8377; <?=$to=($items['price']) * ($items['qty']);?></span>
                                                    <a href="<?=base_url('Cart/removeItem/').$items['rowid']?>" class="remove">
                                                        <i class='bx bx-trash'></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php $totalPrice+=$to;?>
                                        <?php endforeach; ?>
                                      
                                    </tbody>
                                </table>
                            </div>
                            <!-- <div class="cart-buttons">
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
                            </div> -->

                            <div class="cart-totals">
                                <h3>Cart Totals</h3>
                                <ul>
                                    <li>Subtotal 
                                        <span>&#8377; <?=$totalPrice?></span>
                                    </li>
                                    <li>Shipping 
                                        <span>&#8377; 30.00</span>
                                    </li>
                                    <li>Total 
                                        <span><b>&#8377; <?=$totalPrice+30?></b></span>
                                    </li>
                                </ul>
                                <a href="<?=base_url('Cart/checkOut')?>" class="default-btn">
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
      
        <!-- End QuickView Modal Area -->
  