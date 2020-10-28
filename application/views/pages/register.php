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
                    <h2>Register</h2>
                    <ul>
                        <li><a href="<?=base_url('Home/index')?>">Home</a></li>
                        <li>Register</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Start Register Area -->
        <section class="register-area ptb-100">
            <div class="container">
                <div class="register-form">
                    <div class="register-in-title">
                        <h3>Register</h3>
                    </div>
                        
                    <form id="Register">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" required name="fname" placeholder="First Name">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" required name="lname" placeholder="Last Name">
                                </div>
                            </div>
                             <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="tel" class="form-control" name="phone" required placeholder="phone">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email"required placeholder="Email">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" name="pass" required placeholder="Password">
                                </div>
                            </div>
                             <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="address" required placeholder="Address">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <strong>Gender</strong>
                                <div class="form-group" style="display: flex;">
                                   <input type="radio" id="male" name="gender" value="male">
  <label for="male" style="margin-left: 8px;
    margin-top: -5px ;">Male</label>
  <input type="radio" style="margin-left: 8px; " id="female" name="gender" value="female">
  <label for="female" style="margin-left: 8px;
    margin-top: -5px ;">Female</label>
  <input type="radio"  style="margin-left: 8px; " id="other" name="gender" value="other">
  <label for="other" style="margin-left: 8px;
    margin-top: -5px ;">Other</label>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="send-btn">
                                    <button type="submit" class="default-btn">
                                        Register Now
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- End Register Area -->

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
                        <p>There are many variations</p>
                    </div>

                    <div class="discover-item">
                        <div class="icon" align="center">
                            <!-- <i class="flaticon-shopping-bag"></i> -->
                             <img style="height:202 !important;width:202 !important"src="<?=base_url()?>assets/images/shopscountries.png" alt="image">
                        </div>
                        <h3>Shop in  60 Countries</h3>
                        <p>There are many variations</p>
                    </div>

                    <div class="discover-item">
                        <div class="icon" align="center">
                            <!-- <i class="flaticon-delivery-truck"></i> -->
                             <img height="202" width="202"src="<?=base_url()?>assets/images/Shipment.png" alt="image">
                        </div>
                        <h3>Fast Shipment</h3>
                        <p>There are many variations</p>
                    </div>

                    <div class="discover-item">
                        <div class="icon" align="center">
                            <!-- <i class="flaticon-credit-card"></i> -->
                             <img height="202" width="202"src="<?=base_url()?>assets/images/MoneyBack.png" alt="image">
                        </div>
                        <h3>Money Back</h3>
                        <p>There are many variations</p>
                    </div>

                    <div class="discover-item">
                        <div class="icon" align="center">
                            <!-- <i class="flaticon-customer-service"></i> -->
                             <img height="202" width="202"src="<?=base_url()?>assets/images/Support.png" alt="image">
                        </div>
                        <h3>24/7 Customer Service</h3>
                        <p>There are many variations</p>
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript">
    $(document).ready(function(){
        
      $('#Register').submit(function(e){
        // alert('dd');
        var formData=new FormData($(this)[0]);
        e.preventDefault();
        $.ajax({
          url:"<?=base_url('Login/userRegistration')?>",
          type:"post",
          cache:false,
          contentType:false,
          processData:false,
          data:formData,
          success:function(response){
            console.log(response);
            response=JSON.parse(response);
            if(response.status==1){
              swal("Great..","Registered Successfully.","success");
            }else if(response.status==2){
              swal("Ooops..","Account with same email id Already Exists","warning");
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
      