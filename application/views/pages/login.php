<style type="text/css">
    .icon img{
        height: 50px !important;
        width: 50px !important;
    }
    .icon{

    }
</style>
        
        <!-- Start Page Title -->
        <div class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>Login</h2>
                    <ul>
                        <li><a href="<?=base_url('Home/index')?>">Home</a></li>
                        <li>Login</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Start Login Area -->
        <section class="login-area ptb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="login-form">
                            <div class="sign-in-title">
                                <h3>Login</h3>
                            </div>
                                
                            <form id="user_validate">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email">
                                        </div>
                                    </div>
        
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input type="Password" class="form-control" name="pass"  placeholder="Password">
                                        </div>
                                    </div>
        
                                    <!-- <div class="col-lg-12">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkme">
                                            <label class="form-check-label" for="checkme">Keep Me Logged In</label>
                                        </div>
                                    </div> -->
        
                                   <!--  <div class="col-lg-12 text-right">
                                        <p class="forgot-password"><a href="#">Forgot Password?</a></p>
                                    </div> -->
        
                                    <div class="col-lg-12">
                                        <div class="send-btn">
                                            <button type="submit" class="default-btn">
                                                Login Now
                                                <span></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="new-customer-content">
                            <h2>New Customer</h2>

                            <span>Create An Account</span>
                            <p>Sign up for a free account at our store. Registration is quick and easy. It allows you to be able to order from our shop. To start shopping click register.</p>
                            <a href="<?=base_url('Login/Register')?>" class="default-btn">Create An Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Login Area -->

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
                        <!-- <p>There are many variations</p> -->
                    </div>

                    <div class="discover-item">
                        <div class="icon" align="center">
                            <!-- <i class="flaticon-shopping-bag"></i> -->
                             <img style="height:202 !important;width:202 !important"src="<?=base_url()?>assets/images/shopscountries.png" alt="image">
                        </div>
                        <h3>Shop in  60 Countries</h3>
                        <!-- <p>There are many variations</p> -->
                    </div>

                    <div class="discover-item">
                        <div class="icon" align="center">
                            <!-- <i class="flaticon-delivery-truck"></i> -->
                             <img height="202" width="202"src="<?=base_url()?>assets/images/Shipment.png" alt="image">
                        </div>
                        <h3>Fast Shipment</h3>
                        <!-- <p>There are many variations</p> -->
                    </div>

                    <div class="discover-item">
                        <div class="icon" align="center">
                            <!-- <i class="flaticon-credit-card"></i> -->
                             <img height="202" width="202"src="<?=base_url()?>assets/images/MoneyBack.png" alt="image">
                        </div>
                        <h3>Money Back</h3>
                        <!-- <p>There are many variations</p> -->
                    </div>

                    <div class="discover-item">
                        <div class="icon" align="center">
                            <!-- <i class="flaticon-customer-service"></i> -->
                             <img height="202" width="202"src="<?=base_url()?>assets/images/Support.png" alt="image">
                        </div>
                        <h3>24/7 Customer Service</h3>
                        <!-- <p>There are many variations</p> -->
                    </div>
                </div>
            </div>
        </section>
       
        
              <script type="text/javascript">
    $(document).ready(function(){
        
      $('#user_validate').submit(function(e){
        // alert('dd');
        var formData=new FormData($(this)[0]);
        e.preventDefault();
        $.ajax({
          url:"<?=base_url('Login/user_validate')?>",
          type:"post",
          cache:false,
          contentType:false,
          processData:false,
          data:formData,
          success:function(response){
            console.log(response);
            response=JSON.parse(response);
            if(response.status==1){
              swal("Great..","Login Successfully.","success");
             window.location.href = '<?=base_url('Home/index')?>'; //Will take you to Google.
            }else if(response.status==0){
              swal("Ooops..","Email Or Password Invalid","warning");
            }else{
              swal("Ooops..","Server Not Found","error");
            }
            setInterval(function(){
              location.reload();
            },2000)
          }
        });
      }); 
    });
  </script>
      

