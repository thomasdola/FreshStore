<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8"> <![endif]-->
<!--[if IE 9]> <html class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>FreshShop</title>
        <meta name="description" content="">
        <!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic%7CPT+Gudea:400,700,400italic%7CPT+Oswald:400,700,300' rel='stylesheet' id="googlefont">
        
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/prettyPhoto.css') }}">
        <link rel="stylesheet" href="{{ asset('css/colpick.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery.bxslider.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        
        <!-- Favicon and Apple Icons -->
        {{-- <link rel="icon" type="image/png" href="images/icons/icon.html">
        <link rel="apple-touch-icon" sizes="57x57" href="images/icons/apple-icon-57x57.html">
        <link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-icon-72x72.html">
         --}}
        <!--- jQuery -->
        <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
        <!--[if lt IE 9]>
            <script src="{{ asset('js/html5shiv.js') }}"></script>
            <script src="{{ asset('js/respond.min.js') }}"></script>
        <![endif]-->
        
        <style id="custom-style">
        
        </style>
    </head>
    <body>

    <div id="wrapper">
        <header id="header">
            <div id="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header-top-left">
                                <ul id="top-links" class="clearfix">
                                    <li><a href="#" title="My Wishlist"><span class="top-icon top-icon-pencil"></span><span class="hide-for-xs">My Favourite</span></a></li>
                                    <li><a href="#" title="My Account"><span class="top-icon top-icon-user"></span><span class="hide-for-xs">My Account</span></a></li>
                                    <li><a href="" title="My Cart"><span class="top-icon top-icon-cart"></span><span class="hide-for-xs">My Cart</span></a></li>
                                    <li><a href="" title="Checkout"><span class="top-icon top-icon-check"></span><span class="hide-for-xs">Checkout</span></a></li>
                                    <li><a href="" title="Checkout"><span class="top-icon top-icon-pencil"></span><span class="hide-for-xs">Contact us</span></a></li>
                                </ul>
                            </div><!-- End .header-top-left -->
                            <div class="header-top-right">
                                <div class="header-text-container pull-right">
                                    <p class="header-text">Welcome to FreshShop!</p>
                                    <p class="header-link"><a href="">login</a>&nbsp;or&nbsp;<a href="">create an account</a></p>
                                </div><!-- End .pull-right -->
                            </div><!-- End .header-top-right -->
                        </div><!-- End .col-md-12 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End #header-top -->
            
            <div id="inner-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12 logo-container">
                            <h1 class="logo clearfix">
                                <span>FreshShop</span>
                                <a href="" title="Venedor eCommerce Template"><img src="images/logo.png" alt="" width="196" height="42"></a>
                            </h1>
                        </div><!-- End .col-md-5 -->
                        <div class="col-md-7 col-sm-7 col-xs-12 header-inner-right">
                                
                                <div class="header-inner-right-wrapper clearfix">
                                    <div class="dropdown-cart-menu-container pull-right">
                                        <div class="btn-group dropdown-cart">
                                            <button type="button" class="btn btn-custom dropdown-toggle">
                                                <span class="cart-menu-icon"></span>
                                                0 item(s) <span class="drop-price">- $0.00</span>
                                            </button>
                                    
                                        </div><!-- End .btn-group -->
                                    </div><!-- End .dropdown-cart-menu-container -->

                                </div><!-- End .header-inner-right-wrapper -->

                                <p class="quick-contact-text">SUPPORT SERVICE: +(233) 24-21-48-15; +(233) 24-14-25-78</p>
                        </div><!-- End .col-md-7 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
                
                <div id="main-nav-container">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 clearfix">
                                
                                <nav id="main-nav">
                                    <div id="responsive-nav">
                                        <div id="responsive-nav-button">
                                            Menu <span id="responsive-nav-button-icon"></span>
                                        </div><!-- responsive-nav-button -->
                                    </div>
                                    <ul class="menu clearfix">
                                        <li>
                                            <a class="active" href="">
                                                <span class="hide-for-xs"><img src="images/home-icon.png" alt="home icon"></span>
                                                <span class="hide-for-lg">
                                                    Home
                                                </span>
                                            </a>
                                        </li>
                                        <li class="mega-menu-container"><a href="#">SHOP</a>
                                            <div class="mega-menu clearfix">
                                                    <div class="col-5">
                                                        <a href="category.html" class="mega-menu-title">FRUITS</a><!-- End .mega-menu-title -->
                                                        <ul class="mega-menu-list clearfix">
                                                            <li><a href="#">Dresses</a></li>
                                                            <li><a href="#">Jeans &amp; Trousers</a></li>
                                                            <li><a href="#">Blouses &amp; Shirts</a></li>
                                                            <li><a href="#">Tops &amp; T-Shirts</a></li>
                                                            <li><a href="#">Jackets &amp; Coats</a></li>
                                                            <li><a href="#">Skirts</a></li>
                                                        </ul>
                                                    </div><!-- End .col-5 -->
                                                    <div class="col-5">
                                                        <a href="category.html" class="mega-menu-title">VEGETABLES</a><!-- End .mega-menu-title -->
                                                        <ul class="mega-menu-list clearfix">
                                                            <li><a href="#">Formal Shoes</a></li>
                                                            <li><a href="#">Casual Shoes</a></li>
                                                            <li><a href="#">Sandals</a></li>
                                                            <li><a href="#">Boots</a></li>
                                                            <li><a href="#">Wide Fit</a></li>
                                                            <li><a href="#">Slippers</a></li>
                                                        </ul>
                                                    </div><!-- End .col-5 -->
                                                    <div class="col-5">
                                                        <a href="category.html" class="mega-menu-title">GROCERY</a><!-- End .mega-menu-title -->
                                                        <ul class="mega-menu-list clearfix">
                                                            <li><a href="#">Bags &amp; Purses</a></li>
                                                            <li><a href="#">Belts</a></li>
                                                            <li><a href="#">Gloves</a></li>
                                                            <li><a href="#">Jewellery</a></li>
                                                            <li><a href="#">Sunglasses</a></li>
                                                            <li><a href="#">Hair Accessories</a></li>
                                                        </ul>
                                                    </div><!-- End .col-5 -->
                                                    <div class="col-5">
                                                        <a href="category.html" class="mega-menu-title">SEAFOOD</a><!-- End .mega-menu-title -->
                                                        <ul class="mega-menu-list clearfix">
                                                            <li><a href="#">Sport Tops &amp; Vests</a></li>
                                                            <li><a href="#">Swimwear</a></li>
                                                            <li><a href="#">Footwear</a></li>
                                                            <li><a href="#">Sports Underwear</a></li>
                                                            <li><a href="#">Bags</a></li>
                                                        </ul>
                                                    </div><!-- End .col-5 -->
                                                    
                                                    <div class="col-5">
                                                        <a href="category.html" class="mega-menu-title">BUTHCER</a><!-- End .mega-menu-title -->
                                                        <ul class="mega-menu-list clearfix">
                                                            <li><a href="#">Tops &amp; Skirts</a></li>
                                                            <li><a href="#">Dresses</a></li>
                                                            <li><a href="#">Trousers &amp; Shorts</a></li>
                                                            <li><a href="#">Knitwear</a></li>
                                                            <li><a href="#">Jackets &amp; Coats</a></li>
                                                        </ul>
                                                    </div><!-- End .col-5 -->
                                            </div><!-- End .mega-menu -->
                                        </li>
                                        <li>
                                            <a href="#">IN SEASON</a>
                                        </li>
                                        <li><a href="#">WHOLESALE</a>
                                            <ul>
                                                <li><a href="">All</a></li>
                                                <li><a href="">Vegetables</a></li>
                                                <li><a href="">Fruits</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    
                                </nav>
                                
                            </div><!-- End .col-md-12 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
                    
                </div><!-- End #nav -->
            </div><!-- End #inner-header -->
        </header><!-- End #header -->

        <section id="content">
            
            <div id="slider-edge">
            <div class="left-side-shadow"></div><!-- End .left-side-shadow -->
            <div class="right-side-shadow"></div><!-- End .left-side-shadow -->
            <div id="bxslider" class="container">
                <ul class="bxslider">
                    <li>
                        <div class="slider-item">
                            <img src="images/homeslider/slide1_1.jpg" alt="Slider item 1">
                            <div class="slider-item-details">
                                <div class="slider-item-wrapper">
                                    <h3 class="item-name">
                                        <a href="product.html">Jacket Suiting Blazer</a>
                                    </h3>
                                    <div class="item-price-container">
                                        <span class="item-price">$49.<span class="sub-price">99</span></span>
                                    </div><!-- End .item-price-container -->
                                    <p>Integer eleifend molestie erat in consectetur. Donec eget tellus metus, eu malesuada libero. 
Suspendisse leo tortor, semper et mattis ac, fermentum ac libero. Nullam eget sapien eget ligula eleifend luctus.</p>

                                <a href="#" class="item-add-btn">
                                    Add to Cart
                                </a>
                                </div><!-- End .slider-item-wrapper -->
                                
                            </div><!-- End .slider-item-details -->
                        </div><!-- End .slider-item -->
                        <div class="slider-item">
                            <img src="images/homeslider/slide2_1.jpg" alt="Slider item 2">
                            <div class="slider-item-details">
                                <div class="slider-item-wrapper">
                                    <h3 class="item-name">
                                        <a href="product.html">Jacket Blazer</a>
                                    </h3>
                                    <div class="item-price-container">
                                        <span class="item-price">$299.<span class="sub-price">00</span></span>
                                    </div><!-- End .item-price-container -->
                                    <p>Integer eleifend molestie erat in consectetur. Donec eget tellus metus, eu malesuada libero. 
Suspendisse leo tortor, semper et mattis ac, fermentum ac libero. Nullam eget sapien eget ligula eleifend luctus.</p>

                                <a href="#" class="item-add-btn">
                                    Add to Cart
                                </a>
                                </div><!-- End .slider-item-wrapper -->
                                
                            </div><!-- End .slider-item-details -->
                            
                        </div><!-- End .slider-item -->
                    </li>
                    <li>
                        <div class="slider-item">
                            <img src="images/homeslider/slide3_1.jpg" alt="Slider item 3">
                            <div class="slider-item-details">
                                <div class="slider-item-wrapper">
                                    <h3 class="item-name">
                                        <a href="product.html">Jacket Blue Jean</a>
                                    </h3>
                                    <div class="item-price-container">
                                        <span class="item-price">$120</span>
                                    </div><!-- End .item-price-container -->
                                    <p>Integer eleifend molestie erat in consectetur. Donec eget tellus metus, eu malesuada libero. 
Suspendisse leo tortor, semper et mattis ac, fermentum ac libero. Nullam eget sapien eget ligula eleifend luctus.</p>

                                <a href="#" class="item-add-btn">
                                    Add to Cart
                                </a>
                                </div><!-- End .slider-item-wrapper -->
                                
                            </div><!-- End .slider-item-details -->
                        </div><!-- End .slider-item -->
                        <div class="slider-item">
                            <img src="images/homeslider/slide4_1.jpg" alt="Slider item 4">
                            <div class="slider-item-details">
                                <div class="slider-item-wrapper">
                                    <h3 class="item-name">
                                        <a href="product.html">Blue Jean Blazer</a>
                                    </h3>
                                    <div class="item-price-container">
                                        <span class="item-price">$490</span>
                                    </div><!-- End .item-price-container -->
                                    <p>Integer eleifend molestie erat in consectetur. Donec eget tellus metus, eu malesuada libero. 
Suspendisse leo tortor, semper et mattis ac, fermentum ac libero. Nullam eget sapien eget ligula eleifend luctus.</p>

                                <a href="#" class="item-add-btn">
                                    Add to Cart
                                </a>
                                </div><!-- End .slider-item-wrapper -->
                                
                            </div><!-- End .slider-item-details -->
                        </div><!-- End .slider-item -->
                    </li>
                </ul>
            </div><!-- End #bxslider -->
            </div><!-- #slider-edge -->
            
            <div class="lg-margin"></div><!-- Space -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        

                        <div class="lg-margin"></div><!-- Space -->

                        <div class="row">
                            
                            <div class="col-md-8 col-sm-8 col-xs-12 col-md-offset-2 col-sm-offset-2 main-content">
                                
                                
                                <div class="lg-margin"></div><!-- Space -->

                                <div class="xlg-margin"></div><!-- Space -->
                                
                                <div class="hot-items carousel-wrapper">
                                    <header class="content-title">
                                        <div class="title-bg">
                                            <h2 class="title">Our Specials</h2>
                                        </div><!-- End .title-bg -->
                                        <p class="title-desc"></p>
                                    </header>

                                <div class="carousel-controls">
                                    <div id="hot-items-slider-prev" class="carousel-btn carousel-btn-prev">
                                    </div><!-- End .carousel-prev -->
                                    <div id="hot-items-slider-next" class="carousel-btn carousel-btn-next carousel-space">
                                    </div><!-- End .carousel-next -->
                                </div><!-- End .carousel-controls -->
                                <div class="hot-items-slider owl-carousel">
                                            <div class="item">
                                                <div class="item-image-container">
                                                    <figure>
                                                    <a href="product.html">
                                                        <img src="images/products/headphones1.jpg" alt="Phone 1" class="item-image">
                                                        <img src="images/products/headphones1-hover.jpg" alt="Phone 1 Hover" class="item-image-hover">
                                                    </a>
                                                    </figure>
                                                    <span class="discount-circle">-25%</span>
                                                </div><!-- End .item-image -->
                                            
                                            <div class="item-meta-container">
                                                <div class="item-meta-inner-container clearfix">
                                                <div class="item-price-container">
                                                    <span class="old-price">$299</span><span class="item-price">$69</span>
                                                </div><!-- End .item-price-container -->
                                                
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-result" data-result="70"></div>
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .item-meta-inner-container -->
                                                <h3 class="item-name"><a href="product.html">Lorem Ipsum Dolla</a></h3>
                                                <div class="item-action">
                                                    <a href="#" class="item-add-btn">
                                                        <span class="icon-cart-text">Add to Cart</span>
                                                    </a>
                                                    <div class="item-action-inner">
                                                        <a href="#" class="icon-button icon-like">Favourite</a>
                                                        <a href="#" class="icon-button icon-compare">Checkout</a>
                                                    </div><!-- End .item-action-inner -->
                                                </div><!-- End .item-action -->
                                            </div><!-- End .item-meta-container --> 
                                        </div><!-- End .item -->

                                            <div class="item">
                                                <div class="item-image-container">
                                                    <figure>
                                                    <a href="product.html">
                                                        <img src="images/products/item3.jpg" alt="Phone 1" class="item-image">
                                                        <img src="images/products/item3-hover.jpg" alt="Phone 1 Hover" class="item-image-hover">
                                                    </a>
                                                    </figure>
                                                </div><!-- End .item-image -->
                                            
                                            <div class="item-meta-container">
                                                <div class="item-meta-inner-container clearfix">
                                                <div class="item-price-container">
                                                    <span class="old-price">$99</span><span class="item-price">$19.<span class="sub-price">99</span></span>
                                                </div><!-- End .item-price-container -->
                                                
                                                <div class="ratings-container">
                                                    
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .item-meta-inner-container -->
                                                <h3 class="item-name"><a href="product.html">Lorem Ipsum Dolla</a></h3>
                                                <div class="item-action">
                                                    <a href="#" class="item-add-btn">
                                                        <span class="icon-cart-text">Add to Cart</span>
                                                    </a>
                                                    <div class="item-action-inner">
                                                        <a href="#" class="icon-button icon-like">Favourite</a>
                                                        <a href="#" class="icon-button icon-compare">Checkout</a>
                                                    </div><!-- End .item-action-inner -->
                                                </div><!-- End .item-action -->
                                            </div><!-- End .item-meta-container --> 
                                        </div><!-- End .item -->
                                            <div class="item">
                                                <div class="item-image-container">
                                                    <figure>
                                                    <a href="product.html">
                                                        <img src="images/products/item4.jpg" alt="Phone 1" class="item-image">
                                                        <img src="images/products/item4-hover.jpg" alt="Phone 1 Hover" class="item-image-hover">
                                                    </a>
                                                    </figure>
                                                </div><!-- End .item-image -->
                                            
                                            <div class="item-meta-container">
                                                <div class="item-meta-inner-container clearfix">
                                                <div class="item-price-container">
                                                    <span class="old-price">$99</span><span class="item-price">$319.<span class="sub-price">99</span></span>
                                                </div><!-- End .item-price-container -->
                                                
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-result" data-result="90"></div>
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .item-meta-inner-container -->
                                                <h3 class="item-name"><a href="product.html">Lorem Ipsum Dolla</a></h3>
                                                <div class="item-action">
                                                    <a href="#" class="item-add-btn">
                                                        <span class="icon-cart-text">Add to Cart</span>
                                                    </a>
                                                    <div class="item-action-inner">
                                                        <a href="#" class="icon-button icon-like">Favourite</a>
                                                        <a href="#" class="icon-button icon-compare">Checkout</a>
                                                    </div><!-- End .item-action-inner -->
                                                </div><!-- End .item-action -->
                                            </div><!-- End .item-meta-container --> 
                                        </div><!-- End .item -->

                                            <div class="item">
                                                <div class="item-image-container">
                                                    <figure>
                                                    <a href="product.html">
                                                        <img src="images/products/phone1.jpg" alt="Phone 1" class="item-image">
                                                        <img src="images/products/phone1-hover.jpg" alt="Phone 1 Hover" class="item-image-hover">
                                                    </a>
                                                    </figure>
                                                    <span class="new-circle">New</span>
                                                </div><!-- End .item-image -->
                                            
                                            <div class="item-meta-container">
                                                <div class="item-meta-inner-container clearfix">
                                                <div class="item-price-container">
                                                    <span class="old-price">$129</span><span class="item-price">$99.<span class="sub-price">99</span></span>
                                                </div><!-- End .item-price-container -->
                                                
                                                <div class="ratings-container">
                                                    
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .item-meta-inner-container -->
                                                <h3 class="item-name"><a href="product.html">Lorem Ipsum Dolla</a></h3>
                                                <div class="item-action">
                                                    <a href="#" class="item-add-btn">
                                                        <span class="icon-cart-text">Add to Cart</span>
                                                    </a>
                                                    <div class="item-action-inner">
                                                        <a href="#" class="icon-button icon-like">Favourite</a>
                                                        <a href="#" class="icon-button icon-compare">Checkout</a>
                                                    </div><!-- End .item-action-inner -->
                                                </div><!-- End .item-action -->
                                            </div><!-- End .item-meta-container --> 
                                        </div><!-- End .item -->

                                            <div class="item">
                                                <div class="item-image-container">
                                                    <figure>
                                                    <a href="product.html">
                                                        <img src="images/products/item1.jpg" alt="Phone 1" class="item-image">
                                                        <img src="images/products/item1-hover.jpg" alt="Phone 1 Hover" class="item-image-hover">
                                                    </a>
                                                    </figure>
                                                    <span class="new-circle">New</span>
                                                </div><!-- End .item-image -->
                                            
                                            <div class="item-meta-container">
                                                <div class="item-meta-inner-container clearfix">
                                                <div class="item-price-container">
                                                    <span class="old-price">$54</span><span class="item-price">$25.<span class="sub-price">99</span></span>
                                                </div><!-- End .item-price-container -->
                                                
                                                <div class="ratings-container">
                                                    
                                                </div><!-- End .rating-container -->
                                            </div><!-- End .item-meta-inner-container -->
                                                <h3 class="item-name"><a href="product.html">Lorem Ipsum Dolla</a></h3>
                                                <div class="item-action">
                                                    <a href="#" class="item-add-btn">
                                                        <span class="icon-cart-text">Add to Cart</span>
                                                    </a>
                                                    <div class="item-action-inner">
                                                        <a href="#" class="icon-button icon-like">Favourite</a>
                                                        <a href="#" class="icon-button icon-compare">Checkout</a>
                                                    </div><!-- End .item-action-inner -->
                                                </div><!-- End .item-action -->
                                            </div><!-- End .item-meta-container --> 
                                        </div><!-- End .item -->

                                </div><!--hot-items-slider -->
                                <div class="lg-margin"></div><!-- Space -->
                                </div><!-- End .hot-items -->
                            </div><!-- End .col-md-9 -->
                            
                            
                        </div><!-- End .row -->
                        
                    </div><!-- End .col-md-12 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        
        </section><!-- End #content -->
        
        <footer id="footer">
            <div id="inner-footer">
                
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-12 widget">
                            <h3>MY ACCOUNT</h3>
                            <ul class="links">
                                <li><a href="#">My account</a></li>
                                <li><a href="#">Personal information</a></li>
                                <li><a href="#">Addresses</a></li>
                                <li><a href="#">Discount</a></li>
                                <li><a href="#">Order History</a></li>
                                <li><a href="#">Your Vouchers</a></li>
                            </ul>
                        </div><!-- End .widget -->
                        
                        <div class="col-md-3 col-sm-4 col-xs-12 widget">
                            <h3>INFORMATION</h3>
                            <ul class="links">
                                <li><a href="#">New products</a></li>
                                <li><a href="#">Top sellers</a></li>
                                <li><a href="#">Specials</a></li>
                                <li><a href="#">Manufacturers</a></li>
                                <li><a href="#">Suppliers</a></li>
                                <li><a href="#">Our stores</a></li>
                            </ul>
                        </div><!-- End .widget -->
                        
                        <div class="col-md-3 col-sm-4 col-xs-12 widget">
                            <h3>Our Addresses</h3>
                            
                            <ul class="contact-list">
                                <li><strong>FreshShop Ltd</strong></li>
                                <li>Ghana</li>
                                <li>Greater Accra</li>
                                <li>Accra 02587</li>
                                <li>Oxford Street 48/188</li>
                                <li>Working Days: Mon. - Sun.</li>
                                <li>Working Hours: 9.00AM - 8.00PM</li>
                            </ul>
                        </div><!-- End .widget -->
                        
                        <div class="clearfix visible-sm"></div>
                        
                    </div><!-- End .row -->
                </div><!-- End .container -->
            
            </div><!-- End #inner-footer -->
            
            <div id="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-7 col-xs-12 footer-social-links-container">
                            <ul class="social-links clearfix">
                                <li><a href="#" class="social-icon icon-facebook"></a></li>
                                <li><a href="#" class="social-icon icon-twitter"></a></li>
                            </ul>
                        </div><!-- End .col-md-7 -->
                        
                        <div class="col-md-5 col-sm-5 col-xs-12 footer-text-container">
                            <p>&copy; 2015 Powered by Eureka Cachet&trade;. All Rights Reserved.</p>
                        </div><!-- End .col-md-5 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End #footer-bottom -->
            
        </footer><!-- End #footer -->
    </div><!-- End #wrapper -->
        <a href="#" id="scroll-top" title="Scroll to Top"><i class="fa fa-angle-up"></i></a><!-- End #scroll-top -->
    <!-- END -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/smoothscroll.js') }}"></script>
    <script src="{{ asset('js/retina-1.1.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery.placeholder.js') }}"></script>
    <script src="{{ asset('js/jquery.hoverIntent.min.js') }}"></script>
    <script src="{{ asset('js/twitter/jquery.tweet.min.js') }}"></script>
    <script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jflickrfeed.min.js') }}"></script>
    <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('js/colpick.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    
    <script>
        $(function() {

            // BxSlider.js Slider Plugin
             $('.bxslider').bxSlider({
                speed: 1000,
                auto: true,
                pause: 6000,
                prevText : '',
                nextText : ''
             });
             
             $(window).on('load resize', function() {
                var windowWidth = $(window).width(),
                    bxSliderWidth = $('#bxslider').width(),
                    bxSliderHeight = $('#bxslider').height(),
                    shadowWidth = (windowWidth - bxSliderWidth) / 2 ;
                    
                    $('.left-side-shadow, .right-side-shadow').css({'width': shadowWidth, 'height': bxSliderHeight});
                    
             });
        
        });
    </script>
    </body>
</html>