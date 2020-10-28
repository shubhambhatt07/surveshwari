<!doctype html>
<html lang="zxx">
    
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
        <!-- Animate CSS --> 
        <link rel="stylesheet" href="<?=base_url()?>assets/css/animate.min.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/meanmenu.min.css">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="<?=base_url()?>/assets/css/boxicons.min.css">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/flaticon.css">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.min.css">
        <!-- Owl Theme Default CSS -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.default.min.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/nice-select.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="<?=base_url()?>assets/css/responsive.css">
        <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <title>Spices</title>

        <link rel="icon" type="image/png" href="<?=base_url()?>assets/img/favicon.png">
    </head>

    <body>
        <!-- Start Preloader Area -->
        <div class="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Top Header Area -->
      
        <!-- End Top Header Area -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="<?=base_url('Home/index')?>">
                                <img src="<?=base_url()?>assets/images/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="<?=base_url('Home')?>">
                            <img src="<?=base_url()?>assets/images/logo.png" alt="logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="<?=base_url('Home/index')?>" class="nav-link active">
                                        Home 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                  
                                </li>

                              

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Categories 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                       <?php foreach($categories as $cat): ?>
                                            <li>
                                                <a href="<?=base_url('Shop/prouductByCategory/').$cat->id?>"><?=$cat->category?></a>
                                            </li>
                                        <?php endforeach;?>
                                    </ul>
                                </li>

                             <!--    <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Shop 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="<?=base_url('Shop/index')?>" class="nav-link">Shop Grid</a></li>

                                        <li class="nav-item"><a href="<?=base_url('Shop/Cart')?>" class="nav-link">Cart</a></li>

                                        
                                    </ul>
                                </li> -->

                              <!--   <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Blog 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="blog-1.html" class="nav-link">Blog Grid</a></li>

                                        <li class="nav-item"><a href="blog-2.html" class="nav-link">Blog Right Sidebar</a></li>

                                        <li class="nav-item"><a href="blog-details.html" class="nav-link">Blog Details</a></li>
                                    </ul>
                                </li>
 -->
                                <li class="nav-item">
                                    <a href="<?=base_url('Home/Contact')?>" class="nav-link">Contact</a>
                                </li>
                                <!--  <li class="nav-item">
                                    <a href="<?=base_url('Home/About')?>" class="nav-link">About</a>
                                </li> -->
                            </ul>

                            <div class="others-option d-flex align-items-center">
                                <div class="option-item">
                                    <div class="info">
                                        <div class="icon">
                                            <i class="flaticon-email"></i>
                                        </div>
                                        <span>Email Us:</span>
                                        <p>
                                            <a href="mailto:info@surveshwari.com">info@surveshwari.com</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <div class="info">
                                        <div class="icon">
                                            <i class="flaticon-call"></i>
                                        </div>
                                        <span>Call Us:</span>
                                        <p>
                                            <a href="tel:918566246">+1234567890</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <div class="cart-btn">
                                        <a href="<?=base_url('Shop/Cart')?>">
                                            <i class='flaticon-shopping-cart'></i>
                                            <span>+2</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <div class="user">
                                    <?php 
                                    if($this->session->userdata('login'))
                                    {?>
                                   <a href="<?=base_url('Login/logOut')?>">Logout
                                           
                                            </a>

                                  <?php  }
                                    else{
                                        ?> <a href="<?=base_url('Login/userLogin')?>">
                                            <i class='flaticon-user'></i>
                                        </a><?php
                                    }?>
                                       
                                    </div>
                                </div>

                                <!-- <div class="option-item">
                                    <div class="heart">
                                        <a href="#">
                                            <i class='flaticon-heart'></i>
                                        </a>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="others-option-for-responsive">
                <div class="container">
                    <div class="dot-menu">
                        <div class="inner">
                            <div class="circle circle-one"></div>
                            <div class="circle circle-two"></div>
                            <div class="circle circle-three"></div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <div class="option-inner">
                            <div class="others-option justify-content-center d-flex align-items-center">
                                <div class="option-item">
                                    <div class="info">
                                        <div class="icon">
                                            <i class="flaticon-email"></i>
                                        </div>
                                        <span>Email Us:</span>
                                        <p>
                                            <a href="mailto:info@surveshwari.com">info@surveshwari.com</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <div class="info">
                                        <div class="icon">
                                            <i class="flaticon-call"></i>
                                        </div>
                                        <span>Call Us:</span>
                                        <p>
                                            <a href="tel:12345678790">+12345678790</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <div class="cart-btn">
                                        <a href="cart.html">
                                            <i class='flaticon-shopping-cart'></i>
                                            <span>+2</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <div class="user">
                                        <a href="login.html">
                                            <i class='flaticon-user'></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <div class="heart">
                                        <a href="#">
                                            <i class='flaticon-heart'></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
