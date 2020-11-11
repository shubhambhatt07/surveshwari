<?php

    // if($this->session->userdata('logged_user')){
    //    $session=unserialize($this->session->logged_user);
    // }else{
    //     redirect('Home');
    // }

?>

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Order Placed</h2>
                    <!-- <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?=base_url('Shop')?>">Shop</a></li>
                        <li class="breadcrumb-item active">Order Placed</li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <form action="<?=base_url('Payments/Payumoneyyyy')?>" method="post" enctype="multipart/form-data">
    <div class="cart-box-main">
        <div class="container">
            
            
                
            

            <div class="row my-5">
                <div class="col-lg-12">
                    <div class="alert alert-success">Thanky You For Choosing Us. Order Placed Successfully.</div>
                </div>
            </div>

        </div>
    </div>
     </form>
    <!-- End Cart -->

  