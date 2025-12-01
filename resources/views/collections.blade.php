{{--
<div class="container py-5">
    <h2 class="mb-4">Our Products</h2>
    <div class="row">
        @if($products->count() > 0)
            @foreach($products as $p)
                <div class="col-md-3 mb-4">
 <div class="product-banner">
    <span class="banner-title">Product Banner</span>

  @if($p->category && $p->category->c_banner_img)
        <img src="{{ asset($p->category->c_banner_img) }}" height="100px" width="200px">
    @endif


</div>                      <div class="card-body">
                            <h5 class="card-title">{{ $p->p_name }}</h5>
                            <p class="card-text">
                                Category: {{ $p->category->c_name ?? 'No Category' }}<br>
                                Price: ₹{{ $p->p_price }}
                                @if($p->p_old_price)
                                    <del class="text-muted">₹{{ $p->p_old_price }}</del>
                                @endif
                            </p>
                            @if($p->p_stock > 0)
                                <span class="badge bg-success">In Stock: {{ $p->p_stock }}</span>
                            @else
                                <span class="badge bg-danger">Out of Stock</span>
                            @endif
                        </div>
                        <div class="card-footer text-center">
                            <a href="/" class="btn btn-primary btn-sm">home</a>
                            <button class="btn btn-success btn-sm">Add to Cart</button>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>No products found.</p>
        @endif
    </div>
</div> --}}



<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from spacingtech.com/html/erona/template/collection.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Oct 2025 07:44:02 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Erona - Fashion eCommerce HTML5 Template with Bootstrap 5</title>
        <meta name="description" content="Erona is a modern fashion eCommerce HTML5 template built with Bootstrap 5, perfect for clothing stores, boutiques, and online apparel shops.">
        <meta name="keywords" content="fashion eCommerce template, clothing store HTML5, Bootstrap 5 fashion shop, online boutique HTML, apparel shop website, responsive fashion template">
        <meta name="author" content="spacingtech_webify">
        <!-- favicon -->
        <link rel="shortcut icon" type="image/favicon" href="assets/image/index/favicon.png">
        <!-- plugin css -->
        <link rel="stylesheet" type="text/css" href="assets/css/plugin.css">
        <!-- theme css -->
        <link rel="stylesheet" type="text/css" href="assets/css/theme.css">
        <!-- collection css -->
        <link rel="stylesheet" type="text/css" href="assets/css/collection.css">
    </head>
    <body>
        <!-- preloader start -->
        <div class="preloader position-fixed top-0 start-0 w-100 h-100 body-bg z-index-5">
            <div class="loader-img position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
              <img src="{{ asset('assetsofdash/images/Red and Black Modern Creative Agency Logo-old.png') }}" class="rounded-1" width="150px" height="60px"></div>
        </div>
        <!-- preloader end -->
        <!-- header start -->
        <header id="header" class="main-header">
            <!-- header-top start -->
            <div class="header-top-area">
                <!-- notification-bar start -->
                <div class="notification-bar ptb-11 primary-bg">
                    <div class="container-fluid d-none d-xl-block">
                        <div class="row">
                            <div class="col-xl-3">
                                <span class="d-inline-block extra-color">Order online : <a href="tel:(+00)123456789" class="d-inline-block extra-color">(+00)-123456789</a></span>
                            </div>
                            <div class="col-xl-6 text-center">
                                <div class="d-flex flex-wrap">
                                    <div class="width-16">
                                        <div class="swiper-buttons">
                                            <button type="button" class="swiper-prev swiper-prev-notification extra-color icon-16" aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                                        </div>
                                    </div>
                                    <div class="width-calc-32 plr-15 text-center">
                                        <div class="notification-slider swiper" id="notification-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="text-white">Worldwide shipping + free return for above $78.00</div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="text-white">Fast delivery & hassle-free returns</div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="text-white">Easy exchanges + global delivery</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="width-16">
                                        <div class="swiper-buttons">
                                            <button type="button" class="swiper-next swiper-next-notification extra-color icon-16" aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 text-end">
                                <span class="d-inline-block extra-color">Email now : <a href="mailto:demo@demo.com" class="d-inline-block extra-color">demo@demo.com</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="notification-marquee d-flex d-xl-none overflow-hidden">
                        <div class="notification-marquee-row d-flex">
                            <div class="extra-color per-15 text-nowrap">Order online : <a href="tel:(+00)123456789" class="d-inline-block extra-color">(+00)-123456789</a></div>
                            <div class="extra-color per-15 text-nowrap">Worldwide shipping + free return for above $78.00</div>
                            <div class="extra-color per-15 text-nowrap">Fast delivery & hassle-free returns</div>
                            <div class="extra-color per-15 text-nowrap">Easy exchanges + global delivery</div>
                            <div class="extra-color per-15 text-nowrap">Email now : <a href="mailto:demo@demo.com" class="d-inline-block extra-color">(+00)-123456789</a></div>
                        </div>
                        <div class="notification-marquee-row d-flex">
                            <div class="extra-color per-15 text-nowrap">Order online : <a href="tel:(+00)123456789" class="d-inline-block extra-color">(+00)-123456789</a></div>
                            <div class="extra-color per-15 text-nowrap">Worldwide shipping + free return for above $78.00</div>
                            <div class="extra-color per-15 text-nowrap">Fast delivery & hassle-free returns</div>
                            <div class="extra-color per-15 text-nowrap">Easy exchanges + global delivery</div>
                            <div class="extra-color per-15 text-nowrap">Email now : <a href="mailto:demo@demo.com" class="d-inline-block extra-color">(+00)-123456789</a></div>
                        </div>
                    </div>
                </div>
                <!-- notification-bar end -->
                <!-- header-top-first start -->
                <div class="header-top-first ptb-10 position-relative body-bg">
                    <div class="container-fluid">
                        <div class="row align-items-center header-area">
                            <!-- header-logo start -->
                            <div class="col-6 col-xl-2 header-element header-logo">
                                <div class="header-theme-logo">
                                    <a href="index.html" class="d-inline-block theme-logo">
                                        <img src="assetsofdash/images/Red and Black Modern Creative Agency Logo-old.png" class="width-88 width-xl-112 img-fluid" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <!-- header-logo end -->
                            <!-- header-menu start -->
                            <div class="col-xl-6 col-xxl-5 d-none d-xl-block header-element header-menu">
                                <div class="mainmenu-content">
                                    <div class="main-wrap">
                                        <ul class="menu-ul d-flex flex-wrap">
                                            <li class="menu-li">
                                                <a href="/" class="menu-link d-flex align-items-center ptb-5 plr-15">
                                                    <span class="menu-title text-uppercase heading-weight">Home</span>
                                                    <span class="icon-16 fw-normal"><i class="ri-arrow-down-s-line d-block lh-1"></i></span>
                                                </a>
                                                <div class="menu-dropdown collapse position-absolute top-auto start-0 end-0 body-bg z-2 DropDownSlide box-shadow">
                                                    <div class="container ptb-30 text-center">
                                                        <div class="row">
                                                            <div class="col-xl-2">
                                                                <div class="banner-hover">
                                                                    <a href="index.html" class="d-block banner-img br-hidden">
                                                                        <img src="assets/image/menu/menu-banner1.jpg" class="w-100 img-fluid" alt="menu-banner1">
                                                                    </a>
                                                                </div>
                                                                <a href="index.html" class="d-inline-block primary-link mst-15 heading-weight">01 Classic fashion</a>
                                                            </div>
                                                            <div class="col-xl-2">
                                                                <div class="banner-hover">
                                                                    <a href="index2.html" class="d-block banner-img br-hidden">
                                                                        <img src="assets/image/menu/menu-banner2.jpg" class="w-100 img-fluid" alt="menu-banner2">
                                                                    </a>
                                                                </div>
                                                                <a href="index2.html" class="d-inline-block primary-link mst-15 heading-weight">02 Modern fashion</a>
                                                            </div>
                                                            <div class="col-xl-2">
                                                                <div class="banner-hover">
                                                                    <a href="index3.html" class="d-block banner-img br-hidden">
                                                                        <img src="assets/image/menu/menu-banner3.jpg" class="w-100 img-fluid" alt="menu-banner3">
                                                                    </a>
                                                                </div>
                                                                <a href="index3.html" class="d-inline-block primary-link mst-15 heading-weight">03 Elegant boutique</a>
                                                            </div>
                                                            <div class="col-xl-2">
                                                                <div class="banner-hover">
                                                                    <a href="index4.html" class="d-block banner-img br-hidden">
                                                                        <img src="assets/image/menu/menu-banner4.jpg" class="w-100 img-fluid" alt="menu-banner4">
                                                                    </a>
                                                                </div>
                                                                <a href="index4.html" class="d-inline-block primary-link mst-15 heading-weight">04 Minimal clothing</a>
                                                            </div>
                                                            <div class="col-xl-2">
                                                                <div class="banner-hover">
                                                                    <a href="index5.html" class="d-block banner-img br-hidden">
                                                                        <img src="assets/image/menu/menu-banner5.jpg" class="w-100 img-fluid" alt="menu-banner5">
                                                                    </a>
                                                                </div>
                                                                <a href="index5.html" class="d-inline-block primary-link mst-15 heading-weight">05 Lifestyle & Support</a>
                                                            </div>
                                                            <div class="col-xl-2">
                                                                <div class="banner-hover">
                                                                    <a href="index6.html" class="d-block banner-img br-hidden">
                                                                        <img src="assets/image/menu/menu-banner6.jpg" class="w-100 img-fluid" alt="menu-banner6">
                                                                    </a>
                                                                </div>
                                                                <a href="index5.html" class="d-inline-block primary-link mst-15 heading-weight">06 Visual fashion</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="menu-li">
                                                <a href="collection.html" class="menu-link d-flex align-items-center ptb-5 plr-15">
                                                    <span class="menu-title text-uppercase heading-weight">Product</span>
                                                    <span class="icon-16 fw-normal"><i class="ri-arrow-down-s-line d-block lh-1"></i></span>
                                                </a>
                                                <div class="menu-dropdown collapse position-absolute top-auto start-0 end-0 body-bg z-2 DropDownSlide box-shadow">
                                                    <div class="container ptb-25">
                                                        <div class="row">
                                                            <div class="col-3">
                                                                <div class="shop-title">
                                                                    <span class="d-block ptb-5 heading-weight"><a href="collection.html" class="d-inline-block primary-link">01 Classic card style</a></span>
                                                                    <span class="d-block ptb-5 heading-weight"><a href="collection2.html" class="d-inline-block primary-link">02 Modern card style</a></span>
                                                                    <span class="d-block ptb-5 heading-weight"><a href="collection3.html" class="d-inline-block primary-link">03 Elegant card style</a></span>
                                                                    <span class="d-block ptb-5 heading-weight"><a href="collection4.html" class="d-inline-block primary-link">04 Minimal card style</a></span>
                                                                    <span class="d-block ptb-5 heading-weight"><a href="collection5.html" class="d-inline-block primary-link">05 Lifestyle card style</a></span>
                                                                    <span class="d-block ptb-5 heading-weight"><a href="collection6.html" class="d-inline-block primary-link">06 Visual card style</a></span>
                                                                    <span class="d-block ptb-5 heading-weight"><a href="collections.html" class="d-inline-block primary-link">Collections</a></span>
                                                                    <span class="d-block ptb-5 heading-weight"><a href="collection-category.html" class="d-inline-block primary-link">Collection category</a></span>
                                                                    <span class="d-block ptb-5 heading-weight"><a href="collection-without.html" class="d-inline-block primary-link">Collection full</a></span>
                                                                    <span class="d-block ptb-5 heading-weight"><a href="collection.html" class="d-inline-block primary-link">Collection left</a></span>
                                                                    <span class="d-block ptb-5 heading-weight"><a href="collection-right.html" class="d-inline-block primary-link">Collection right</a></span>
                                                                    <span class="d-block ptb-5 heading-weight"><a href="collection-list-without.html" class="d-inline-block primary-link">Collection-list full</a></span>
                                                                    <span class="d-block ptb-5 heading-weight"><a href="collection-list.html" class="d-inline-block primary-link">Collection-list left</a></span>
                                                                    <span class="d-block ptb-5 heading-weight"><a href="collection-list-right.html" class="d-inline-block primary-link">Collection-list right</a></span>
                                                                    <span class="d-block ptb-5 heading-weight"><a href="search-empty.html" class="d-inline-block primary-link">Search empty</a></span>
                                                                    <span class="d-block ptb-5 heading-weight"><a href="search-product.html" class="d-inline-block primary-link">Search product</a></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="d-block heading-color ptb-5 heading-weight">Product layout</div>
                                                                <div class="mst-11">
                                                                    <span class="d-block ptb-5"><a href="product.html" class="d-inline-block body-primary-color">01 Bottom thumbnail details</a></span>
                                                                    <span class="d-block ptb-5"><a href="product2.html" class="d-inline-block body-primary-color">02 Left thumbnail accordion</a></span>
                                                                    <span class="d-block ptb-5"><a href="product3.html" class="d-inline-block body-primary-color">03 Right thumbnail simple layout</a></span>
                                                                    <span class="d-block ptb-5"><a href="product4.html" class="d-inline-block body-primary-color">04 Single grid thumbnail details</a></span>
                                                                    <span class="d-block ptb-5"><a href="product5.html" class="d-inline-block body-primary-color">05 Two grid thumbnail accordion</a></span>
                                                                    <span class="d-block ptb-5"><a href="product6.html" class="d-inline-block body-primary-color">06 Solo thumbnail tab details</a></span>
                                                                    <span class="d-block ptb-5"><a href="product7.html" class="d-inline-block body-primary-color">07 Creative template</a></span>
                                                                    <span class="d-block ptb-5"><a href="product8.html" class="d-inline-block body-primary-color">08 Classic full layout</a></span>
                                                                    <span class="d-block ptb-5"><a href="product9.html" class="d-inline-block body-primary-color">09 Modern full layout</a></span>
                                                                    <span class="d-block ptb-5"><a href="product-comparison.html" class="d-inline-block body-primary-color">Product comparision</a></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="d-block heading-color ptb-5 heading-weight">Product features</div>
                                                                <div class="mst-11">
                                                                    <span class="d-block ptb-5"><a href="product.html" class="d-inline-block body-primary-color">Special promotions offers</a></span>
                                                                    <span class="d-block ptb-5"><a href="product.html" class="d-inline-block body-primary-color">Size guide</a></span>
                                                                    <span class="d-block ptb-5"><a href="product9.html" class="d-inline-block body-primary-color">Back in stock</a></span>
                                                                    <span class="d-block ptb-5"><a href="product.html" class="d-inline-block body-primary-color">Quick buy now button</a></span>
                                                                    <span class="d-block ptb-5"><a href="product.html" class="d-inline-block body-primary-color">Product wishlist</a></span>
                                                                    <span class="d-block ptb-5"><a href="product.html" class="d-inline-block body-primary-color">Product compare option</a></span>
                                                                    <span class="d-block ptb-5"><a href="product.html" class="d-inline-block body-primary-color">Ask a question</a></span>
                                                                    <span class="d-block ptb-5"><a href="product.html" class="d-inline-block body-primary-color">Top social buzz</a></span>
                                                                    <span class="d-block ptb-5"><a href="product8.html" class="d-inline-block body-primary-color">Pre-order</a></span>
                                                                    <span class="d-block ptb-5"><a href="product.html" class="d-inline-block body-primary-color">Pincode service availability</a></span>
                                                                    <span class="d-block ptb-5"><a href="product.html" class="d-inline-block body-primary-color">Frequently bought together</a></span>
                                                                    <span class="d-block ptb-5"><a href="product.html" class="d-inline-block body-primary-color">Pickup availability option</a></span>
                                                                    <span class="d-block ptb-5"><a href="product.html" class="d-inline-block body-primary-color">Product warranty info</a></span>
                                                                    <span class="d-block ptb-5"><a href="product.html" class="d-inline-block body-primary-color">Delivery options details</a></span>
                                                                    <span class="d-block ptb-5"><a href="product.html" class="d-inline-block body-primary-color">Trusted payment badge</a></span>
                                                                    <span class="d-block ptb-5"><a href="product.html" class="d-inline-block body-primary-color">Recommended product</a></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="d-block heading-color ptb-5 heading-weight">Product details</div>
                                                                <div class="mst-11">
                                                                    <span class="d-block ptb-5"><a href="product.html" class="d-inline-block body-primary-color">Currently views count</a></span>
                                                                    <span class="d-block ptb-5"><a href="product.html" class="d-inline-block body-primary-color">Deal count down timer</a></span>
                                                                    <span class="d-block ptb-5"><a href="product.html" class="d-inline-block body-primary-color">Stock count down</a></span>
                                                                    <span class="d-block ptb-5"><a href="product.html" class="d-inline-block body-primary-color">Items sold count</a></span>
                                                                    <span class="d-block ptb-5"><a href="product.html" class="d-inline-block body-primary-color">Product short description</a></span>
                                                                    <span class="d-block ptb-5"><a href="product.html" class="d-inline-block body-primary-color">Color swatch option</a></span>
                                                                    <span class="d-block ptb-5"><a href="product2.html" class="d-inline-block body-primary-color">Image swatch option</a></span>
                                                                    <span class="d-block ptb-5"><a href="product3.html" class="d-inline-block body-primary-color">Dropdown select option</a></span>
                                                                    <span class="d-block ptb-5"><a href="product.html" class="d-inline-block body-primary-color">Product sku code</a></span>
                                                                    <span class="d-block ptb-5"><a href="product.html" class="d-inline-block body-primary-color">Product flat inline description</a></span>
                                                                    <span class="d-block ptb-5"><a href="product2.html" class="d-inline-block body-primary-color">Accordian description</a></span>
                                                                    <span class="d-block ptb-5"><a href="product3.html" class="d-inline-block body-primary-color">Product detailed inline description</a></span>
                                                                    <span class="d-block ptb-5"><a href="product6.html" class="d-inline-block body-primary-color">Tab description</a></span>
                                                                    <span class="d-block ptb-5"><a href="product7.html" class="d-inline-block body-primary-color">Vertical-tab description</a></span>
                                                                    <span class="d-block ptb-5"><a href="product.html" class="d-inline-block body-primary-color">Product video</a></span>
                                                                    <span class="d-block ptb-5"><a href="product.html" class="d-inline-block body-primary-color">Product review</a></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="menu-li">
                                                <a href="collection.html" class="menu-link d-flex align-items-center ptb-5 plr-15">
                                                    <span class="menu-title text-uppercase heading-weight">Shop</span>
                                                    <span class="icon-16 fw-normal"><i class="ri-arrow-down-s-line d-block lh-1"></i></span>
                                                </a>
                                                <div class="menu-dropdown menu-mega collapse position-absolute top-auto start-0 end-0 body-bg z-2 DropDownSlide box-shadow">
                                                    <div class="container ptb-25">
                                                        <div class="menu-overview">
                                                            <div class="heading-color ptb-5 heading-weight">Account</div>
                                                            <span class="d-block ptb-5"><a href="{{ route('signin') }}" class="d-inline-block body-primary-color">Login</a></span>
                                                            <span class="d-block ptb-5"><a href="forgot-password.html" class="d-inline-block body-primary-color">Forgot password</a></span>
                                                            <span class="d-block ptb-5"><a href="register.html" class="d-inline-block body-primary-color">Register</a></span>
                                                            <div class="heading-color ptb-5 heading-weight">Other</div>
                                                            <span class="d-block ptb-5"><a href="404.html" class="d-inline-block body-primary-color">404</a></span>
                                                            <span class="d-block ptb-5"><a href="cart-empty.html" class="d-inline-block body-primary-color">Cart empty</a></span>
                                                            <span class="d-block ptb-5"><a href="cart-page.html" class="d-inline-block body-primary-color">Cart</a></span>
                                                            <span class="d-block ptb-5"><a href="checkout.html" class="d-inline-block body-primary-color">Checkout</a></span>
                                                            <span class="d-block ptb-5"><a href="coming-soon.html" class="d-inline-block body-primary-color">Comingsoon</a></span>
                                                            <span class="d-block ptb-5"><a href="invoice.html" class="d-inline-block body-primary-color">Invoice</a></span>
                                                            <div class="heading-color ptb-5 heading-weight">Order</div>
                                                            <span class="d-block ptb-5"><a href="order-complete.html" class="d-inline-block body-primary-color">Order complete</a></span>
                                                            <span class="d-block ptb-5"><a href="order.html" class="d-inline-block body-primary-color">Order</a></span>
                                                            <span class="d-block ptb-5"><a href="order-info.html" class="d-inline-block body-primary-color">Order info</a></span>
                                                            <span class="d-block ptb-5"><a href="order-info-default.html" class="d-inline-block body-primary-color">Order default</a></span>
                                                            <span class="d-block ptb-5"><a href="order-info-unfulfilled.html" class="d-inline-block body-primary-color">Order unfulfilled</a></span>
                                                            <span class="d-block ptb-5"><a href="order-info-fulfilled.html" class="d-inline-block body-primary-color">Order fulfilled</a></span>
                                                            <span class="d-block ptb-5"><a href="order-info-inprogress.html" class="d-inline-block body-primary-color">Order inprogress</a></span>
                                                            <span class="d-block ptb-5"><a href="order-info-intransit.html" class="d-inline-block body-primary-color">Order intransit</a></span>
                                                            <span class="d-block ptb-5"><a href="order-info-indelivery.html" class="d-inline-block body-primary-color">Order indelivery</a></span>
                                                            <span class="d-block ptb-5"><a href="order-info-delivered.html" class="d-inline-block body-primary-color">Order delivered</a></span>
                                                            <span class="d-block ptb-5"><a href="order-info-pickup.html" class="d-inline-block body-primary-color">Order pickup</a></span>
                                                            <span class="d-block ptb-5"><a href="order-info-cancel.html" class="d-inline-block body-primary-color">Order cancel</a></span>
                                                            <div class="heading-color ptb-5 heading-weight">Profile</div>
                                                            <span class="d-block ptb-5"><a href="profile.html" class="d-inline-block body-primary-color">Profile</a></span>
                                                            <span class="d-block ptb-5"><a href="profile-address.html" class="d-inline-block body-primary-color">Profile address</a></span>
                                                            <span class="d-block ptb-5"><a href="profile-notification.html" class="d-inline-block body-primary-color">Profile notification</a></span>
                                                            <span class="d-block ptb-5"><a href="profile-order.html" class="d-inline-block body-primary-color">Profile order</a></span>
                                                            <span class="d-block ptb-5"><a href="profile-order-empty.html" class="d-inline-block body-primary-color">Profile order empty</a></span>
                                                            <span class="d-block ptb-5"><a href="profile-ticket.html" class="d-inline-block body-primary-color">Profile ticket</a></span>
                                                            <span class="d-block ptb-5"><a href="profile-ticket-empty.html" class="d-inline-block body-primary-color">Profile ticket empty</a></span>
                                                            <span class="d-block ptb-5"><a href="profile-wishlist.html" class="d-inline-block body-primary-color">Profile wishlist</a></span>
                                                            <span class="d-block ptb-5"><a href="profile-wishlist-empty.html" class="d-inline-block body-primary-color">Profile wishlist empty</a></span>
                                                            <div class="heading-color ptb-5 heading-weight">Ticket</div>
                                                            <span class="d-block ptb-5"><a href="ticket.html" class="d-inline-block body-primary-color">Ticket</a></span>
                                                            <span class="d-block ptb-5"><a href="ticket-create.html" class="d-inline-block body-primary-color">Ticket create</a></span>
                                                            <span class="d-block ptb-5"><a href="ticket-edit.html" class="d-inline-block body-primary-color">Ticket edit</a></span>
                                                            <span class="d-block ptb-5"><a href="ticket-info.html" class="d-inline-block body-primary-color">Ticket info</a></span>
                                                            <div class="heading-color ptb-5 heading-weight">Policies</div>
                                                            <span class="d-block ptb-5"><a href="cancellation.html" class="d-inline-block body-primary-color">Cancellation</a></span>
                                                            <span class="d-block ptb-5"><a href="cookie.html" class="d-inline-block body-primary-color">Cookie</a></span>
                                                            <span class="d-block ptb-5"><a href="legal.html" class="d-inline-block body-primary-color">Legal</a></span>
                                                            <span class="d-block ptb-5"><a href="payment-policy.html" class="d-inline-block body-primary-color">Payment policy</a></span>
                                                            <span class="d-block ptb-5"><a href="privacy-policy.html" class="d-inline-block body-primary-color">Privacy policy</a></span>
                                                            <span class="d-block ptb-5"><a href="return-policy.html" class="d-inline-block body-primary-color">Return policy</a></span>
                                                            <span class="d-block ptb-5"><a href="shipping-policy.html" class="d-inline-block body-primary-color">Shipping policy</a></span>
                                                            <span class="d-block ptb-5"><a href="terms-condition.html" class="d-inline-block body-primary-color">Terms & condition</a></span>
                                                            <div class="heading-color ptb-5 heading-weight">Features</div>
                                                            <span class="d-block ptb-5"><a href="button.html" class="d-inline-block body-primary-color">Button</a></span>
                                                            <span class="d-block ptb-5"><a href="cart-drawer-empty.html" class="d-inline-block body-primary-color">Cart drawer empty</a></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="menu-li">
                                                <a href="blog.html" class="menu-link d-flex align-items-center ptb-5 plr-15">
                                                    <span class="menu-title text-uppercase heading-weight">Blog</span>
                                                    <span class="icon-16 fw-normal"><i class="ri-arrow-down-s-line d-block lh-1"></i></span>
                                                </a>
                                                <div class="menu-dropdown menu-sub collapse position-absolute top-auto body-bg z-2 DropDownSlide box-shadow">
                                                    <ul class="menudrop-ul ptb-25">
                                                        <li class="menudrop-li">
                                                            <div class="ptb-5 plr-30"><a href="blog-without.html" class="d-inline-block body-primary-color">Blog</a></div>
                                                        </li>
                                                        <li class="menudrop-li">
                                                            <div class="ptb-5 plr-30"><a href="blog.html" class="d-inline-block body-primary-color">Blog left</a></div>
                                                        </li>
                                                        <li class="menudrop-li">
                                                            <div class="ptb-5 plr-30"><a href="blog-right.html" class="d-inline-block body-primary-color">Blog right</a></div>
                                                        </li>
                                                        <li class="menudrop-li">
                                                            <div class="ptb-5 plr-30"><a href="article-without.html" class="d-inline-block body-primary-color">Article</a></div>
                                                        </li>
                                                        <li class="menudrop-li">
                                                            <div class="ptb-5 plr-30"><a href="article.html" class="d-inline-block body-primary-color">Article left</a></div>
                                                        </li>
                                                        <li class="menudrop-li">
                                                            <div class="ptb-5 plr-30"><a href="article-right.html" class="d-inline-block body-primary-color">Article right</a></div>
                                                        </li>
                                                        <li class="menudrop-li">
                                                            <div class="ptb-5 plr-30"><a href="search-blog.html" class="d-inline-block body-primary-color">Search blog</a></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menu-li">
                                                <a href="javascript:void(0)" class="menu-link d-flex align-items-center ptb-5 plr-15">
                                                    <span class="menu-title text-uppercase heading-weight">Page</span>
                                                    <span class="icon-16 fw-normal"><i class="ri-arrow-down-s-line d-block lh-1"></i></span>
                                                </a>
                                                <div class="menu-dropdown menu-sub collapse position-absolute top-auto body-bg z-2 DropDownSlide box-shadow">
                                                    <ul class="menudrop-ul ptb-25">
                                                        <li class="menudrop-li position-relative">
                                                            <div class="menu-sublink ptb-5 plr-30">
                                                                <a href="about-us.html" class="d-flex flex-wrap align-items-center">
                                                                    <span class="menusub-title width-calc-16">About us</span>
                                                                    <span class="width-16 icon-16 fw-normal"><i class="ri-arrow-right-s-line d-block lh-1"></i></span>
                                                                </a>
                                                            </div>
                                                            <div class="menusub-dropdown collapse position-absolute w-100 body-bg DropDownSlide box-shadow">
                                                                <ul class="menusub-ul ptb-25">
                                                                    <li class="menusub-li">
                                                                        <span class="d-block ptb-5 plr-30"><a href="about-us.html" class="d-inline-block body-primary-color">01 Modern aboutus</a></span>
                                                                    </li>
                                                                    <li class="menusub-li">
                                                                        <span class="d-block ptb-5 plr-30"><a href="about-us2.html" class="d-inline-block body-primary-color">02 Creative aboutus</a></span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="menudrop-li position-relative">
                                                            <div class="menu-sublink ptb-5 plr-30">
                                                                <a href="contact-us.html" class="d-flex flex-wrap align-items-center">
                                                                    <span class="menusub-title width-calc-16">Contact us</span>
                                                                    <span class="width-16 icon-16 fw-normal"><i class="ri-arrow-right-s-line d-block lh-1"></i></span>
                                                                </a>
                                                            </div>
                                                            <div class="menusub-dropdown collapse position-absolute w-100 body-bg DropDownSlide box-shadow">
                                                                <ul class="menusub-ul ptb-25">
                                                                    <li class="menusub-li">
                                                                        <span class="d-block ptb-5 plr-30"><a href="contact-us.html" class="d-inline-block body-primary-color">01 Creative contactus</a></span>
                                                                    </li>
                                                                    <li class="menusub-li">
                                                                        <span class="d-block ptb-5 plr-30"><a href="contact-us2.html" class="d-inline-block body-primary-color">02 Standard contactus</a></span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="menudrop-li position-relative">
                                                            <div class="menu-sublink ptb-5 plr-30"><a href="faqs.html" class="d-block">Faqs</a></div>
                                                        </li>
                                                        <li class="menudrop-li position-relative">
                                                            <div class="menu-sublink ptb-5 plr-30"><a href="sitemap.html" class="d-block">Sitemap</a></div>
                                                        </li>
                                                        <li class="menudrop-li position-relative">
                                                            <div class="menu-sublink ptb-5 plr-30"><a href="store.html" class="d-block">Store</a></div>
                                                        </li>
                                                        <li class="menudrop-li position-relative">
                                                            <div class="menu-sublink ptb-5 plr-30"><a href="track-order.html" class="d-block">Track order</a></div>
                                                        </li>
                                                        <li class="menudrop-li position-relative">
                                                            <div class="menu-sublink ptb-5 plr-30">
                                                                <a href="wishlist.html" class="d-flex flex-wrap align-items-center">
                                                                    <span class="menusub-title width-calc-16">Wishlist</span>
                                                                    <span class="width-16 icon-16 fw-normal"><i class="ri-arrow-right-s-line d-block lh-1"></i></span>
                                                                </a>
                                                            </div>
                                                            <div class="menusub-dropdown collapse position-absolute w-100 body-bg DropDownSlide box-shadow">
                                                                <ul class="menusub-ul ptb-25">
                                                                    <li class="menusub-li">
                                                                        <span class="d-block ptb-5 plr-30"><a href="wishlist.html" class="d-inline-block body-primary-color">Wishlist</a></span>
                                                                    </li>
                                                                    <li class="menusub-li">
                                                                        <span class="d-block ptb-5 plr-30"><a href="wishlist-empty.html" class="d-inline-block body-primary-color">Wishlist empty</a></span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- header-menu end -->
                            <!-- header-icon start -->
                            <div class="col-6 col-xl-4 col-xxl-5 header-element header-icon">
                                <div class="header-icon-block d-flex justify-content-end">
                                    <!-- header-search start -->
                                    <div class="header-search w-100 d-none d-xxl-block per-15">
                                        <div class="header-theme-search w-100">
                                            <form method="get" action="javascript:void(0)" class="search-form w-100">
                                                <div class="search-bar position-relative">
                                                    <div class="form-search d-flex">
                                                        <input type="search" name="search-input" class="w-100 search-input" value="" placeholder="Search product..." required>
                                                        <button type="submit" onclick="window.location.href='search-product.html'" class="d-block tertiary-btn plr-15 text-uppercase text-nowrap heading-weight" disabled>Search</button>
                                                    </div>
                                                    <div class="d-none search-results position-absolute top-auto start-0 end-0 body-bg z-2 border-full border-radius box-shadow">
                                                        <div class="search-for ptb-10 plr-15 beb">Search for <span class="search-text">a</span></div>
                                                        <ul class="search-ul">
                                                            <li class="search-li ptb-5 plr-15 bst">
                                                                <a href="product.html" class="body-primary-color d-flex flex-wrap align-items-center">
                                                                    <span class="width-48"><img src="assets/image/search/search-product1.jpg" class="w-100 img-fluid border-radius" alt="search-product1"></span>
                                                                    <span class="width-calc-48 psl-15 text-truncate">Pleated skater skirt</span>
                                                                </a>
                                                            </li>
                                                            <li class="search-li ptb-5 plr-15 bst">
                                                                <a href="product.html" class="body-primary-color d-flex flex-wrap align-items-center">
                                                                    <span class="width-48"><img src="assets/image/search/search-product2.jpg" class="w-100 img-fluid border-radius" alt="search-product2"></span>
                                                                    <span class="width-calc-48 psl-15 text-truncate">Tailored blazer jacket</span>
                                                                </a>
                                                            </li>
                                                            <li class="search-li ptb-5 plr-15 bst">
                                                                <a href="product.html" class="body-primary-color d-flex flex-wrap align-items-center">
                                                                    <span class="width-48"><img src="assets/image/search/search-product3.jpg" class="w-100 img-fluid border-radius" alt="search-product3"></span>
                                                                    <span class="width-calc-48 psl-15 text-truncate">Girls floral ruffle top</span>
                                                                </a>
                                                            </li>
                                                            <li class="search-li ptb-5 plr-15 bst">
                                                                <a href="product.html" class="body-primary-color d-flex flex-wrap align-items-center">
                                                                    <span class="width-48"><img src="assets/image/search/search-product4.jpg" class="w-100 img-fluid border-radius" alt="search-product4"></span>
                                                                    <span class="width-calc-48 psl-15 text-truncate">Classic cotton t-shirt</span>
                                                                </a>
                                                            </li>
                                                            <li class="search-li ptb-5 plr-15 bst">
                                                                <a href="product.html" class="body-primary-color d-flex flex-wrap align-items-center">
                                                                    <span class="width-48"><img src="assets/image/search/search-product5.jpg" class="w-100 img-fluid border-radius" alt="search-product5"></span>
                                                                    <span class="width-calc-48 psl-15 text-truncate">Slim fit linen shirt</span>
                                                                </a>
                                                            </li>
                                                            <li class="search-li ptb-5 plr-15 bst">
                                                                <a href="product.html" class="body-primary-color d-flex flex-wrap align-items-center">
                                                                    <span class="width-48"><img src="assets/image/search/search-product6.jpg" class="w-100 img-fluid border-radius" alt="search-product6"></span>
                                                                    <span class="width-calc-48 psl-15 text-truncate">Flowy midi dress</span>
                                                                </a>
                                                            </li>
                                                            <li class="search-li ptb-5 plr-15 bst">
                                                                <a href="product.html" class="body-primary-color d-flex flex-wrap align-items-center">
                                                                    <span class="width-48"><img src="assets/image/search/search-product7.jpg" class="w-100 img-fluid border-radius" alt="search-product7"></span>
                                                                    <span class="width-calc-48 psl-15 text-truncate">Distressed skinny jeans</span>
                                                                </a>
                                                            </li>
                                                            <li class="search-li ptb-5 plr-15 bst">
                                                                <a href="product.html" class="body-primary-color d-flex flex-wrap align-items-center">
                                                                    <span class="width-48"><img src="assets/image/search/search-product8.jpg" class="w-100 img-fluid border-radius" alt="search-product8"></span>
                                                                    <span class="width-calc-48 psl-15 text-truncate">Hooded puffer jacket</span>
                                                                </a>
                                                            </li>
                                                            <li class="search-li ptb-5 plr-15 bst">
                                                                <a href="product.html" class="body-primary-color d-flex flex-wrap align-items-center">
                                                                    <span class="width-48"><img src="assets/image/search/search-product9.jpg" class="w-100 img-fluid border-radius" alt="search-product9"></span>
                                                                    <span class="width-calc-48 psl-15 text-truncate">Chunky sole sneakers</span>
                                                                </a>
                                                            </li>
                                                            <li class="search-li ptb-5 plr-15 bst">
                                                                <a href="product.html" class="body-primary-color d-flex flex-wrap align-items-center">
                                                                    <span class="width-48"><img src="assets/image/search/search-product10.jpg" class="w-100 img-fluid border-radius" alt="search-product10"></span>
                                                                    <span class="width-calc-48 psl-15 text-truncate">Quilted crossbody bag</span>
                                                                </a>
                                                            </li>
                                                            <li class="search-li ptb-5 plr-15 bst">
                                                                <a href="product.html" class="body-primary-color d-flex flex-wrap align-items-center">
                                                                    <span class="width-48"><img src="assets/image/search/search-product11.jpg" class="w-100 img-fluid border-radius" alt="search-product11"></span>
                                                                    <span class="width-calc-48 psl-15 text-truncate">Stretch active leggings</span>
                                                                </a>
                                                            </li>
                                                            <li class="search-li ptb-5 plr-15 bst">
                                                                <a href="product.html" class="body-primary-color d-flex flex-wrap align-items-center">
                                                                    <span class="width-48"><img src="assets/image/search/search-product12.jpg" class="w-100 img-fluid border-radius" alt="search-product12"></span>
                                                                    <span class="width-calc-48 psl-15 text-truncate">Relaxed fit joggers</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="search-more ptb-10 plr-15 bst"><a href="search-product.html" class="body-secondary-color text-decoration-underline">See all results (12)</a></div>
                                                        <div class="search-fail ptb-10 plr-15">Search not found</div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- header-search end -->
                                    <ul class="ul-mt15 flex-nowrap align-items-center header-icon-element">
                                        <li class="header-icon-wrap toggler-wrap d-xl-none">
                                            <div class="header-icon-wrapper">
                                                <a href="javascript:void(0)" class="d-block header-icon-toggler toggler-btn" aria-label="Menu toggler button">
                                                    <span class="d-block header-block-icon primary-link font-16 font-xl-20"><i class="ri-menu-line"></i></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="header-icon-wrap search-wrap d-xxl-none">
                                            <div class="header-icon-wrapper">
                                                <a href="#searchmodal" class="d-block header-icon-search" data-bs-toggle="modal" aria-label="Search modal">
                                                    <span class="d-block header-block-icon primary-link font-16 font-xl-20"><i class="ri-search-line"></i></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="header-icon-wrap user-wrap d-md-block d-none">
                                            <div class="header-icon-wrapper">
                                                <a href="login.html" class="d-block header-icon-user" aria-label="Login user">
                                                    <span class="d-block header-block-icon primary-link font-16 font-xl-20"><i class="ri-user-line"></i></span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="header-icon-wrap wishlist-wrap d-md-block d-none">
                                            <div class="header-icon-wrapper">
                                                <a href="wishlist.html" class="d-block header-icon-wishlist">
                                                    <span class="primary-link ul-mt5 flex-nowrap align-items-center">
                                                        <span class="d-block">
                                                            <span class="d-block header-block-icon-wrap position-relative per-8">
                                                                <span class="d-block header-block-icon font-16 font-xl-20"><i class="ri-heart-line"></i></span>
                                                                <span class="header-block-counter wishlist-counter extra-color font-10 position-absolute end-0 d-flex align-items-center justify-content-center primary-bg rounded-circle">4</span>
                                                            </span>
                                                        </span>
                                                        <span class="d-none d-xl-block header-text-content text-uppercase text-nowrap heading-weight">Wishlist</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="header-icon-wrap cart-wrap d-md-block d-none">
                                            <div class="header-icon-wrapper">
                                                <a href="javascript:void(0)" class="d-block header-icon-cart js-cart-drawer">
                                                    <span class="primary-link ul-mt5 flex-nowrap align-items-center">
                                                        <span class="d-block">
                                                            <span class="d-block header-block-icon-wrap position-relative per-8">
                                                                <span class="d-block header-block-icon font-16 font-xl-20"><i class="ri-shopping-bag-3-line"></i></span>
                                                                <span class="header-block-counter cart-counter extra-color font-10 position-absolute end-0 d-flex align-items-center justify-content-center primary-bg rounded-circle">4</span>
                                                            </span>
                                                        </span>
                                                        <span class="d-none d-xl-block header-text-content text-uppercase text-nowrap heading-weight">Cart</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- header-icon end -->
                        </div>
                    </div>
                </div>
                <!-- header-top-first end -->
            </div>
            <!-- header-top end -->
        </header>
        <!-- header end -->
        <!-- breadcrumb-area start -->
        <div class="breadcrumb-area ptb-100 bg-img text-center overflow-hidden" data-bgimg="{{ asset('category_banners/1763552302_Banner-1.webp') }}">
            <div class="container">
                <span class="d-block extra-color"><a href="/" class="extra-color">Home</a> / Men-Collection</span>
                <h2 class="extra-color font-24 font-xl-32 mst-5 mst-xl-9">Men-Collection</h2>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <!-- main start -->
        <main id="main">
            <!-- shop-content start -->
            <section class="shop-content section-ptb">
                <div class="container">
                    <div class="row align-items-xl-start">
                        <!-- shop-sidebar start -->
                        {{-- <div class="col-12 col-xl-3 p-xl-sticky top-0">
                            <div class="shop-sidebar-wrap shop-filter-sidebar" data-animate="animate__fadeIn">
                                <button type="button" class="shop-sidebar-close body-secondary-color icon-16 position-absolute" aria-label="Close"><i class="ri-close-large-line d-block lh-1"></i></button>
                                <form class="shop-form" action="javascript:void(0)" id="shopForm"> --}}
                                    {{-- <!-- shop-categories start -->
                                    <div class="shop-sidebar shop-categories">
                                        <h6 class="font-18">Categories</h6>
                                        <div class="shop-cat-post mst-21">
                                            <div class="shop-cat ul-mtm-15">
                                                <a href="collection-category.html" class="body-primary-color d-flex align-items-center justify-content-between">
                                                    <span>Collection category</span>
                                                    <span>12</span>
                                                </a>
                                                <a href="collection-without.html" class="body-primary-color d-flex align-items-center justify-content-between">
                                                    <span>Collection without</span>
                                                    <span>12</span>
                                                </a>
                                                <a href="javascript:void(0)" class="primary-color d-flex align-items-center justify-content-between">
                                                    <span>Collection left</span>
                                                    <span>12</span>
                                                </a>
                                                <a href="collection-right.html" class="body-primary-color d-flex align-items-center justify-content-between">
                                                    <span>Collection right</span>
                                                    <span>12</span>
                                                </a>
                                                <a href="collection-list-without.html" class="body-primary-color d-flex align-items-center justify-content-between">
                                                    <span>Collection-list without</span>
                                                    <span>12</span>
                                                </a>
                                                <a href="collection-list.html" class="body-primary-color d-flex align-items-center justify-content-between">
                                                    <span>Collection-list left</span>
                                                    <span>12</span>
                                                </a>
                                                <a href="collection-list-right.html" class="body-primary-color d-flex align-items-center justify-content-between">
                                                    <span>Collection-list right</span>
                                                    <span>12</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!-- shop-categories end -->
                                    <!-- shop-availability start -->
                                    {{-- <div class="shop-sidebar availability">
                                        <h6 class="font-18">Availability</h6>
                                        <div class="shop-header d-flex justify-content-between mst-21">
                                            <span class="shop-selected">2 selected</span>
                                            <button type="submit" class="shop-reset body-secondary-color text-decoration-underline">Reset</button>
                                        </div>
                                        <div class="shop-element mst-22">
                                            <ul class="shop-filters ul-mtm-15">
                                                <li>
                                                    <label class="cust-checkbox-label d-flex align-items-center justify-content-between">
                                                        <input type="checkbox" id="shop-in-stock" name="shop-in-stock" class="cust-checkbox" value="in-stock" checked>
                                                        <span class="d-block cust-check"></span>
                                                        <span class="shop-name me-auto">In stock</span>
                                                        <span class="shop-count">12</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label d-flex align-items-center justify-content-between disabled">
                                                        <input type="checkbox" id="shop-out-of-stock" name="shop-out-of-stock" class="cust-checkbox" value="out-of-stock" checked>
                                                        <span class="d-block cust-check"></span>
                                                        <span class="shop-name me-auto">Out of stock</span>
                                                        <span class="shop-count">1</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- shop-sidebar availability end -->
                                    <!-- shop-sidebar price start -->
                                    <div class="shop-sidebar price">
                                        <h6 class="font-18">Price</h6>
                                        <div class="shop-header d-flex justify-content-between mst-21">
                                            <span class="shop-selected">The highest price is $89.00</span>
                                            <button type="submit" class="shop-reset body-secondary-color text-decoration-underline">Reset</button>
                                        </div>
                                        <div class="shop-element mst-26">
                                            <div class="price-input-range">
                                                <div class="price-range">
                                                    <div class="price-container">
                                                        <div class="price-slider"></div>
                                                    </div>
                                                    <div class="range-input position-relative">
                                                        <input type="range" class="min-range position-absolute w-100 p-0 bg-transparent border-0" min="0" max="89" value="0" step="1">
                                                        <input type="range" class="max-range position-absolute w-100 p-0 bg-transparent border-0" min="0" max="89" value="89" step="1">
                                                    </div>
                                                </div>
                                                <div class="price-input d-flex align-items-center mst-30">
                                                    <div class="price-field position-relative w-100">
                                                        <span class="price-input-title position-absolute top-0 start-0">From</span>
                                                        <span class="price-input-prefix position-absolute top-50 translate-middle-y">$</span>
                                                        <input type="number" id="min-price" name="min-price" class="min-input w-100 h-100 text-end" min="0" max="89" value="0">
                                                    </div>
                                                    <div class="price-input-separator mlr-15">-</div>
                                                    <div class="price-field position-relative w-100">
                                                        <span class="price-input-title position-absolute top-0 start-0">To</span>
                                                        <span class="price-input-prefix position-absolute top-50 translate-middle-y">$</span>
                                                        <input type="number" id="max-price" name="max-price" class="max-input w-100 h-100 text-end" min="0" max="89" value="89">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- shop-sidebar price end -->
                                    <!-- shop-sidebar color start -->
                                    <div class="shop-sidebar color">
                                        <h6 class="font-18">Color</h6>
                                        <div class="shop-header d-flex justify-content-between mst-21">
                                            <span class="shop-selected">1 selected</span>
                                            <button type="submit" class="shop-reset body-secondary-color text-decoration-underline">Reset</button>
                                        </div>
                                        <div class="shop-element mst-26">
                                            <ul class="shop-filters ul-mt10">
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-aliceblue" name="shop-aliceblue" class="cust-checkbox" value="aliceblue" checked>
                                                        <span class="d-block cust-check aliceblue"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label disabled">
                                                        <input type="checkbox" id="shop-antiquewhite" name="shop-antiquewhite" class="cust-checkbox" value="antiquewhite">
                                                        <span class="d-block cust-check antiquewhite"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-azure" name="shop-azure" class="cust-checkbox" value="azure">
                                                        <span class="d-block cust-check azure"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-beige" name="shop-beige" class="cust-checkbox" value="beige">
                                                        <span class="d-block cust-check beige"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-bisque" name="shop-bisque" class="cust-checkbox" value="bisque">
                                                        <span class="d-block cust-check bisque"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-black" name="shop-black" class="cust-checkbox" value="black">
                                                        <span class="d-block cust-check black"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-cadetblue" name="shop-cadetblue" class="cust-checkbox" value="cadetblue">
                                                        <span class="d-block cust-check cadetblue"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-chocolate" name="shop-chocolate" class="cust-checkbox" value="chocolate">
                                                        <span class="d-block cust-check chocolate"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-coral" name="shop-coral" class="cust-checkbox" value="coral">
                                                        <span class="d-block cust-check coral"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-darkcyan" name="shop-darkcyan" class="cust-checkbox" value="darkcyan">
                                                        <span class="d-block cust-check darkcyan"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-darkgoldenrod" name="shop-darkgoldenrod" class="cust-checkbox" value="darkgoldenrod">
                                                        <span class="d-block cust-check darkgoldenrod"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-darkgray" name="shop-darkgray" class="cust-checkbox" value="darkgray">
                                                        <span class="d-block cust-check darkgray"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-floralwhite" name="shop-floralwhite" class="cust-checkbox" value="floralwhite">
                                                        <span class="d-block cust-check floralwhite"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-gainsboro" name="shop-gainsboro" class="cust-checkbox" value="gainsboro">
                                                        <span class="d-block cust-check gainsboro"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-ghostwhite" name="shop-ghostwhite" class="cust-checkbox" value="ghostwhite">
                                                        <span class="d-block cust-check ghostwhite"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-gold" name="shop-gold" class="cust-checkbox" value="gold">
                                                        <span class="d-block cust-check gold"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-honeydew" name="shop-honeydew" class="cust-checkbox" value="honeydew">
                                                        <span class="d-block cust-check honeydew"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-hotpink" name="shop-hotpink" class="cust-checkbox" value="hotpink">
                                                        <span class="d-block cust-check hotpink"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-ivory" name="shop-ivory" class="cust-checkbox" value="ivory">
                                                        <span class="d-block cust-check ivory"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-khaki" name="shop-khaki" class="cust-checkbox" value="khaki">
                                                        <span class="d-block cust-check khaki"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-lavender" name="shop-lavender" class="cust-checkbox" value="lavender">
                                                        <span class="d-block cust-check lavender"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-lavenderblush" name="shop-lavenderblush" class="cust-checkbox" value="lavenderblush">
                                                        <span class="d-block cust-check lavenderblush"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-lemonchiffon" name="shop-lemonchiffon" class="cust-checkbox" value="lemonchiffon">
                                                        <span class="d-block cust-check lemonchiffon"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-lightblue" name="shop-lightblue" class="cust-checkbox" value="lightblue">
                                                        <span class="d-block cust-check lightblue"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-mintcream" name="shop-mintcream" class="cust-checkbox" value="mintcream">
                                                        <span class="d-block cust-check mintcream"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-navajowhite" name="shop-navajowhite" class="cust-checkbox" value="navajowhite">
                                                        <span class="d-block cust-check navajowhite"></span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-oldlace" name="shop-oldlace" class="cust-checkbox" value="oldlace">
                                                        <span class="d-block cust-check oldlace"></span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- shop-sidebar color end -->
                                    <!-- shop-sidebar size start -->
                                    <div class="shop-sidebar size">
                                        <h6 class="font-18">Size</h6>
                                        <div class="shop-header d-flex justify-content-between mst-21">
                                            <span class="shop-selected">1 selected</span>
                                            <button type="submit" class="shop-reset body-secondary-color text-decoration-underline">Reset</button>
                                        </div>
                                        <div class="shop-element mst-26">
                                            <ul class="shop-filters ul-mt5">
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-xs" name="shop-xs" class="cust-checkbox" value="xs" checked>
                                                        <span class="d-flex align-items-center justify-content-center cust-check">XS</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label disabled">
                                                        <input type="checkbox" id="shop-s" name="shop-s" class="cust-checkbox" value="s">
                                                        <span class="d-flex align-items-center justify-content-center cust-check">S</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-m" name="shop-m" class="cust-checkbox" value="m">
                                                        <span class="d-flex align-items-center justify-content-center cust-check">M</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-l" name="shop-l" class="cust-checkbox" value="l">
                                                        <span class="d-flex align-items-center justify-content-center cust-check">L</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-xl" name="shop-xl" class="cust-checkbox" value="xl">
                                                        <span class="d-flex align-items-center justify-content-center cust-check">XL</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-xxl" name="shop-xxl" class="cust-checkbox" value="xxl">
                                                        <span class="d-flex align-items-center justify-content-center cust-check">XXL</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-28" name="shop-28" class="cust-checkbox" value="28">
                                                        <span class="d-flex align-items-center justify-content-center cust-check">28</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-30" name="shop-30" class="cust-checkbox" value="30">
                                                        <span class="d-flex align-items-center justify-content-center cust-check">30</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-32" name="shop-32" class="cust-checkbox" value="32">
                                                        <span class="d-flex align-items-center justify-content-center cust-check">32</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-34" name="shop-34" class="cust-checkbox" value="34">
                                                        <span class="d-flex align-items-center justify-content-center cust-check">34</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-38" name="shop-38" class="cust-checkbox" value="38">
                                                        <span class="d-flex align-items-center justify-content-center cust-check">38</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-40" name="shop-40" class="cust-checkbox" value="40">
                                                        <span class="d-flex align-items-center justify-content-center cust-check">40</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-42" name="shop-42" class="cust-checkbox" value="42">
                                                        <span class="d-flex align-items-center justify-content-center cust-check">42</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-44" name="shop-44" class="cust-checkbox" value="44">
                                                        <span class="d-flex align-items-center justify-content-center cust-check">44</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-2y" name="shop-2y" class="cust-checkbox" value="2y">
                                                        <span class="d-flex align-items-center justify-content-center cust-check">2Y</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-4y" name="shop-4y" class="cust-checkbox" value="4y">
                                                        <span class="d-flex align-items-center justify-content-center cust-check">4Y</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-6y" name="shop-6y" class="cust-checkbox" value="6y">
                                                        <span class="d-flex align-items-center justify-content-center cust-check">6Y</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-8y" name="shop-8y" class="cust-checkbox" value="8y">
                                                        <span class="d-flex align-items-center justify-content-center cust-check">8Y</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div> --}}
                                    <!-- shop-sidebar size end -->
                                    {{-- <!-- shop-sidebar material start -->
                                    <div class="shop-sidebar material">
                                        <h6 class="font-18">Material</h6>
                                        <div class="shop-header d-flex justify-content-between mst-21">
                                            <span class="shop-selected">1 selected</span>
                                            <button type="submit" class="shop-reset body-secondary-color text-decoration-underline">Reset</button>
                                        </div>
                                        <div class="shop-element mst-26">
                                            <ul class="shop-filters ul-mt5">
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-polyester" name="shop-polyester" class="cust-checkbox" value="polyester" checked>
                                                        <span class="d-block cust-check">Polyester</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-wool-blend" name="shop-wool-blend" class="cust-checkbox" value="wool-blend">
                                                        <span class="d-block cust-check">Wool blend</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-cotton" name="shop-cotton" class="cust-checkbox" value="cotton">
                                                        <span class="d-block cust-check">Cotton</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-linen-blend" name="shop-linen-blend" class="cust-checkbox" value="linen-blend">
                                                        <span class="d-block cust-check">Linen blend</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-viscose" name="shop-viscose" class="cust-checkbox" value="viscose">
                                                        <span class="d-block cust-check">Outdoor</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-stretch-denim" name="shop-stretch-denim" class="cust-checkbox" value="stretch-denim">
                                                        <span class="d-block cust-check">Stretch denim</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-kids-polyester-faux" name="shop-kids-polyester-faux" class="cust-checkbox" value="kids-polyester-faux">
                                                        <span class="d-block cust-check">Polyester faux</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-leather-mesh" name="shop-leather-mesh" class="cust-checkbox" value="leather-mesh">
                                                        <span class="d-block cust-check">Leather mesh</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-faux-leather" name="shop-faux-leather" class="cust-checkbox" value="faux-leather">
                                                        <span class="d-block cust-check">Faux leather</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-nylon-spandex" name="shop-nylon-spandex" class="cust-checkbox" value="nylon-spandex">
                                                        <span class="d-block cust-check">Nylon spandex</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-cotton-fleece" name="shop-cotton-fleece" class="cust-checkbox" value="cotton-fleece">
                                                        <span class="d-block cust-check">Cotton fleece</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- shop-sidebar material end -->
                                    <!-- shop-sidebar tag start -->
                                    <div class="shop-sidebar tag">
                                        <h6 class="font-18">Tag</h6>
                                        <div class="shop-header d-flex justify-content-between mst-21">
                                            <span class="shop-selected">1 selected</span>
                                            <button type="submit" class="shop-reset body-secondary-color text-decoration-underline">Reset</button>
                                        </div>
                                        <div class="shop-element mst-26">
                                            <ul class="shop-filters ul-mt5">
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-chic" name="shop-chic" class="cust-checkbox" value="chic" checked>
                                                        <span class="d-block cust-check">Chic</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-business" name="shop-business" class="cust-checkbox" value="business">
                                                        <span class="d-block cust-check">Business</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-playful" name="shop-playful" class="cust-checkbox" value="playful">
                                                        <span class="d-block cust-check">Playful</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-casual" name="shop-casual" class="cust-checkbox" value="casual">
                                                        <span class="d-block cust-check">Casual</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-formal" name="shop-formal" class="cust-checkbox" value="formal">
                                                        <span class="d-block cust-check">Formal</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-sleeveless" name="shop-sleeveless" class="cust-checkbox" value="sleeveless">
                                                        <span class="d-block cust-check">Sleeveless</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-rugged" name="shop-rugged" class="cust-checkbox" value="rugged">
                                                        <span class="d-block cust-check">Rugged</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-winter" name="shop-winter" class="cust-checkbox" value="winter">
                                                        <span class="d-block cust-check">Winter</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-sporty" name="shop-sporty" class="cust-checkbox" value="sporty">
                                                        <span class="d-block cust-check">Sporty</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-compact" name="shop-compact" class="cust-checkbox" value="compact">
                                                        <span class="d-block cust-check">Compact</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-gymwear" name="shop-gymwear" class="cust-checkbox" value="gymwear">
                                                        <span class="d-block cust-check">Gymwear</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label class="cust-checkbox-label">
                                                        <input type="checkbox" id="shop-cozy" name="shop-cozy" class="cust-checkbox" value="cozy">
                                                        <span class="d-block cust-check">Cozy</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- shop-sidebar tag end -->
                                </form>
                            </div>
                            <!-- collection-product-list start -->
                            <div class="collection-product-list d-none d-xl-block pst-30 mst-30 bst">
                                <div class="side-collection-category">
                                    <div class="d-flex flex-wrap align-items-center">
                                        <h6 class="width-calc-32 font-18" data-animate="animate__fadeIn">Special products</h6>
                                        <div class="swiper-buttons width-32 lh-1" data-animate="animate__fadeIn">
                                            <div class="swiper-buttons-wrap d-flex">
                                                <button type="button" class="swiper-prev swiper-prev-special-product primary-link" aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                                                <button type="button" class="swiper-next swiper-next-special-product primary-link" aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="side-collection-wrap mst-25">
                                        <div class="collection-slider swiper" id="special-product-slider">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide" data-animate="animate__fadeIn">
                                                    <div class="single-product-list">
                                                        <div class="single-product-wrap d-flex flex-wrap">
                                                            <div class="width-120 product-image">
                                                                <a href="product.html" class="pro-img"><img src="assets/image/product/p-1.jpg" class="w-100 img-fluid" alt="p-1"></a>
                                                            </div>
                                                            <div class="width-calc-120 product-content">
                                                                <div class="pro-content">
                                                                    <div class="product-title">
                                                                        <span class="d-block"><a href="product.html" class="d-block w-100 primary-link text-truncate heading-weight">Pleated skater skirt</a></span>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <div class="price-box heading-weight">
                                                                            <span class="new-price primary-color">$79.00</span>
                                                                            <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$89.00</span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" data-animate="animate__fadeIn">
                                                    <div class="single-product-list">
                                                        <div class="single-product-wrap d-flex flex-wrap">
                                                            <div class="width-120 product-image">
                                                                <a href="product.html" class="pro-img"><img src="assets/image/product/p-3.jpg" class="w-100 img-fluid" alt="p-3"></a>
                                                            </div>
                                                            <div class="width-calc-120 product-content">
                                                                <div class="pro-content">
                                                                    <div class="product-title">
                                                                        <span class="d-block"><a href="product.html" class="d-block w-100 primary-link text-truncate heading-weight">Tailored blazer jacket</a></span>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <div class="price-box heading-weight">
                                                                            <span class="new-price primary-color">$49.00</span>
                                                                            <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$59.00</span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" data-animate="animate__fadeIn">
                                                    <div class="single-product-list">
                                                        <div class="single-product-wrap d-flex flex-wrap">
                                                            <div class="width-120 product-image">
                                                                <a href="product.html" class="pro-img"><img src="assets/image/product/p-5.jpg" class="w-100 img-fluid" alt="p-5"></a>
                                                            </div>
                                                            <div class="width-calc-120 product-content">
                                                                <div class="pro-content">
                                                                    <div class="product-title">
                                                                        <span class="d-block"><a href="product.html" class="d-block w-100 primary-link text-truncate heading-weight">Girls floral ruffle top</a></span>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <div class="price-box heading-weight">
                                                                            <span class="new-price primary-color">$69.00</span>
                                                                            <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$79.00</span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" data-animate="animate__fadeIn">
                                                    <div class="single-product-list">
                                                        <div class="single-product-wrap d-flex flex-wrap">
                                                            <div class="width-120 product-image">
                                                                <a href="product.html" class="pro-img"><img src="assets/image/product/p-7.jpg" class="w-100 img-fluid" alt="p-7"></a>
                                                            </div>
                                                            <div class="width-calc-120 product-content">
                                                                <div class="pro-content">
                                                                    <div class="product-title">
                                                                        <span class="d-block"><a href="product.html" class="d-block w-100 primary-link text-truncate heading-weight">Classic cotton t-shirt</a></span>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <div class="price-box heading-weight">
                                                                            <span class="new-price primary-color">$49.00</span>
                                                                            <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$54.00</span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" data-animate="animate__fadeIn">
                                                    <div class="single-product-list">
                                                        <div class="single-product-wrap d-flex flex-wrap">
                                                            <div class="width-120 product-image">
                                                                <a href="product.html" class="pro-img"><img src="assets/image/product/p-9.jpg" class="w-100 img-fluid" alt="p-9"></a>
                                                            </div>
                                                            <div class="width-calc-120 product-content">
                                                                <div class="pro-content">
                                                                    <div class="product-title">
                                                                        <span class="d-block"><a href="product.html" class="d-block w-100 primary-link text-truncate heading-weight">Slim fit linen shirt</a></span>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <div class="price-box heading-weight">
                                                                            <span class="new-price primary-color">$89.00</span>
                                                                            <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$99.00</span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" data-animate="animate__fadeIn">
                                                    <div class="single-product-list">
                                                        <div class="single-product-wrap d-flex flex-wrap">
                                                            <div class="width-120 product-image">
                                                                <a href="product.html" class="pro-img"><img src="assets/image/product/p-11.jpg" class="w-100 img-fluid" alt="p-11"></a>
                                                            </div>
                                                            <div class="width-calc-120 product-content">
                                                                <div class="pro-content">
                                                                    <div class="product-title">
                                                                        <span class="d-block"><a href="product.html" class="d-block w-100 primary-link text-truncate heading-weight">Flowy midi dress</a></span>
                                                                    </div>
                                                                    <div class="product-price">
                                                                        <div class="price-box heading-weight">
                                                                            <span class="new-price primary-color">$79.00</span>
                                                                            <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$84.00</span></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- collection-product-list end -->
                            <!-- shop-sidebar banner start -->
                            <div class="sidebar-banner d-none d-xl-block banner-hover mst-30" data-animate="animate__fadeIn">
                                <a href="collection.html" class="d-block banner-img position-relative br-hidden">
                                    <span class="banner-icon secondary-color icon-16 position-absolute top-50 start-50 width-48 height-48 d-flex align-items-center justify-content-center extra-bg z-1 rounded-circle"><i class="ri-arrow-right-line d-block lh-1"></i></span>
                                    <img src="assets/image/collection/side-image.jpg" class="w-100 img-fluid" alt="side-image">
                                </a>
                            </div>
                            <!-- shop-sidebar banner end -->
                        </div> --}}
                        <!-- shop-sidebar end -->
                        <div class="col-12 p-xl-sticky top-0">
                            <!-- collection-info start -->
                            <div class="row row-mtm" data-animate="animate__fadeIn">
                                <div class="col-12">
                                    <div class="row row-mtm15">
                                        <!-- collection-title start -->
                                        <div class="collection-title">
                                            <h6 class="font-18">Collection left (12)</h6>
                                        </div>
                                        <!-- collection-title end -->
                                        <!-- collection-img start -->
                                        {{-- <div class="collection-img">
                                            <img src="{{ asset('category_banners/1763550549_banner of shirt.png') }}" class="w-100 img-fluid border-radius" alt="collection-banner">
                                        </div> --}}
                                        <!-- collection-img end -->
                                        <!-- shop-top-bar start -->
                                        <div class="shop-top-bar">
                                            <div class="row row-mtm15 align-items-md-center">
                                                <div class="col-12 col-sm-6 col-md-7 col-lg-8">
                                                    <div class="shop-filter-view ul-mt15 align-items-center">
                                                        <!-- shop-filter start -->
                                                        <div class="shop-filter">
                                                            <button type="button" class="shop-filter-btn secondary-color d-flex align-items-center"><i class="ri-filter-line icon-16 mer-5"></i>Filter</button>
                                                        </div>
                                                        <!-- shop-filter end -->
                                                        <!-- shop-view-mode start -->
                                                        <div class="shop-view-mode">
                                                            <div class="ul-mt10">
                                                                <button type="button" class="shop-view-btn primary-color icon-16 opacity-100 disabled" data-view="grid" aria-label="Grid view"><i class="ri-layout-grid-line"></i></button>
                                                                <button type="button" class="shop-view-btn body-color icon-16 opacity-100" data-view="list" aria-label="List view"><i class="ri-list-unordered"></i></button>
                                                            </div>
                                                        </div>
                                                        <!-- shop-view-mode end -->
                                                        <!-- shop-show-product start -->
                                                        <div class="shop-show-product">Showing 12 of 12 products</div>
                                                        <!-- shop-show-product end -->
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 col-md-5 col-lg-4">
                                                    <!-- shop-short start -->
                                                    <div class="shop-short d-flex flex-wrap position-relative">
                                                        <label for="sortby" class="width-64 secondary-color heading-weight">Sort by:</label>
                                                        <select id="sortby" name="sortby" class="d-xl-none width-calc-64 h-auto ptb-0 bg-transparent border-0">
                                                            <option value="manual">Featured</option>
                                                            <option value="best-selling">Best selling</option>
                                                            <option value="title-ascending" selected>Alphabetically, A-Z</option>
                                                            <option value="title-descending">Alphabetically, Z-A</option>
                                                            <option value="price-ascending">Price, low to high</option>
                                                            <option value="price-descending">Price, high to low</option>
                                                            <option value="created-descending">Date, new to old</option>
                                                            <option value="created-ascending">Date, old to new</option>
                                                        </select>
                                                        <a href="javascript:void(0)" class="short-title width-calc-64 body-color d-none d-xl-flex align-items-xl-start justify-content-xl-between">
                                                            <span class="sort-title">Alphabetically, A-Z</span>
                                                            <span class="sort-icon heading-weight"><i class="ri-arrow-down-s-line d-block lh-1"></i></span>
                                                        </a>
                                                        <ul class="collapse position-absolute top-100 start-0 end-0 ptb-5 body-bg z-1 DropDownSlide br-hidden box-shadow" id="select-wrap">
                                                            <li><a href="javascript:void(0)" data-value="manual" class="d-block body-primary-color ptb-5 plr-15">Featured</a></li>
                                                            <li><a href="javascript:void(0)" data-value="best-selling" class="d-block body-primary-color ptb-5 plr-15">Best selling</a></li>
                                                            <li class="selected"><a href="javascript:void(0)" data-value="title-ascending" class="d-block secondary-color ptb-5 plr-15 extra-bg">Alphabetically, A-Z</a></li>
                                                            <li><a href="javascript:void(0)" data-value="title-descending" class="d-block body-primary-color ptb-5 plr-15">Alphabetically, Z-A</a></li>
                                                            <li><a href="javascript:void(0)" data-value="price-ascending" class="d-block body-primary-color ptb-5 plr-15">Price, low to high</a></li>
                                                            <li><a href="javascript:void(0)" data-value="price-descending" class="d-block body-primary-color ptb-5 plr-15">Price, high to low</a></li>
                                                            <li><a href="javascript:void(0)" data-value="created-descending" class="d-block body-primary-color ptb-5 plr-15">Date, new to old</a></li>
                                                            <li><a href="javascript:void(0)" data-value="created-ascending" class="d-block body-primary-color ptb-5 plr-15">Date, old to new</a></li>
                                                        </ul>
                                                    </div>
                                                    <!-- shop-short end -->
                                                </div>
                                            </div>
                                        </div>
                                        <!-- shop-top-bar end -->
                                        <!-- shop-border start -->
                                        {{-- <div class="shop-border">
                                            <div class="bst"></div>
                                        </div> --}}
                                        <!-- shop-border end -->
                                        <!-- shop-filter-list start -->
                                        {{-- <div class="shop-filter-list d-flex align-items-start justify-content-between">
                                            <ul class="shop-filter-ul ul-mt5 align-items-center">
                                                <li class="shop-filter-li"><a href="javascript:void(0)" class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-5 plr-15 border-radius">Out of stock<i class="ri-close-large-line d-block font-10 lh-1"></i></a></li>
                                                <li class="shop-filter-li"><a href="javascript:void(0)" class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-5 plr-15 border-radius">In stock<i class="ri-close-large-line d-block font-10 lh-1"></i></a></li>
                                                <li class="shop-filter-li"><a href="javascript:void(0)" class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-5 plr-15 border-radius">Aliceblue<i class="ri-close-large-line d-block font-10 lh-1"></i></a></li>
                                                <li class="shop-filter-li"><a href="javascript:void(0)" class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-5 plr-15 border-radius">XS<i class="ri-close-large-line d-block font-10 lh-1"></i></a></li>
                                                <li class="shop-filter-li"><a href="javascript:void(0)" class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-5 plr-15 border-radius">Polyester<i class="ri-close-large-line d-block font-10 lh-1"></i></a></li>
                                                <li class="shop-filter-li"><a href="javascript:void(0)" class="shop-filter-active text-white font-14 d-flex align-items-center secondary-bg ptb-5 plr-15 border-radius">Chic<i class="ri-close-large-line d-block font-10 lh-1"></i></a></li>
                                                <li class="shop-filter-li"><button type="submit" class="shop-filter-active text-decoration-underline">Clear all</button></li>
                                            </ul>
                                            <div class="shop-filter-loader"><svg aria-hidden="true" focusable="false" role="presentation" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle fill="none" stroke="var(--heading-font-color)" stroke-width="3" cx="33" cy="33" r="30"></circle></svg></div>
                                        </div> --}}
                                        <!-- shop-filter-list end -->
                                    </div>
                                </div>
                                <div class="col-12 ">
                                    <div class="shop-product-wrap data-grid">
                                        <!-- shop-grid start -->
                                        <div class="row row-mtm">
                                            <div class="col-6 col-md-4 shop-col" data-animate="animate__fadeIn">
                                                <div class="single-product">
                                                    <div class="row single-product-wrap">
                                                        <div class="product-image-col">
                                                            {{-- <div class="product-image">
                                                                <a href="/" class="pro-img">
                                                                    <img src="assets/image/product/p-1.jpg" class="w-100 img-fluid img1" alt="p-1">
                                                                    <img src="assets/image/product/p-2.jpg" class="w-100 img-fluid img2" alt="p-2">
                                                                </a>
                                                                <div class="product-action-wrap">
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">wishlist</span>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                            </span>
                                                                            <span class="tooltip-text">add to cart</span>
                                                                        </a>
                                                                        <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                            <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">quickview</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div> --}}


{{-- <div class="container py-5">
    <h2 class="mb-4">Our Products</h2>
    <div class="row">
        @if($products->count() > 0)
            @foreach($products as $p)
                <div class="col-md-3 mb-4">
 <div class="product-banner">
    <span class="banner-title">Product Banner</span>

  @if($p->category && $p->category->c_banner_img)
        <img src="{{ asset($p->category->c_banner_img) }}" height="100px" width="200px">
    @endif


</div>                      <div class="card-body">
                            <h5 class="card-title">{{ $p->p_name }}</h5>
                            <p class="card-text">
                                Category: {{ $p->category->c_name ?? 'No Category' }}<br>
                                Price: ₹{{ $p->p_price }}
                                @if($p->p_old_price)
                                    <del class="text-muted">₹{{ $p->p_old_price }}</del>
                                @endif
                            </p>
                            @if($p->p_stock > 0)
                                <span class="badge bg-success">In Stock: {{ $p->p_stock }}</span>
                            @else
                                <span class="badge bg-danger">Out of Stock</span>
                            @endif
                        </div>
                        <div class="card-footer text-center">
                            <a href="/" class="btn btn-primary btn-sm">home</a>
                            <button class="btn btn-success btn-sm">Add to Cart</button>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>No products found.</p>
        @endif
    </div>
</div>  --}}




                                                        </div>
                                                        <div class="product-content">
                                                            <div class="pro-content">
                                                                <div class="product-title">
                                                                    <span class="d-block meb-7">Polyester / Chic</span>
                                                                    <span class="d-block heading-weight"><a href="product.html" class="primary-link">Pleated skater skirt</a></span>
                                                                </div>
                                                                <div class="product-price">
                                                                    <div class="price-box heading-weight">
                                                                        <span class="new-price primary-color">$79.00</span>
                                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$89.00</span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-ratting">
                                                                    <span class="review-ratting">
                                                                        <span class="review-star">
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-fill"></i>
                                                                            <i class="ri-star-line"></i>
                                                                        </span>
                                                                        <span class="review-average">4.0<span class="review-caption">2 reviews</span></span>
                                                                    </span>
                                                                </div>
                                                                <div class="product-description">
                                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                                </div>
                                                                <div class="product-action-wrap">
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">wishlist</span>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                            </span>
                                                                            <span class="tooltip-text">add to cart</span>
                                                                        </a>
                                                                        <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                            <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">quickview</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4 shop-col" data-animate="animate__fadeIn">
                                                <div class="single-product">
                                                    <div class="row single-product-wrap">
                                                        <div class="product-image-col">
                                                            <div class="product-image">
                                                                <a href="product.html" class="pro-img">
                                                                    <img src="assets/image/product/p-3.jpg" class="w-100 img-fluid img1" alt="p-3">
                                                                    <img src="assets/image/product/p-4.jpg" class="w-100 img-fluid img2" alt="p-4">
                                                                    <span class="product-label product-label-new product-label-left">New</span>
                                                                </a>
                                                                <div class="product-action-wrap">
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">wishlist</span>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                            </span>
                                                                            <span class="tooltip-text">add to cart</span>
                                                                        </a>
                                                                        <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                            <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">quickview</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="pro-content">
                                                                <div class="product-title">
                                                                    <span class="d-block meb-7">Wool blend / Business</span>
                                                                    <span class="d-block heading-weight"><a href="product.html" class="primary-link">Tailored blazer jacket</a></span>
                                                                </div>
                                                                <div class="product-price">
                                                                    <div class="price-box heading-weight">
                                                                        <span class="new-price primary-color">$49.00</span>
                                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$59.00</span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-ratting">
                                                                    <span class="review-ratting">
                                                                        <span class="review-star">
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                        </span>
                                                                        <span class="review-average">No reviews<span class="review-caption">0 reviews</span></span>
                                                                    </span>
                                                                </div>
                                                                <div class="product-description">
                                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                                </div>
                                                                <div class="product-action-wrap">
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">wishlist</span>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                            </span>
                                                                            <span class="tooltip-text">add to cart</span>
                                                                        </a>
                                                                        <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                            <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">quickview</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4 shop-col" data-animate="animate__fadeIn">
                                                <div class="single-product">
                                                    <div class="row single-product-wrap">
                                                        <div class="product-image-col">
                                                            <div class="product-image">
                                                                <a href="product.html" class="pro-img">
                                                                    <img src="assets/image/product/p-5.jpg" class="w-100 img-fluid img1" alt="p-5">
                                                                    <img src="assets/image/product/p-6.jpg" class="w-100 img-fluid img2" alt="p-6">
                                                                </a>
                                                                <div class="product-action-wrap">
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">wishlist</span>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                            </span>
                                                                            <span class="tooltip-text">add to cart</span>
                                                                        </a>
                                                                        <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                            <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">quickview</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="pro-content">
                                                                <div class="product-title">
                                                                    <span class="d-block meb-7">Cotton / Playful</span>
                                                                    <span class="d-block heading-weight"><a href="product.html" class="primary-link">Girls floral ruffle top</a></span>
                                                                </div>
                                                                <div class="product-price">
                                                                    <div class="price-box heading-weight">
                                                                        <span class="new-price primary-color">$69.00</span>
                                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$79.00</span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-ratting">
                                                                    <span class="review-ratting">
                                                                        <span class="review-star">
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                        </span>
                                                                        <span class="review-average">No reviews<span class="review-caption">0 reviews</span></span>
                                                                    </span>
                                                                </div>
                                                                <div class="product-description">
                                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                                </div>
                                                                <div class="product-action-wrap">
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">wishlist</span>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                            </span>
                                                                            <span class="tooltip-text">add to cart</span>
                                                                        </a>
                                                                        <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                            <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">quickview</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4 shop-col" data-animate="animate__fadeIn">
                                                <div class="single-product">
                                                    <div class="row single-product-wrap">
                                                        <div class="product-image-col">
                                                            <div class="product-image">
                                                                <a href="product.html" class="pro-img">
                                                                    <img src="assets/image/product/p-7.jpg" class="w-100 img-fluid img1" alt="p-7">
                                                                    <img src="assets/image/product/p-8.jpg" class="w-100 img-fluid img2" alt="p-8">
                                                                    <span class="product-label product-label-discount product-label-left">5% Off</span>
                                                                </a>
                                                                <div class="product-action-wrap">
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">wishlist</span>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                            </span>
                                                                            <span class="tooltip-text">add to cart</span>
                                                                        </a>
                                                                        <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                            <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">quickview</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="pro-content">
                                                                <div class="product-title">
                                                                    <span class="d-block meb-7">Cotton / Casual</span>
                                                                    <span class="d-block heading-weight"><a href="product.html" class="primary-link">Classic cotton t-shirt</a></span>
                                                                </div>
                                                                <div class="product-price">
                                                                    <div class="price-box heading-weight">
                                                                        <span class="new-price primary-color">$49.00</span>
                                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$54.00</span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-ratting">
                                                                    <span class="review-ratting">
                                                                        <span class="review-star">
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                        </span>
                                                                        <span class="review-average">No reviews<span class="review-caption">0 reviews</span></span>
                                                                    </span>
                                                                </div>
                                                                <div class="product-description">
                                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                                </div>
                                                                <div class="product-action-wrap">
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">wishlist</span>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                            </span>
                                                                            <span class="tooltip-text">add to cart</span>
                                                                        </a>
                                                                        <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                            <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">quickview</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4 shop-col" data-animate="animate__fadeIn">
                                                <div class="single-product">
                                                    <div class="row single-product-wrap">
                                                        <div class="product-image-col">
                                                            <div class="product-image">
                                                                <a href="product.html" class="pro-img">
                                                                    <img src="assets/image/product/p-9.jpg" class="w-100 img-fluid img1" alt="p-9">
                                                                    <img src="assets/image/product/p-10.jpg" class="w-100 img-fluid img2" alt="p-10">
                                                                </a>
                                                                <div class="product-action-wrap">
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">wishlist</span>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                            </span>
                                                                            <span class="tooltip-text">add to cart</span>
                                                                        </a>
                                                                        <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                            <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">quickview</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="pro-content">
                                                                <div class="product-title">
                                                                    <span class="d-block meb-7">Linen blend / formal</span>
                                                                    <span class="d-block heading-weight"><a href="product.html" class="primary-link">Slim fit linen shirt</a></span>
                                                                </div>
                                                                <div class="product-price">
                                                                    <div class="price-box heading-weight">
                                                                        <span class="new-price primary-color">$89.00</span>
                                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$99.00</span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-ratting">
                                                                    <span class="review-ratting">
                                                                        <span class="review-star">
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                        </span>
                                                                        <span class="review-average">No reviews<span class="review-caption">0 reviews</span></span>
                                                                    </span>
                                                                </div>
                                                                <div class="product-description">
                                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                                </div>
                                                                <div class="product-action-wrap">
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">wishlist</span>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                            </span>
                                                                            <span class="tooltip-text">add to cart</span>
                                                                        </a>
                                                                        <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                            <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">quickview</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4 shop-col" data-animate="animate__fadeIn">
                                                <div class="single-product">
                                                    <div class="row single-product-wrap">
                                                        <div class="product-image-col">
                                                            <div class="product-image">
                                                                <a href="product.html" class="pro-img">
                                                                    <img src="assets/image/product/p-11.jpg" class="w-100 img-fluid img1" alt="p-11">
                                                                    <img src="assets/image/product/p-12.jpg" class="w-100 img-fluid img2" alt="p-12">
                                                                    <span class="product-label product-label-sale product-label-left">Sale</span>
                                                                </a>
                                                                <div class="product-action-wrap">
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">wishlist</span>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                            </span>
                                                                            <span class="tooltip-text">add to cart</span>
                                                                        </a>
                                                                        <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                            <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">quickview</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="pro-content">
                                                                <div class="product-title">
                                                                    <span class="d-block meb-7">Viscose / Sleeveless</span>
                                                                    <span class="d-block heading-weight"><a href="product.html" class="primary-link">Flowy midi dress</a></span>
                                                                </div>
                                                                <div class="product-price">
                                                                    <div class="price-box heading-weight">
                                                                        <span class="new-price primary-color">$79.00</span>
                                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$84.00</span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-ratting">
                                                                    <span class="review-ratting">
                                                                        <span class="review-star">
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                        </span>
                                                                        <span class="review-average">No reviews<span class="review-caption">0 reviews</span></span>
                                                                    </span>
                                                                </div>
                                                                <div class="product-description">
                                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                                </div>
                                                                <div class="product-action-wrap">
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">wishlist</span>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                            </span>
                                                                            <span class="tooltip-text">add to cart</span>
                                                                        </a>
                                                                        <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                            <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">quickview</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4 shop-col" data-animate="animate__fadeIn">
                                                <div class="single-product">
                                                    <div class="row single-product-wrap">
                                                        <div class="product-image-col">
                                                            <div class="product-image">
                                                                <a href="product.html" class="pro-img">
                                                                    <img src="assets/image/product/p-13.jpg" class="w-100 img-fluid img1" alt="p-13">
                                                                    <img src="assets/image/product/p-14.jpg" class="w-100 img-fluid img2" alt="p-14">
                                                                </a>
                                                                <div class="product-action-wrap">
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">wishlist</span>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                            </span>
                                                                            <span class="tooltip-text">add to cart</span>
                                                                        </a>
                                                                        <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                            <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">quickview</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="pro-content">
                                                                <div class="product-title">
                                                                    <span class="d-block meb-7">Stretch denim / Rugged</span>
                                                                    <span class="d-block heading-weight"><a href="product.html" class="primary-link">Distressed skinny jeans</a></span>
                                                                </div>
                                                                <div class="product-price">
                                                                    <div class="price-box heading-weight">
                                                                        <span class="new-price primary-color">$29.00</span>
                                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$39.00</span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-ratting">
                                                                    <span class="review-ratting">
                                                                        <span class="review-star">
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                        </span>
                                                                        <span class="review-average">No reviews<span class="review-caption">0 reviews</span></span>
                                                                    </span>
                                                                </div>
                                                                <div class="product-description">
                                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                                </div>
                                                                <div class="product-action-wrap">
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">wishlist</span>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                            </span>
                                                                            <span class="tooltip-text">add to cart</span>
                                                                        </a>
                                                                        <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                            <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">quickview</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4 shop-col" data-animate="animate__fadeIn">
                                                <div class="single-product">
                                                    <div class="row single-product-wrap">
                                                        <div class="product-image-col">
                                                            <div class="product-image">
                                                                <a href="product.html" class="pro-img">
                                                                    <img src="assets/image/product/p-15.jpg" class="w-100 img-fluid img1" alt="p-15">
                                                                    <img src="assets/image/product/p-16.jpg" class="w-100 img-fluid img2" alt="p-16">
                                                                </a>
                                                                <div class="product-action-wrap">
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">wishlist</span>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                            </span>
                                                                            <span class="tooltip-text">add to cart</span>
                                                                        </a>
                                                                        <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                            <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">quickview</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="pro-content">
                                                                <div class="product-title">
                                                                    <span class="d-block meb-7">Polyester faux / Winter</span>
                                                                    <span class="d-block heading-weight"><a href="product.html" class="primary-link">Hooded puffer jacket</a></span>
                                                                </div>
                                                                <div class="product-price">
                                                                    <div class="price-box heading-weight">
                                                                        <span class="new-price primary-color">$14.00</span>
                                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$19.00</span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-ratting">
                                                                    <span class="review-ratting">
                                                                        <span class="review-star">
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                        </span>
                                                                        <span class="review-average">No reviews<span class="review-caption">0 reviews</span></span>
                                                                    </span>
                                                                </div>
                                                                <div class="product-description">
                                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                                </div>
                                                                <div class="product-action-wrap">
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">wishlist</span>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                            </span>
                                                                            <span class="tooltip-text">add to cart</span>
                                                                        </a>
                                                                        <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                            <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">quickview</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4 shop-col" data-animate="animate__fadeIn">
                                                <div class="single-product">
                                                    <div class="row single-product-wrap">
                                                        <div class="product-image-col">
                                                            <div class="product-image">
                                                                <a href="product.html" class="pro-img">
                                                                    <img src="assets/image/product/p-17.jpg" class="w-100 img-fluid img1" alt="p-17">
                                                                    <img src="assets/image/product/p-18.jpg" class="w-100 img-fluid img2" alt="p-18">
                                                                </a>
                                                                <div class="product-action-wrap">
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">wishlist</span>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                            </span>
                                                                            <span class="tooltip-text">add to cart</span>
                                                                        </a>
                                                                        <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                            <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">quickview</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="pro-content">
                                                                <div class="product-title">
                                                                    <span class="d-block meb-7">Leather mesh / Sporty</span>
                                                                    <span class="d-block heading-weight"><a href="product.html" class="primary-link">Chunky sole sneakers</a></span>
                                                                </div>
                                                                <div class="product-price">
                                                                    <div class="price-box heading-weight">
                                                                        <span class="new-price primary-color">$64.00</span>
                                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$74.00</span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-ratting">
                                                                    <span class="review-ratting">
                                                                        <span class="review-star">
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                        </span>
                                                                        <span class="review-average">No reviews<span class="review-caption">0 reviews</span></span>
                                                                    </span>
                                                                </div>
                                                                <div class="product-description">
                                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                                </div>
                                                                <div class="product-action-wrap">
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">wishlist</span>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                            </span>
                                                                            <span class="tooltip-text">add to cart</span>
                                                                        </a>
                                                                        <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                            <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">quickview</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4 shop-col" data-animate="animate__fadeIn">
                                                <div class="single-product">
                                                    <div class="row single-product-wrap">
                                                        <div class="product-image-col">
                                                            <div class="product-image">
                                                                <a href="product.html" class="pro-img">
                                                                    <img src="assets/image/product/p-19.jpg" class="w-100 img-fluid img1" alt="p-19">
                                                                    <img src="assets/image/product/p-20.jpg" class="w-100 img-fluid img2" alt="p-20">
                                                                    <span class="product-label product-label-sold product-label-left">Sold</span>
                                                                </a>
                                                                <div class="product-action-wrap">
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">wishlist</span>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="add-to-cart disabled">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                            </span>
                                                                            <span class="tooltip-text">add to cart</span>
                                                                        </a>
                                                                        <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                            <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">quickview</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="pro-content">
                                                                <div class="product-title">
                                                                    <span class="d-block meb-7">Faux leather / Compact</span>
                                                                    <span class="d-block heading-weight"><a href="product.html" class="primary-link">Quilted crossbody bag</a></span>
                                                                </div>
                                                                <div class="product-price">
                                                                    <div class="price-box heading-weight">
                                                                        <span class="new-price primary-color">$34.00</span>
                                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$44.00</span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-ratting">
                                                                    <span class="review-ratting">
                                                                        <span class="review-star">
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                        </span>
                                                                        <span class="review-average">No reviews<span class="review-caption">0 reviews</span></span>
                                                                    </span>
                                                                </div>
                                                                <div class="product-description">
                                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                                </div>
                                                                <div class="product-action-wrap">
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">wishlist</span>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="add-to-cart disabled">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                            </span>
                                                                            <span class="tooltip-text">add to cart</span>
                                                                        </a>
                                                                        <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                            <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">quickview</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4 shop-col" data-animate="animate__fadeIn">
                                                <div class="single-product">
                                                    <div class="row single-product-wrap">
                                                        <div class="product-image-col">
                                                            <div class="product-image">
                                                                <a href="product.html" class="pro-img">
                                                                    <img src="assets/image/product/p-21.jpg" class="w-100 img-fluid img1" alt="p-21">
                                                                    <img src="assets/image/product/p-22.jpg" class="w-100 img-fluid img2" alt="p-22">
                                                                </a>
                                                                <div class="product-action-wrap">
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">wishlist</span>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                            </span>
                                                                            <span class="tooltip-text">add to cart</span>
                                                                        </a>
                                                                        <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                            <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">quickview</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="pro-content">
                                                                <div class="product-title">
                                                                    <span class="d-block meb-7">Nylon spandex / Gymwear</span>
                                                                    <span class="d-block heading-weight"><a href="product.html" class="primary-link">Stretch active leggings</a></span>
                                                                </div>
                                                                <div class="product-price">
                                                                    <div class="price-box heading-weight">
                                                                        <span class="new-price primary-color">$4.00</span>
                                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$9.00</span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-ratting">
                                                                    <span class="review-ratting">
                                                                        <span class="review-star">
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                        </span>
                                                                        <span class="review-average">No reviews<span class="review-caption">0 reviews</span></span>
                                                                    </span>
                                                                </div>
                                                                <div class="product-description">
                                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                                </div>
                                                                <div class="product-action-wrap">
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">wishlist</span>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                            </span>
                                                                            <span class="tooltip-text">add to cart</span>
                                                                        </a>
                                                                        <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                            <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">quickview</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-4 shop-col" data-animate="animate__fadeIn">
                                                <div class="single-product">
                                                    <div class="row single-product-wrap">
                                                        <div class="product-image-col">
                                                            <div class="product-image">
                                                                <a href="product.html" class="pro-img">
                                                                    <img src="assets/image/product/p-23.jpg" class="w-100 img-fluid img1" alt="p-23">
                                                                    <img src="assets/image/product/p-24.jpg" class="w-100 img-fluid img2" alt="p-24">
                                                                </a>
                                                                <div class="product-action-wrap">
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">wishlist</span>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                            </span>
                                                                            <span class="tooltip-text">add to cart</span>
                                                                        </a>
                                                                        <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                            <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">quickview</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="pro-content">
                                                                <div class="product-title">
                                                                    <span class="d-block meb-7">Cotton fleece / Cozy</span>
                                                                    <span class="d-block heading-weight"><a href="product.html" class="primary-link">Relaxed fit joggers</a></span>
                                                                </div>
                                                                <div class="product-price">
                                                                    <div class="price-box heading-weight">
                                                                        <span class="new-price primary-color">$9.00</span>
                                                                        <span class="old-price"><span class="mer-3">~</span><span class="text-decoration-line-through">$14.00</span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="product-ratting">
                                                                    <span class="review-ratting">
                                                                        <span class="review-star">
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                            <i class="ri-star-line"></i>
                                                                        </span>
                                                                        <span class="review-average">No reviews<span class="review-caption">0 reviews</span></span>
                                                                    </span>
                                                                </div>
                                                                <div class="product-description">
                                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                                </div>
                                                                <div class="product-action-wrap">
                                                                    <div class="product-action">
                                                                        <a href="javascript:void(0)" class="add-to-wishlist">
                                                                            <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">wishlist</span>
                                                                        </a>
                                                                        <a href="javascript:void(0)" class="add-to-cart">
                                                                            <span class="product-icon">
                                                                                <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                            </span>
                                                                            <span class="tooltip-text">add to cart</span>
                                                                        </a>
                                                                        <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                            <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                            <span class="tooltip-text">quickview</span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>






                                         <!-- bottom-menu end -->
        <!-- bg-screen start -->
        <div class="bg-screen">
            <div class="bg-back position-fixed top-0 end-0 bottom-0 start-0 bg-black z-index-4 opacity-0 invisible"></div>
            <div class="bg-shop position-fixed top-0 end-0 bottom-0 start-0 bg-black z-index-4 opacity-0 invisible"></div>
        </div>
        <!-- bg-screen end -->
        <!-- plugin js -->
        <script src="assets/js/plugin.js"></script>
        <!-- theme js -->
        <script src="assets/js/theme.js"></script>
    </body>

<!-- Mirrored from spacingtech.com/html/erona/template/collection.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 29 Oct 2025 07:44:04 GMT -->
</html>




