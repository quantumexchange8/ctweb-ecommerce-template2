@extends('Layouts.master')
@section('contents')

<main>
    <!-- slider-area start -->
    <section class="slider-area pos-relative">
        <div class="slider-active">
            <div class="single-slider slide-1-style slide-height d-flex align-items-center" data-background="assets/img/slider/slide1.jpg">
                <div class="shape-title bounce-animate">
                    <h2>UX</h2>
                </div>
                <div class="shape-icon bounce-animate">
                    <img src="assets/img/slider/shape-icon.png" alt="">
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="slide-content">
                                <span data-animation="fadeInRight" data-delay=".2s">Furniture Collection</span>
                                <h1 data-animation="fadeInUp" data-delay=".5s">Synnes Dining
                                Chair Upholstered</h1>
                                <div class="slide-btn">
                                    <a class="btn theme-btn" href="/shop" data-animation="fadeInLeft" data-delay=".7s">shop now</a>
                                    <a class="btn white-btn" href="/shop" data-animation="fadeInRight" data-delay=".9s">category</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="slide-shape1" data-animation="bounceInRight" data-delay=".9s"><img src="assets/img/slider/shape1.png" alt=""></div>
                            <div class="slide-shape2" data-animation="bounceInRight" data-delay="1.2s"><img src="assets/img/slider/shape2.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slide-1-style slide-height d-flex align-items-center" data-background=assets/slider/slide1-1.jpg">
                <div class="shape-title bounce-animate">
                    <h2>UX</h2>
                </div>
                <div class="shape-icon bounce-animate">
                    <img src="assets/img/slider/shape-icon.png" alt="">
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="slide-content">
                                <span data-animation="fadeInRight" data-delay=".2s">Furniture Collection</span>
                                <h1 data-animation="fadeInUp" data-delay=".5s">Synnes Dining
                                Chair Upholstered</h1>
                                <div class="slide-btn">
                                    <a class="btn theme-btn" href="/shop" data-animation="fadeInLeft" data-delay=".7s">shop now</a>
                                    <a class="btn white-btn" href="/shop" data-animation="fadeInRight" data-delay=".9s">category</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="slide-shape1" data-animation="bounceInRight" data-delay=".9s"><img src="assets/img/slider/shape3.png" alt=""></div>
                            <div class="slide-shape2" data-animation="bounceInRight" data-delay="1.1s"><img src="assets/img/slider/shape4.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider-area end -->

    <!-- banner area start -->
    <section class="banner-area pt-30 pl-15 pr-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="banner mb-30">
                        <a href="/shop"><img src="assets/img/banner/banner-1/banner1.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="banner mb-30">
                        <a href="/shop"><img src="assets/img/banner/banner-1/banner2.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="banner mb-30">
                        <a href="/shop"><img src="assets/img/banner/banner-1/banner3.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner area end -->

    <!-- product-area start -->
    <section class="product-area box-90 pt-70 pb-40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 col-lg-12">
                    <div class="area-title mb-50">
                        <h2>Brand New Products</h2>
                        <p>Browse the huge variety of our products</p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-12">
                    <div class="product-tab mb-40">
                        <ul class="nav product-nav  justify-content-xl-end" id="myTab1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                                    aria-selected="true">table lamp</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                                    aria-selected="false">furniture</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                                    aria-selected="false">chair</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab1" data-toggle="tab" href="#contact9" role="tab" aria-controls="contact"
                                    aria-selected="false">Clock</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="product-tab-content">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="product-slider owl-carousel">
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro1.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro2.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shopping Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="new">new</span>
                                                    <span class="sale">sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro2.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="new">30%</span>
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro3.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro6.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="new">new</span>
                                                    <span class="sale">sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro4.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro8.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro5.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro2.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="new">new</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro7.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="sale">60%</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro8.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro1.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro6.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="new">new</span>
                                                    <span class="sale">sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro8.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro6.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro3.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="sale">sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="product-slider owl-carousel">
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro8.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro1.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro6.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="new">new</span>
                                                    <span class="sale">sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro1.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro2.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="new">new</span>
                                                    <span class="sale">sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro2.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="new">30%</span>
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro3.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro6.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="new">new</span>
                                                    <span class="sale">sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro4.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro8.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro5.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro2.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="new">new</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro7.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="sale">60%</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro8.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro6.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro3.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="sale">sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="product-slider owl-carousel">
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro8.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro1.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro6.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="new">new</span>
                                                    <span class="sale">sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro8.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro6.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro3.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="sale">sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro1.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro2.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="new">new</span>
                                                    <span class="sale">sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro2.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="new">30%</span>
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro3.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro6.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="new">new</span>
                                                    <span class="sale">sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro4.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro8.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro5.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro2.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="new">new</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro7.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="sale">60%</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact9" role="tabpanel" aria-labelledby="contact-tab1">
                                <div class="product-slider owl-carousel">
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro3.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro6.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="new">new</span>
                                                    <span class="sale">sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro4.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro8.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro5.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro2.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="new">new</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro7.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="sale">60%</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro1.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro2.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="new">new</span>
                                                    <span class="sale">sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro2.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="new">30%</span>
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro8.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro1.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro6.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="new">new</span>
                                                    <span class="sale">sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro8.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro6.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro3.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="sale">sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
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
    </section>
    <!-- product-area end -->

    <!-- top-seller-area start -->
    <section class="top-seller-area box-90">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 col-lg-8 col-md-7">
                    <div class="area-title mb-50">
                        <h2>Top Sellers</h2>
                        <p>Browse the huge variety of our products</p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-4 col-md-5">
                    <div class="vue-btn text-left text-md-right mb-50">
                        <a href="/shop" class="btn theme-btn">Collection</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-5 col-lg-5">
                    <div class="top-seller mb-50">
                        <img src="assets/img/banner/top-seller/banner1.jpg" alt="">
                        <div class="seller-box text-center">
                            <div class="top-seller-content text-left">
                                <h2><a href="/shop">Minimal Home Decor</a></h2>
                                <div class="pro-price mb-25">
                                    <span>$119.00 USD</span>
                                    <span class="old-price">$230.00 USD</span>
                                </div>
                                <div class="top-seller-btn">
                                    <a href="/shop" class="btn theme-btn">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7">
                    <div class="top-seller text-right mb-50">
                        <img src="assets/img/banner/top-seller/banner2.jpg" alt="">
                        <div class="sellet-2-content">
                            <h2><a href="/shop">Xcross Comoer Furniture</a></h2>
                            <div class="pro-price mb-25">
                                <span>$119.00 USD</span>
                                <span class="old-price">$230.00 USD</span>
                            </div>
                            <div class="top-seller-btn">
                                <a href="/shop" class="btn theme-btn-2 mr-20">view details</a>
                                <a href="#" class="shop-btn"><i class="flaticon-shopping-cart"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- top-seller-area end -->

    <!-- product-area start -->
    <section class="product-area box-90 pt-45 pb-40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 col-lg-12">
                    <div class="area-title mb-50">
                        <h2>Best Sell Products</h2>
                        <p>Browse the huge variety of our products</p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-12">
                    <div class="product-tab mb-40">
                        <ul class="nav product-nav justify-content-xl-end" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab1" data-toggle="tab" href="#home1" role="tab"
                                    aria-controls="home" aria-selected="true">table lamp</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab1" data-toggle="tab" href="#profile1" role="tab"
                                    aria-controls="profile" aria-selected="false">furniture</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab6" data-toggle="tab" href="#contact1" role="tab"
                                    aria-controls="contact" aria-selected="false">chair</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab2" data-toggle="tab" href="#contact2" role="tab"
                                    aria-controls="contact" aria-selected="false">Clock</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="product-tab-content">
                        <div class="tab-content" id="myTabContent1">
                            <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab">
                                <div class="product-slider owl-carousel">
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro9.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="new">new</span>
                                                    <span class="sale">sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro10.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="sale">sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro11.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro6.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="new">30%</span>
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro12.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro8.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro7.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="sale">60%</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="product-slider owl-carousel">
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro2.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="new">30%</span>
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro4.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro8.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro3.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="sale">sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro7.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="sale">60%</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro8.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro1.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="product-slider owl-carousel">
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro2.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="new">30%</span>
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro4.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro8.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro3.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="sale">sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro7.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="sale">60%</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro8.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro1.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact2" role="tabpanel" aria-labelledby="contact-tab1">
                                <div class="product-slider owl-carousel">
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro8.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro1.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro3.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="sale">sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro2.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="new">30%</span>
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro4.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro8.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro7.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro4.jpg" alt="">
                                                </a>
                                                <div class="product-action text-center">
                                                    <a href="#" title="Shoppingb Cart">
                                                        <i class="flaticon-shopping-cart"></i>
                                                    </a>
                                                    <a href="#" title="Quick View">
                                                        <i class="flaticon-eye"></i>
                                                    </a>
                                                    <a href="#" data-toggle="tooltip" data-placement="right" title="Compare">
                                                        <i class="flaticon-compare"></i>
                                                    </a>
                                                </div>
                                                <div class="sale-tag">
                                                    <span class="sale">60%</span>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <div class="pro-cat mb-10">
                                                    <a href="/shop">decor, </a>
                                                    <a href="/shop">furniture</a>
                                                </div>
                                                <h4>
                                                    <a href="/product-details">Minimal Troma Furniture</a>
                                                </h4>
                                                <div class="product-meta">
                                                    <div class="pro-price">
                                                        <span>$119.00 USD</span>
                                                        <span class="old-price">$230.00 USD</span>
                                                    </div>
                                                </div>
                                                <div class="product-wishlist">
                                                    <a href="#"><i class="far fa-heart" title="Wishlist"></i></a>
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
    </section>
    <!-- product-area end -->

    <!-- upcoming-product-area start -->
    <section class="upcoming-product-area pos-relative box-90 pt-120 pb-120" data-background=assets/bg/bg.jpg">
        <div class="upc-shape d-none d-xl-block">
            <div class="bakix-marker map-c1">
                <div class="bakix-map-icon">
                    <i class="flaticon-add"></i>
                </div>
                <div class="bakix-map-address">
                    <p>Lodge Flush Mount</p>
                </div>
            </div>
            <div class="bakix-marker map-c2">
                <div class="bakix-map-icon">
                    <i class="flaticon-add"></i>
                </div>
                <div class="bakix-map-address">
                    <p>Lodge Flush Mount</p>
                </div>
            </div>
            <div class="bakix-marker map-c3">
                <div class="bakix-map-address">
                    <p>Lodge Flush Mount</p>
                </div>
                <div class="bakix-map-icon">
                    <i class="flaticon-add"></i>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6 offset-xl-6">
                    <div class="upcoming-product">
                        <div class="upc-price">$500.00</div>
                        <h1><a href="/product-details">Lodge Flush Mount</a></h1>
                        <ul class="upc-pro-info fix">
                            <li class="d-flex">
                                <i class="flaticon-layers"></i>
                                <div class="upc-info">
                                    <h4>Origin From</h4>
                                    <span>Sweden</span>
                                </div>
                            </li>
                            <li class="d-flex">
                                <i class="flaticon-layers"></i>
                                <div class="upc-info">
                                    <h4>Material</h4>
                                    <span>Aluminum</span>
                                </div>
                            </li>
                            <li class="d-flex">
                                <i class="flaticon-layers"></i>
                                <div class="upc-info">
                                    <h4>Designer</h4>
                                    <span>Basictheme</span>
                                </div>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
                        <div class="upc-btn">
                            <a class="btn theme-btn" href="/shop" data-animation="fadeInLeft" data-delay=".7s">shop now</a>
                            <a class="btn white-btn" href="/shop" data-animation="fadeInRight" data-delay=".9s">Details</a>
                        </div>
                        <div class="event-timer">
                            <div class="mt-40" data-countdown="2019/04/01"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming-product-area end -->

    <!-- latest-blog-area start -->
    <section class="latest-blog-area pt-95 pb-60 box-90">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="area-title text-center mb-50">
                        <h2>News Feeds</h2>
                        <p>Check it out every updates</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="latest-news mb-40">
                        <div class="news__thumb mb-25">
                            <img src="assets/img/blog/latest/lb1.jpg" alt="">
                        </div>
                        <div class="news__caption white-bg">
                            <div class="news-meta mb-15">
                                <span><i class="far fa-calendar-check"></i> Sep 15, 2018 </span>
                                <span><a href="#"><i class="far fa-user"></i> Diboli</a></span>
                                <span><a href="#"><i class="far fa-comments"></i> 23 Comments</a></span>
                            </div>
                            <h2><a href="/blog-details">Inspiration Is Under Construction Business &
                            Fashion 2019. In this situation we do that..</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo..</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="latest-news mb-40">
                        <div class="news__thumb mb-25">
                            <img src="assets/img/blog/latest/lb2.jpg" alt="">
                        </div>
                        <div class="news__caption white-bg">
                            <div class="news-meta mb-15">
                                <span><i class="far fa-calendar-check"></i> Sep 15, 2018 </span>
                                <span><a href="#"><i class="far fa-user"></i> Joly</a></span>
                                <span><a href="#"><i class="far fa-comments"></i> 23 Comments</a></span>
                            </div>
                            <h2><a href="/blog-details">Inspiration Is Under Construction Business &
                            Fashion 2019. In this situation we do that..</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo..</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="latest-news mb-40">
                        <div class="news__thumb mb-25">
                            <img src="assets/img/blog/latest/lb3.jpg" alt="">
                        </div>
                        <div class="news__caption white-bg">
                            <div class="news-meta mb-15">
                                <span><i class="far fa-calendar-check"></i> Sep 15, 2018 </span>
                                <span><a href="#"><i class="far fa-user"></i> Joly</a></span>
                                <span><a href="#"><i class="far fa-comments"></i> 23 Comments</a></span>
                            </div>
                            <h2><a href="/blog-details">Inspiration Is Under Construction Business &
                            Fashion 2019. In this situation we do that..</a></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest-blog-area end -->

    <!-- subscribe-area start -->
    <section class="subscribe-area box-105">
        <div class="subscribe-inner black-bg pt-70 pb-20">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="subscribe d-flex fix">
                            <div class="subscribe-icon">
                                <img src="assets/img/icon/subscribe.png" alt="">
                            </div>
                            <div class="area-title white-color mb-50">
                                <h2>Newsletter</h2>
                                <p>Subsribe here for get every single updates</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <div class="subscribe fix">
                            <div class="subscribe-form mb-50">
                                <form action="#">
                                    <input type="text" placeholder="Enter your email address">
                                    <button class="btn theme-btn" type="submit">subscribe now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe-area end -->
</main>

@endsection