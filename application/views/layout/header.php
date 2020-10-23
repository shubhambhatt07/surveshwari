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
        <div class="top-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="header-list">
                            <li>
                                <i class="flaticon-bag"></i>
                                Welcome to our Xenoz product
                            </li>

                            <li>
                                <i class="flaticon-delivery-truck"></i>
                                Free shipping worldwide
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-6">
                        <ul class="header-social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class='flaticon-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='flaticon-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='flaticon-pinterest'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='flaticon-linkedin'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Top Header Area -->

        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="<?=base_url('Home/index')?>">
                                <img src="<?=base_url()?>assets/img/logo.png" alt="logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="<?=base_url('Home')?>">
                            <img src="<?=base_url()?>assets/img/logo.png" alt="logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="<?=base_url('Home/index')?>" class="nav-link active">
                                        Home 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <!-- <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="index-2.html" class="nav-link active">Jewelry Home</a></li>

                                        <li class="nav-item"><a href="index-3.html" class="nav-link">Fashion Home</a></li>
                                        
                                        <li class="nav-item"><a href="index-4.html" class="nav-link">HandCraft Home</a></li>

                                        <li class="nav-item"><a href="index-5.html" class="nav-link">Electronic Home</a></li>
                                    </ul> -->
                                </li>

                                <li class="nav-item megamenu">
                                    <a href="#" class="nav-link">
                                        Pages 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col">
                                                        <h6 class="submenu-title">Pages</h6>

                                                        <ul class="megamenu-submenu">
                                                            <li><a href="<?=base_url('Home/About')?>">About Us</a></li>

                                                            <li><a href="<?=base_url('Contact/customer_service')?>">Customer Service</a></li>

                                                            <li><a href="<?=base_url('Login')?>">Login</a></li>

                                                            <li><a href="<?=base_url('Login/Register')?>">Register</a></li>

                                                           

                                                            <li><a href="track-order.html">Tracking Order</a></li>

                                                            <li><a href="<?=base_url('Home/Contact')?>">Contact Us</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="col">
                                                       

                                                        <h6 class="submenu-title">Dashboard</h6>

                                                        <ul class="megamenu-submenu">
                                                            <li><a href="<?=base_url('Home/index')?>">Dashboard</a></li>

                                                            <!-- <li><a href="login.html">My Account</a></li> -->
                                                        </ul>

                                                        <h6 class="submenu-title">Setting</h6>

                                                        <ul class="megamenu-submenu">
                                                            <li><a href="<?=base_url('API/privacy_policy')?>">Privacy Policy</a></li>

                                                            <li><a href="<?=base_url('API/terms_of_service')?>">Terms of Service</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="col">
                                                        <h6 class="submenu-title">Categories</h6>

                                                        <ul class="megamenu-submenu">
                                                            <li><a href="categories-1.html">Masala</a></li>

                                                            <li><a href="categories-2.html">Achar</a></li>

                                                        </ul>

                                                       
                                                    </div>

                                                    <div class="col">
                                                        <h6 class="submenu-title">Shop</h6>

                                                        <ul class="megamenu-submenu">
                                                            <li><a href="cart.html">Cart</a></li>

                                                            <li><a href="checkout.html">Cehckout</a></li>

                                                            <li><a href="compare.html">Compare</a></li>

                                                            <li><a href="login.html">My Account</a></li>

                                                            <li><a href="sizing-guide.html">Sizing Guide</a></li>

                                                            <li><a href="track-order.html">Tracking Order</a></li>

                                                            <li><a href="customer-service.html">Customer Service</a></li>

                                                            <li><a href="coming-soon.html">Coming Soon</a></li>

                                                            <li><a href="contact.html">Contact Us</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Categories 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="categories-1.html" class="nav-link">Categories (3 in Row)</a></li>

                                        <li class="nav-item"><a href="categories-2.html" class="nav-link">Categories Fullwidth</a></li>

                                        <li class="nav-item"><a href="categories-3.html" class="nav-link">Categories FullWidth (4 in Row)</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Shop 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="shop.html" class="nav-link">Shop Grid</a></li>

                                        <li class="nav-item"><a href="cart.html" class="nav-link">Cart</a></li>

                                        <li class="nav-item"><a href="checkout.html" class="nav-link">Checkout</a></li>

                                        <li class="nav-item"><a href="shop-left-sidebar.html" class="nav-link">Shop Left Sidebar</a></li>

                                        <li class="nav-item"><a href="shop-right-sidebar.html" class="nav-link">Shop Right Sidebar</a></li>

                                        <li class="nav-item"><a href="shop-full-width-sidebar.html" class="nav-link">Shop Full Width Sidebar</a></li>

                                        <li class="nav-item"><a href="products-details.html" class="nav-link">Products Details</a></li>

                                        <li class="nav-item"><a href="products-details-two.html" class="nav-link">Products Details Style Two</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item">
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

                                <li class="nav-item">
                                    <a href="<?=base_url('Home/Contact')?>" class="nav-link">Contact</a>
                                </li>
                            </ul>

                            <div class="others-option d-flex align-items-center">
                                <div class="option-item">
                                    <div class="info">
                                        <div class="icon">
                                            <i class="flaticon-email"></i>
                                        </div>
                                        <span>Email Us:</span>
                                        <p>
                                            <a href="mailto:hello@info.com">info@xenoz.com</a>
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
                                            <a href="tel:918566246">+918-566-246</a>
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
                                            <a href="mailto:hello@info.com">info@xenoz.com</a>
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
                                            <a href="tel:918566246">+918-566-246</a>
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
