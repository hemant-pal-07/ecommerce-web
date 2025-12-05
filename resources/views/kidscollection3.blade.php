
@extends('layouts.frontend-layout')

@section('title', 'kids asccessories collection')



@section('content')



        <!-- main start -->
        <main id="main">


               <div class="breadcrumb-area ptb-100 text-center overflow-hidden"
     style="background-image: url('{{ asset('category_banners/1764658050_kids asscoriesbanner.webp') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 400px;">
    <div class="container">
        <span class="d-block extra-color">
            <a href="/" class="extra-color">Home</a> / kids-Collection
        </span>
        <h2 class="extra-color font-24 font-xl-32 mst-5 mst-xl-9">kids-Collection</h2>
    </div>
</div>

            <!-- shop-content start -->
            <section class="shop-content section-ptb">



                <div class="container">
                    <div class="row align-items-xl-start">

                        </div>
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
                                </div>
         </section>


                                         <!-- bottom-menu end -->
        <!-- bg-screen start -->
        <div class="bg-screen">
            <div class="bg-back position-fixed top-0 end-0 bottom-0 start-0 bg-black z-index-4 opacity-0 invisible"></div>
            <div class="bg-shop position-fixed top-0 end-0 bottom-0 start-0 bg-black z-index-4 opacity-0 invisible"></div>
        </div>
        <!-- bg-screen end -->
        <!-- plugin js -->

    @endsection







