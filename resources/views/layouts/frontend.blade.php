<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ env('PROJECT_FAVICON') }}" type="image/x-icon">

    <!-- Title -->
    <title>@yield('name', env('APP_NAME')) - @yield('description', env('APP_DESCRIPTION'))</title>

    <!-- ************************* CSS Files ************************* -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/bootstrap.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/font-awesome.min.css">

    <!-- dl Icon CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/dl-icon.css">

    <!-- All Plugins CSS  -->
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/plugins.css">

    <!-- Revoulation CSS  -->
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/revoulation.css">

    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend_assets') }}/css/main.css">

    <!-- modernizr JS
    ============================================ -->
    <script src="{{ asset('frontend_assets') }}/js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('header_scripts')
</head>

<body>

    <div class="ai-preloader active">
        <div class="ai-preloader-inner h-100 d-flex align-items-center justify-content-center">
            <div class="ai-child ai-bounce1"></div>
            <div class="ai-child ai-bounce2"></div>
            <div class="ai-child ai-bounce3"></div>
        </div>
    </div>

    <!-- Main Wrapper Start -->
    <div class="wrapper @if (Request::is('/')) enable-header-transparent @endif">
        <!-- Header Area Start -->
        <header
            class="header @if (Request::is('/')) header-transparent @endif header-fullwidth header-style-1">
            <div class="header-outer">
                <div class="header-inner fixed-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-5 col-lg-6">
                                <!-- Main Navigation Start Here -->
                                <nav class="main-navigation">
                                    <ul class="mainmenu">
                                        <li class="mainmenu__item">
                                            <a href="{{ route('index') }}" class="mainmenu__link">
                                                <span class="mm-text">Home</span>
                                            </a>
                                        </li>
                                        <li
                                            class="mainmenu__item menu-item-has-children has-children @yield('category')">
                                            <a href="{{ route('all.categories') }}" class="mainmenu__link">
                                                <span class="mm-text">Category</span>
                                            </a>
                                            <ul class="sub-menu">
                                                @foreach (categories() as $category)
                                                    <li
                                                        class="@if ($category->subcategory->count() > 0) menu-item-has-children has-children @endif">
                                                        <a href="{{ route('s.category', $category->slug) }}">
                                                            <span class="mm-text">{{ $category->name }}</span>
                                                        </a>
                                                        @if ($category->subcategory->count() > 0)
                                                            <ul class="sub-menu">
                                                                @foreach ($category->subcategory as $subcategory)
                                                                    <li>
                                                                        <a
                                                                            href="{{ route('s.category', ['slug' => $category->slug, 'sub_slug' => $subcategory->slug]) }}">
                                                                            <span
                                                                                class="mm-text">{{ $subcategory->name }}</span>
                                                                        </a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="mainmenu__item @yield('shop')">
                                            <a href="{{ route('shop') }}" class="mainmenu__link">
                                                <span class="mm-text">Shop</span>
                                            </a>
                                        </li>
                                        <li class="mainmenu__item @yield('collections')">
                                            <a href="{{ route('collections') }}" class="mainmenu__link">
                                                <span class="mm-text">Collections</span>
                                            </a>
                                        </li>
                                        <li class="mainmenu__item @yield('contact.us')">
                                            <a href="{{ route('contact.us') }}" class="mainmenu__link">
                                                <span class="mm-text">Contact Us</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- Main Navigation End Here -->
                            </div>
                            <div class="col-lg-2 col-md-3 col-4 text-lg-center">
                                <!-- Logo Start Here -->
                                <a href="{{ route('index') }}" class="logo-box">
                                    <figure class="logo--normal">
                                        <img src="{{ asset('frontend_assets') }}/img/logo/logo.svg" alt="Logo" />
                                    </figure>
                                    <figure class="logo--transparency">
                                        <img src="{{ asset('frontend_assets') }}/img/logo/logo-white.png"
                                            alt="Logo" />
                                    </figure>
                                </a>
                                <!-- Logo End Here -->
                            </div>
                            <div class="col-xl-5 col-lg-4 col-md-9 col-8">
                                <!-- Header Toolbar Start Here -->
                                <ul class="header-toolbar text-end">
                                    <li class="header-toolbar__item d-none d-lg-block">
                                        <a href="#sideNav" class="toolbar-btn">
                                            <i class="dl-icon-menu2"></i>
                                        </a>
                                    </li>
                                    <li class="header-toolbar__item user-info-menu-btn">
                                        <a href="#">
                                            <i class="fa fa-user-circle-o"></i>
                                        </a>
                                        <ul class="user-info-menu">
                                            @auth
                                                <li>
                                                    <a href="{{ route('home') }}">My Account</a>
                                                </li>
                                                <li>
                                                    <a href="cart.html">Shopping Cart</a>
                                                </li>
                                                <li>
                                                    <a href="checkout.html">Check Out</a>
                                                </li>
                                                <li>
                                                    <a href="wishlist.html">Wishlist</a>
                                                </li>
                                                <li>
                                                    <a href="order-tracking.html">Order tracking</a>
                                                </li>
                                                <li>
                                                    <a href="compare.html">compare</a>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="{{ route('login') }}">Login</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('register') }}">Register</a>
                                                </li>
                                            @endauth
                                        </ul>
                                    </li>
                                    <li class="header-toolbar__item">
                                        <a href="#miniCart" class="mini-cart-btn toolbar-btn">
                                            <i class="dl-icon-cart4"></i>
                                            <sup class="mini-cart-count">000</sup>
                                        </a>
                                    </li>
                                    <li class="header-toolbar__item">
                                        <a href="{{ route('favourites') }}">
                                            <i class="fa fa-heart text-danger"></i>
                                        </a>
                                    </li>
                                    <li class="header-toolbar__item">
                                        <a href="#searchForm" class="search-btn toolbar-btn">
                                            <i class="dl-icon-search1"></i>
                                        </a>
                                    </li>
                                    <li class="header-toolbar__item d-lg-none">
                                        <a href="#" class="menu-btn"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-sticky-header-height"></div>
            </div>

        </header>
        <!-- Header Area End -->

        <!-- Mobile Header area Start -->
        <header class="header-mobile">
            <div class="header-mobile__outer">
                <div class="header-mobile__inner fixed-header">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-4">
                                <a href="index.html" class="logo-box">
                                    <figure class="logo--normal">
                                        <img src="{{ asset('frontend_assets') }}/img/logo/logo.svg" alt="Logo">
                                    </figure>
                                </a>
                            </div>
                            <div class="col-8">
                                <ul class="header-toolbar text-end">
                                    <li class="header-toolbar__item user-info-menu-btn">
                                        <a href="#">
                                            <i class="fa fa-user-circle-o"></i>
                                        </a>
                                        <ul class="user-info-menu">
                                            <li>
                                                <a href="my-account.html">My Account</a>
                                            </li>
                                            <li>
                                                <a href="cart.html">Shopping Cart</a>
                                            </li>
                                            <li>
                                                <a href="checkout.html">Check Out</a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html">Wishlist</a>
                                            </li>
                                            <li>
                                                <a href="order-tracking.html">Order tracking</a>
                                            </li>
                                            <li>
                                                <a href="compare.html">compare</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="header-toolbar__item">
                                        <a href="#miniCart" class="mini-cart-btn toolbar-btn">
                                            <i class="dl-icon-cart4"></i>
                                            <sup class="mini-cart-count">2</sup>
                                        </a>
                                    </li>
                                    <li class="header-toolbar__item">
                                        <a href="#searchForm" class="search-btn toolbar-btn">
                                            <i class="dl-icon-search1"></i>
                                        </a>
                                    </li>
                                    <li class="header-toolbar__item d-lg-none">
                                        <a href="#" class="menu-btn"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <!-- Mobile Navigation Start Here -->
                                <div class="mobile-navigation dl-menuwrapper" id="dl-menu">
                                    <button class="dl-trigger">Open Menu</button>
                                    <ul class="dl-menu">
                                        <li>
                                            <a href="index.html">
                                                Home
                                            </a>
                                            <ul class="dl-submenu">
                                                <li>
                                                    <a class="megamenu-title" href="#">
                                                        Demo Group 01
                                                    </a>
                                                    <ul class="dl-submenu">
                                                        <li>
                                                            <a href="index.html">
                                                                Demo 01
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index-02.html">
                                                                Demo 02
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index-03.html">
                                                                Demo 03
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index-04.html">
                                                                Demo 04
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index-05.html">
                                                                Demo 05
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="megamenu-title" href="#">
                                                        Demo Group 02
                                                    </a>
                                                    <ul class="dl-submenu">
                                                        <li>
                                                            <a href="index-06.html">
                                                                Demo 06
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index-07.html">
                                                                Demo 07
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index-08.html">
                                                                Demo 08
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index-09.html">
                                                                Demo 09
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index-10.html">
                                                                Demo 10
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="megamenu-title" href="#">
                                                        Demo Group 03
                                                    </a>
                                                    <ul class="dl-submenu">
                                                        <li>
                                                            <a href="index-11.html">
                                                                Demo 11
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index-12.html">
                                                                Demo 12
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index-13.html">
                                                                Demo 13
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index-14.html">
                                                                Demo 14
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index-15.html">
                                                                Demo 15
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="megamenu-title" href="#">
                                                        Demo Group 04
                                                    </a>
                                                    <ul class="dl-submenu">
                                                        <li>
                                                            <a href="index-16.html">
                                                                Demo 16
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index-17.html">
                                                                Demo 17
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index-18.html">
                                                                Demo 18
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index-19.html">
                                                                Demo 19
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="index-20.html">
                                                                Demo 20
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop-sidebar.html">
                                                Shop
                                                <span class="tip">Hot</span>
                                            </a>
                                            <ul class="dl-submenu">
                                                <li>
                                                    <a class="megamenu-title" href="#">
                                                        Shop Layout
                                                    </a>
                                                    <ul class="dl-submenu">
                                                        <li>
                                                            <a href="shop-fullwidth.html">
                                                                <span class="mm-text">FullWidth</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-sidebar.html">
                                                                <span class="mm-text">with Sidebar</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-two-column.html">
                                                                <span class="mm-text">Two columns</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-three-column.html">
                                                                <span class="mm-text">Three columns</span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a href="shop-no-gutter.html">
                                                                <span class="mm-text">Shop No Gutter</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list.html">
                                                                <span class="mm-text">Shop List</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="megamenu-title" href="#">
                                                        Single Product
                                                    </a>
                                                    <ul class="dl-submenu">
                                                        <li>
                                                            <a href="product-details.html">
                                                                <span class="mm-text">Simple 01</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-details-02.html">
                                                                <span class="mm-text">Simple 02</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-details-sticky.html">
                                                                <span class="mm-text">Sticky Info</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-details-gallery.html">
                                                                <span class="mm-text">Thumbnail Gallery</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-details-sidebar.html">
                                                                <span class="mm-text">Sidebar</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-details-grouped.html">
                                                                <span class="mm-text">Grouped</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-details-affiliate.html">
                                                                <span class="mm-text">Affiliate</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="product-details-configurable.html">
                                                                <span class="mm-text">Configurable</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="megamenu-title" href="#">
                                                        Shop Pages
                                                    </a>
                                                    <ul class="dl-submenu">
                                                        <li>
                                                            <a href="my-account.html">
                                                                My Account
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="cart.html">
                                                                Shopping Cart
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="checkout.html">
                                                                Check Out
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">
                                                                Wishlist
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="order-tracking.html">
                                                                Order tracking
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="compare.html">
                                                                compare
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="d-none d-lg-block banner-holder">
                                                    <div class="megamenu-banner">
                                                        <div class="megamenu-banner-image"></div>
                                                        <div class="megamenu-banner-info">
                                                            <span>
                                                                <a href="shop-sidebar.html">woman</a>
                                                                <a href="shop-sidebar.html">shoes</a>
                                                            </span>
                                                            <h3>new <strong>season</strong></h3>
                                                        </div>
                                                        <a href="shop-sidebar.html" class="megamenu-banner-link"></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop-sidebar.html">
                                                Collections
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog.html">
                                                Pages
                                            </a>
                                            <ul class="dl-submenu">
                                                <li>
                                                    <a href="about-us.html">
                                                        About Us
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="team.html">
                                                        Our teams
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="contact-us.html">
                                                        Contact us 1
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="contact-us-02.html">
                                                        Contact us 2
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="404.html">
                                                        404 page
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="faqs-page.html">
                                                        FAQs page
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="coming-soon.html">
                                                        Coming Soon
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="blog.html">
                                                Blog
                                            </a>
                                            <ul class="dl-submenu">
                                                <li>
                                                    <a href="#">
                                                        Blog Grid
                                                    </a>
                                                    <ul class="dl-submenu">
                                                        <li>
                                                            <a href="blog-02-columns.html">
                                                                <span class="mm-text">Blog 02 Column</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-03-columns.html">
                                                                <span class="mm-text">Blog 02 Column</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Blog List
                                                    </a>
                                                    <ul class="dl-submenu">
                                                        <li>
                                                            <a href="blog.html">
                                                                <span class="mm-text">Blog Sidebar</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-standard.html">
                                                                <span class="mm-text">Blog Standard</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="blog-no-sidebar.html">
                                                                <span class="mm-text">Blog No Sidebar</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="blog-masonary.html">
                                                        Blog Masonary
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        Blog Details
                                                    </a>
                                                    <ul class="dl-submenu">
                                                        <li>
                                                            <a href="single-post.html">
                                                                <span class="mm-text">Single Post</span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="single-post-sidebar.html">
                                                                <span class="mm-text">Single Post Sidebar</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="shop-instagram.html">
                                                New Look
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Mobile Navigation End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-sticky-header-height"></div>
            </div>
        </header>
        <!-- Mobile Header area End -->

        <!-- Main Content Wrapper Start -->
        <div id="content" class="main-content-wrapper">
            @yield('content')
        </div>
        <!-- Main Content Wrapper Start -->

        <!-- Footer Start -->
        <footer class="footer footer-1 bg--black ptb--40">
            <div class="footer-top pb--40 pb-md--30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-8 mb-md--30">
                            <div class="footer-widget">
                                <div class="textwidget">
                                    <img src="{{ asset('frontend_assets') }}/img/logo/logo-white.png" alt="Logo"
                                        class="mb--10">
                                    <p class="font-size-16 font-2 mb--20">Integer ut ligula quis lectus fringilla
                                        elementum porttitor sed est. Duis fringilla efficitur ligula sed lobortis.</p>
                                    <!-- Social Icons Start Here -->
                                    <ul class="social">
                                        <li class="social__item">
                                            <a href="https://twitter.com" class="social__link color--white">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://plus.google.com" class="social__link color--white">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://facebook.com" class="social__link color--white">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://youtube.com" class="social__link color--white">
                                                <i class="fa fa-youtube"></i>
                                            </a>
                                        </li>
                                        <li class="social__item">
                                            <a href="https://instagram.com" class="social__link color--white">
                                                <i class="fa fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- Social Icons End Here -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 mb-md--30">
                            <div class="footer-widget">
                                <h3 class="widget-title">Company</h3>
                                <ul class="widget-menu">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="">Our Services</a></li>
                                    <li><a href="">Affiliate Program</a></li>
                                    <li><a href="">Work for Airi</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 mb-sm--30">
                            <div class="footer-widget">
                                <h3 class="widget-title">USEFUL LINKS</h3>
                                <ul class="widget-menu">
                                    <li><a href="shop-collections.html">The Collections</a></li>
                                    <li><a href="">Size Guide</a></li>
                                    <li><a href="">Return Policiy</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 mb-sm--30">
                            <div class="footer-widget">
                                <h3 class="widget-title">SHOPPING</h3>
                                <ul class="widget-menu">
                                    <li><a href="shop-instagram.html">Look Book</a></li>
                                    <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                    <li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>
                                    <li><a href="shop-no-gutter.html">Man & Woman</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <div class="footer-widget">
                                <h4 class="widget-title">CONTACT INFO</h4>
                                <ul class="contact-info">
                                    <li class="contact-info__item">
                                        <i class="fa fa-phone"></i>
                                        <span><a href="tel:+012345 6788" class="contact-info__link">(+012) 345
                                                6788</a></span>
                                    </li>
                                    <li class="contact-info__item">
                                        <i class="fa fa-envelope"></i>
                                        <span><a href="mailto:demo@email.com"
                                                class="contact-info__link">demo@email.com</a></span>
                                    </li>
                                    <li class="contact-info__item">
                                        <i class="fa fa-map-marker"></i>
                                        <span>Example Address</span>
                                    </li>
                                </ul>
                                <div class="textwidget">
                                    <img src="{{ asset('frontend_assets') }}/img/others/payments.png" alt="Payment">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-middle pb--40 pb-md--30">
                <div class="container">
                    <div class="row method-box-wrapper">
                        <div class="col-lg-3 col-md-6 mb-md--10">
                            <div class="method-box">
                                <h4>FREESHIPPING WORLD WIDE</h4>
                                <p>Freeship over oder $100</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-md--10">
                            <div class="method-box">
                                <h4>30 DAYS MONEY BACK</h4>
                                <p>You can back money any times</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-sm--10">
                            <div class="method-box">
                                <h4>PROFESSIONAL SUPPORT 24/7</h4>
                                <p>demo@example.com</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="method-box">
                                <h4>100% SECURE CHECKOUT</h4>
                                <p>Protect buyer & clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <p class="copyright-text">&copy; AIRI 2021 MADE WITH <i class="fa fa-heart"></i> BY
                                HASTHEMES</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- Search from Start -->
        <div class="searchform__popup" id="searchForm">
            <a href="#" class="btn-close"><i class="dl-icon-close"></i></a>
            <div class="searchform__body">
                <p>Start typing and press Enter to search</p>
                <form class="searchform">
                    <input type="text" name="search" id="search" class="searchform__input"
                        placeholder="Search Entire Store...">
                    <button type="submit" class="searchform__submit"><i class="dl-icon-search10"></i></button>
                </form>
            </div>
        </div>
        <!-- Search from End -->

        <!-- Side Navigation Start -->
        <aside class="side-navigation" id="sideNav">
            <div class="side-navigation-wrapper">
                <a href="" class="btn-close"><i class="dl-icon-close"></i></a>
                <div class="side-navigation-inner">
                    <div class="widget">
                        <ul class="sidenav-menu">
                            <li><a href="about-us.html">About Airi Shop</a></li>
                            <li><a href="about-us.html">Help Center</a></li>
                            <li><a href="shop-collections.html">Portfolio</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="shop-instagram.html">New Look</a></li>
                        </ul>
                    </div>
                    <div class="widget pt--30 pr--20">
                        <div class="text-widget">
                            <p>
                                <img src="{{ asset('frontend_assets') }}/img/others/payments.png" alt="payment">
                            </p>
                            <p>Pellentesque mollis nec orci id tincidunt. Sed mollis risus eu nisi aliquet, sit amet
                                fermentum justo dapibus.</p>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="text-widget">
                            <p>
                                <a href="#">(+612) 2531 5600</a>
                                <a href="mailto:demo@example.com">demo@example.com</a>
                                PO Box 1622 Colins Street West
                            </p>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="text-widget google-map-link">
                            <p>
                                <a href="https://www.google.com/maps" target="_blank">Google Maps</a>
                            </p>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="text-widget">
                            <!-- Social Icons Start Here -->
                            <ul class="social social-small">
                                <li class="social__item">
                                    <a href="https://twitter.com" class="social__link">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="https://plus.google.com" class="social__link">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="https://facebook.com" class="social__link">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="https://youtube.com" class="social__link">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="https://instagram.com" class="social__link">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- Social Icons End Here -->
                        </div>
                    </div>
                    <div class="widget">
                        <div class="text-widget">
                            <p class="copyright-text">&copy; AIRI 2021 MADE WITH <i class="fa fa-heart"></i> BY
                                HASTHEMES</p>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Side Navigation End -->

        <!-- Mini Cart Start -->
        <aside class="mini-cart" id="miniCart">
            <div class="mini-cart-wrapper">
                <a href="" class="btn-close"><i class="dl-icon-close"></i></a>
                <div class="mini-cart-inner">
                    <h5 class="mini-cart__heading mb--40 mb-lg--30">Shopping Cart</h5>
                    <div class="mini-cart__content">
                        <ul class="mini-cart__list">
                            <li class="mini-cart__product">
                                <a href="#" class="remove-from-cart remove">
                                    <i class="dl-icon-close"></i>
                                </a>
                                <div class="mini-cart__product__image">
                                    <img src="{{ asset('frontend_assets') }}/img/products/prod-17-1-70x91.jpg"
                                        alt="products">
                                </div>
                                <div class="mini-cart__product__content">
                                    <a class="mini-cart__product__title" href="product-details.html">Chain print
                                        bermuda
                                        shorts </a>
                                    <span class="mini-cart__product__quantity">1 x $49.00</span>
                                </div>
                            </li>
                            <li class="mini-cart__product">
                                <a href="#" class="remove-from-cart remove">
                                    <i class="dl-icon-close"></i>
                                </a>
                                <div class="mini-cart__product__image">
                                    <img src="{{ asset('frontend_assets') }}/img/products/prod-18-1-70x91.jpg"
                                        alt="products">
                                </div>
                                <div class="mini-cart__product__content">
                                    <a class="mini-cart__product__title" href="product-details.html">Waxed-effect
                                        pleated skirt</a>
                                    <span class="mini-cart__product__quantity">1 x $49.00</span>
                                </div>
                            </li>
                            <li class="mini-cart__product">
                                <a href="#" class="remove-from-cart remove">
                                    <i class="dl-icon-close"></i>
                                </a>
                                <div class="mini-cart__product__image">
                                    <img src="{{ asset('frontend_assets') }}/img/products/prod-19-1-70x91.jpg"
                                        alt="products">
                                </div>
                                <div class="mini-cart__product__content">
                                    <a class="mini-cart__product__title" href="product-details.html">Waxed-effect
                                        pleated skirt</a>
                                    <span class="mini-cart__product__quantity">1 x $49.00</span>
                                </div>
                            </li>
                            <li class="mini-cart__product">
                                <a href="#" class="remove-from-cart remove">
                                    <i class="dl-icon-close"></i>
                                </a>
                                <div class="mini-cart__product__image">
                                    <img src="{{ asset('frontend_assets') }}/img/products/prod-2-1-70x91.jpg"
                                        alt="products">
                                </div>
                                <div class="mini-cart__product__content">
                                    <a class="mini-cart__product__title" href="product-details.html">Waxed-effect
                                        pleated skirt</a>
                                    <span class="mini-cart__product__quantity">1 x $49.00</span>
                                </div>
                            </li>
                        </ul>
                        <div class="mini-cart__total">
                            <span>Subtotal</span>
                            <span class="ammount">$98.00</span>
                        </div>
                        <div class="mini-cart__buttons">
                            <a href="cart.html" class="btn btn-fullwidth btn-style-1">View Cart</a>
                            <a href="checkout.html" class="btn btn-fullwidth btn-style-1">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Mini Cart End -->

        <!-- Global Overlay Start -->
        <div class="ai-global-overlay"></div>
        <!-- Global Overlay End -->

        <!-- Modal Start -->
        <div class="modal fade product-modal" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="dl-icon-close"></i>
                            </span>
                        </button>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="airi-element-carousel product-image-carousel nav-vertical-center nav-style-1"
                                    data-slick-options='{
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "arrows": true,
                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "dl-icon-left" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "dl-icon-right" }
                                }'>
                                    <div class="product-image">
                                        <div class="product-image--holder">
                                            <a href="product-details.html">
                                                <img src="{{ asset('frontend_assets') }}/img/products/prod-9-1.jpg"
                                                    alt="Product Image" class="primary-image">
                                            </a>
                                        </div>
                                        <span class="product-badge sale">sale</span>
                                    </div>
                                    <div class="product-image">
                                        <div class="product-image--holder">
                                            <a href="product-details.html">
                                                <img src="{{ asset('frontend_assets') }}/img/products/prod-10-1.jpg"
                                                    alt="Product Image" class="primary-image">
                                            </a>
                                        </div>
                                        <span class="product-badge new">new</span>
                                    </div>
                                    <div class="product-image">
                                        <div class="product-image--holder">
                                            <a href="product-details.html">
                                                <img src="{{ asset('frontend_assets') }}/img/products/prod-11-1.jpg"
                                                    alt="Product Image" class="primary-image">
                                            </a>
                                        </div>
                                        <span class="product-badge hot">hot</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-box product-summary">
                                    <div class="product-navigation mb--10">
                                        <a href="#" class="prev"><i class="dl-icon-left"></i></a>
                                        <a href="#" class="next"><i class="dl-icon-right"></i></a>
                                    </div>
                                    <h3 class="product-title mb--15">Waxed-effect pleated skirt</h3>
                                    <span class="product-price-wrapper mb--20">
                                        <span class="money">$49.00</span>
                                        <span class="product-price-old">
                                            <span class="money">$60.00</span>
                                        </span>
                                    </span>
                                    <p class="product-short-description mb--25 mb-md--20">Donec accumsan auctor
                                        iaculis.
                                        Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus,
                                        ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in
                                        vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at,
                                        hendrerit arcu.</p>
                                    <div class="product-action d-flex flex-row align-items-center mb--30 mb-md--20">
                                        <div class="quantity">
                                            <input type="number" class="quantity-input" name="qty"
                                                id="quick-qty" value="1" min="1">
                                        </div>
                                        <button type="button" class="btn btn-style-1 btn-semi-large add-to-cart"
                                            onclick="window.location.href='cart.html'">
                                            Add To Cart
                                        </button>
                                        <a href="wishlist.html"><i class="dl-icon-heart2"></i></a>
                                        <a href="compare.html"><i class="dl-icon-compare2"></i></a>
                                    </div>
                                    <div class="product-extra mb--30 mb-md--20">
                                        <a href="#" class="font-size-12"><i class="fa fa-map-marker"></i>Find
                                            store near
                                            you</a>
                                        <a href="#" class="font-size-12"><i class="fa fa-exchange"></i>Delivery
                                            and
                                            return</a>
                                    </div>
                                    <div
                                        class="product-summary-footer d-flex justify-content-between flex-sm-row flex-column flex-sm-row flex-column">
                                        <div class="product-meta">
                                            <span class="sku_wrapper font-size-12">SKU: <span class="sku">REF.
                                                    LA-887</span></span>
                                            <span class="posted_in font-size-12">Categories: <a
                                                    href="shop-sidebar.html" rel="tag">Fashions</a></span>
                                        </div>
                                        <div class="product-share-box">
                                            <span class="font-size-12">Share With</span>
                                            <!-- Social Icons Start Here -->
                                            <ul class="social social-small">
                                                <li class="social__item">
                                                    <a href="https://facebook.com" class="social__link">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="https://twitter.com" class="social__link">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="https://plus.google.com" class="social__link">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="https://plus.google.com" class="social__link">
                                                        <i class="fa fa-pinterest-p"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- Social Icons End Here -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->

        <!-- Newsletter Popup Start -->
        {{-- <div class="ai-newsletter-popup" id="subscribe-popup">
            <div class="ai-newsletter-popup-modal">
                <a class="custom-close popup-close">
                    <i class="dl-icon-close"></i>
                </a>
                <div class="ai-newsletter-popup-content">
                    <div class="ai-newsletter-popup-body">
                        <h5>Man Autumn Winter 2019</h5>
                        <h3 class="heading-tertiary mb--10">Join our newsletter and get 20% per sale</h3>
                        <form
                            action="https://company.us19.list-manage.com/subscribe/post?u=2f2631cacbe4767192d339ef2&amp;id=24db23e68a"
                            class="popup-newsletter-form mc-form mb--30" target="_blank">
                            <input type="email" name="popup-newsletter_email" id="popup-newsletter_email"
                                class="popup-newsletter-form__input" placeholder="Enter Your Email Address ....">
                            <button type="submit" class="btn btn-small btn-style-1 subscribe-btn">Submit</button>
                        </form>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                        </div>
                        <!-- mailchimp-alerts end -->
                        <label for="popup-hide" class="dont-show-popup">
                            <input type="checkbox" name="popup-hide" id="popup-hide">
                            Do not show popup anymore
                        </label>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Newsletter Popup End -->

    </div>
    <!-- Main Wrapper End -->


    <!-- ************************* JS Files ************************* -->

    <!-- jQuery JS -->
    <script src="{{ asset('frontend_assets') }}/js/vendor/jquery.min.js"></script>

    <!-- Bootstrap and Popper Bundle JS -->
    <script src="{{ asset('frontend_assets') }}/js/bootstrap.bundle.min.js"></script>

    <!-- All Plugins Js -->
    <script src="{{ asset('frontend_assets') }}/js/plugins.js"></script>

    <!-- Ajax Mail Js -->
    <script src="{{ asset('frontend_assets') }}/js/ajax-mail.js"></script>

    <!-- Main JS -->
    <script src="{{ asset('frontend_assets') }}/js/main.js"></script>

    <!-- REVOLUTION JS FILES -->
    <script src="{{ asset('frontend_assets') }}/js/revoulation/jquery.themepunch.tools.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/revoulation/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{ asset('frontend_assets') }}/js/revoulation/extensions/revolution.extension.actions.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/revoulation/extensions/revolution.extension.carousel.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/revoulation/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/revoulation/extensions/revolution.extension.layeranimation.min.js">
    </script>
    <script src="{{ asset('frontend_assets') }}/js/revoulation/extensions/revolution.extension.migration.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/revoulation/extensions/revolution.extension.navigation.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/revoulation/extensions/revolution.extension.parallax.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/revoulation/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/revoulation/extensions/revolution.extension.video.min.js"></script>

    <!-- REVOLUTION ACTIVE JS FILES -->
    <script src="{{ asset('frontend_assets') }}/js/revoulation.js"></script>
    <script src="{{ asset('frontend_assets') }}/js/sweetalert2.js"></script>
    {!! NoCaptcha::renderJs() !!}
    @yield('footer_scripts')
</body>

</html>
