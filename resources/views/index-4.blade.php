@extends('Layouts.master')
@section('contents')

<main>
    <!-- slider-area start -->
    <section class="slider-area pos-relative">
        <div class="slider-active">
            <div class="single-slider slide-1-style slide-height-2 slide-height-4 d-flex align-items-center" data-background="img/slider/slide5.jpg">
                <div class="shape-title shape-title-4 bounce-animate">
                    <h2>2019</h2>
                </div>
                <div class="shape-icon shape-icon-4 bounce-animate">
                    <img src="assets/img/slider/shape-icon-2.png" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slide-content slide-content-4 text-center pt-40">
                                <h1 data-animation="fadeInUp" data-delay=".3s">New Arrival</h1>
                                <div class="slide-btn">
                                    <a class="btn theme-btn" href="/shop" data-animation="fadeInLeft" data-delay=".6s">shop now</a>
                                    <a class="btn white-btn" href="/shop" data-animation="fadeInRight" data-delay=".9s">category</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slide-1-style slide-height-2 slide-height-4 d-flex align-items-center" data-background="img/slider/slide5-2.jpg">
                <div class="shape-title shape-title-4 bounce-animate">
                    <h2>2019</h2>
                </div>
                <div class="shape-icon shape-icon-4 bounce-animate">
                    <img src="assets/img/slider/shape-icon-2.png" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slide-content slide-content-4 text-center pt-40">
                                <h1 data-animation="fadeInUp" data-delay=".3s">Trendy Collection</h1>
                                <div class="slide-btn">
                                    <a class="btn theme-btn" href="/shop" data-animation="fadeInLeft" data-delay=".6s">shop now</a>
                                    <a class="btn white-btn" href="/shop" data-animation="fadeInRight" data-delay=".9s">category</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider slide-1-style slide-height-2 slide-height-4 d-flex align-items-center" data-background="img/slider/slide5-3.jpg">
                <div class="shape-title shape-title-4 bounce-animate">
                    <h2>2019</h2>
                </div>
                <div class="shape-icon shape-icon-4 bounce-animate">
                    <img src="assets/img/slider/shape-icon-2.png" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slide-content slide-content-4 text-center pt-40">
                                <h1 data-animation="fadeInUp" data-delay=".3s">Men Collection</h1>
                                <div class="slide-btn">
                                    <a class="btn theme-btn" href="/shop" data-animation="fadeInLeft" data-delay=".6s">shop now</a>
                                    <a class="btn white-btn" href="/shop" data-animation="fadeInRight" data-delay=".9s">category</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider-area end -->

    <!-- banner area start -->
    <section class="banner-area pt-100 box-90">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="banner-2 pos-relative mb-30">
                        <a href="/shop"><img src="assets/img/banner/banner-2/banner3.jpg" alt=""></a>
                        <div class="banner-trend">
                            <span>Trendy Item</span>
                            <h2><a href="/shop">New Year Trend Coming 2019</a></h2>
                            <div class="discover-link">
                                <a href="/shop">discover</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="banner-2 pos-relative mb-30">
                        <a href="/shop"><img src="assets/img/banner/banner-2/banner4.jpg" alt=""></a>
                        <div class="banner-look">
                            <span>Get the look</span>
                            <h2>Festive Looks</h2>
                            <img src="assets/img/icon/look.png" alt="">
                            <p>Your delivery of outfit ideas, updated daily</p>
                            <a href="/shop" class="btn theme-btn">discover</a>
                        </div>
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
                        <ul class="nav product-nav  justify-content-xl-end" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                                    aria-selected="true">t-Shirt</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                                    aria-selected="false">Jeants</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
                                    aria-selected="false">huddy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab1" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact"
                                    aria-selected="false">pent</a>
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
                                                    <img src="assets/img/product/pro27.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro28.jpg" alt="">
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
                                                    <img src="assets/img/product/pro28.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro29.jpg" alt="">
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
                                                    <img src="assets/img/product/pro29.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro30.jpg" alt="">
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
                                                    <img src="assets/img/product/pro31.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro32.jpg" alt="">
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
                                                    <img src="assets/img/product/pro32.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro33.jpg" alt="">
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
                                                    <img src="assets/img/product/pro33.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro34.jpg" alt="">
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
                                                    <img src="assets/img/product/pro31.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro33.jpg" alt="">
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
                                                    <img src="assets/img/product/pro20.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro19.jpg" alt="">
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
                                                    <img src="assets/img/product/pro29.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro30.jpg" alt="">
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
                                                    <img src="assets/img/product/pro31.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro32.jpg" alt="">
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
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="product-slider owl-carousel">
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro27.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro28.jpg" alt="">
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
                                                    <img src="assets/img/product/pro28.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro29.jpg" alt="">
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
                                                    <img src="assets/img/product/pro31.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro33.jpg" alt="">
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
                                                    <img src="assets/img/product/pro20.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro19.jpg" alt="">
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
                                                    <img src="assets/img/product/pro29.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro30.jpg" alt="">
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
                                                    <img src="assets/img/product/pro31.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro32.jpg" alt="">
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
                                                    <img src="assets/img/product/pro32.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro33.jpg" alt="">
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
                                                    <img src="assets/img/product/pro33.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro34.jpg" alt="">
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
                                                    <img src="assets/img/product/pro29.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro30.jpg" alt="">
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
                                                    <img src="assets/img/product/pro31.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro32.jpg" alt="">
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
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="product-slider owl-carousel">
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro32.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro33.jpg" alt="">
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
                                                    <img src="assets/img/product/pro33.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro34.jpg" alt="">
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
                                                    <img src="assets/img/product/pro27.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro28.jpg" alt="">
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
                                                    <img src="assets/img/product/pro28.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro29.jpg" alt="">
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
                                                    <img src="assets/img/product/pro29.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro30.jpg" alt="">
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
                                                    <img src="assets/img/product/pro31.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro32.jpg" alt="">
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
                                                    <img src="assets/img/product/pro31.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro33.jpg" alt="">
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
                                                    <img src="assets/img/product/pro20.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro19.jpg" alt="">
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
                                                    <img src="assets/img/product/pro29.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro30.jpg" alt="">
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
                                                    <img src="assets/img/product/pro31.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro32.jpg" alt="">
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
                            <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab1">
                                <div class="product-slider owl-carousel">
                                    <div class="pro-item">
                                        <div class="product-wrapper mb-50">
                                            <div class="product-img mb-25">
                                                <a href="/product-details">
                                                    <img src="assets/img/product/pro32.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro33.jpg" alt="">
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
                                                    <img src="assets/img/product/pro33.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro34.jpg" alt="">
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
                                                    <img src="assets/img/product/pro31.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro33.jpg" alt="">
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
                                                    <img src="assets/img/product/pro20.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro19.jpg" alt="">
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
                                                    <img src="assets/img/product/pro27.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro28.jpg" alt="">
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
                                                    <img src="assets/img/product/pro28.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro29.jpg" alt="">
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
                                                    <img src="assets/img/product/pro29.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro30.jpg" alt="">
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
                                                    <img src="assets/img/product/pro31.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro32.jpg" alt="">
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
                                                    <img src="assets/img/product/pro29.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro30.jpg" alt="">
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
                                                    <img src="assets/img/product/pro31.jpg" alt="">
                                                    <img class="secondary-img" src="assets/img/product/pro32.jpg" alt="">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-area end -->

    <!-- features-area start -->
    <section class="features-area box-90">
        <div class="container-fluid">
            <div class="theme-soft-bg fix pt-100 pb-50">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="area-title text-center mb-50">
                            <h2>Special Features</h2>
                            <p>Get special services from our shop.</p>
                        </div>
                    </div>
                </div>
                <div class="features">
                    <div class="single-seatures width-20 mb-50 text-center">
                        <i class="flaticon-shopping-cart-1"></i>
                        <span>Free Delivery</span>
                        <h3>Free Delivery</h3>
                    </div>
                    <div class="single-seatures width-20 mb-50 text-center">
                        <i class="flaticon-good"></i>
                        <span>100% Customer</span>
                        <h3>Feedbacks</h3>
                    </div>
                    <div class="single-seatures width-20 mb-50 text-center">
                        <i class="flaticon-return-1"></i>
                        <span>10 Days</span>
                        <h3>For Free Return</h3>
                    </div>
                    <div class="single-seatures width-20 mb-50 text-center">
                        <i class="flaticon-return"></i>
                        <span>Payment</span>
                        <h3>Secure System</h3>
                    </div>
                    <div class="single-seatures width-20 mb-50 text-center">
                        <i class="flaticon-customer-service"></i>
                        <span>24/7</span>
                        <h3>Online Supports</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features-area end -->

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
                            <img src="assets/img/blog/latest/lb11.jpg" alt="">
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
                            <img src="assets/img/blog/latest/lb12.jpg" alt="">
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
                            <img src="assets/img/blog/latest/lb13.jpg" alt="">
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
</main>

@endsection