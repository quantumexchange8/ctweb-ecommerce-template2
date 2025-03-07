@extends('Layouts.master')
@section('contents')

<main>

    <!-- breadcrumb-area-start -->
    <section class="breadcrumb-area" data-background="assets/img/bg/page-title.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-text text-center">
                        <h1>Wishlist</h1>
                        <ul class="breadcrumb-menu">
                            <li><a href="/">Home</a></li>
                            <li><span>Wishlist</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- Cart Area Strat-->
    <section class="cart-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="product-thumbnail">Images</th>
                                        <th class="cart-product-name">Product</th>
                                        <th class="product-price">Unit Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                        <th class="product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="product-thumbnail"><a href="#"><img src="assets/img/product/pro1.jpg"
                                                    alt=""></a></td>
                                        <td class="product-name"><a href="#">Bakix Furniture</a></td>
                                        <td class="product-price"><span class="amount">$130.00</span></td>
                                        <td class="product-quantity">
                                            <button class="btn theme-btn-2" type="submit">Add TO Cart</button>
                                        </td>
                                        <td class="product-subtotal"><span class="amount">$130.00</span></td>
                                        <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td class="product-thumbnail"><a href="#"><img src="assets/img/product/pro2.jpg"
                                                    alt=""></a></td>
                                        <td class="product-name"><a href="#">Sujon Chair Set</a></td>
                                        <td class="product-price"><span class="amount">$120.50</span></td>
                                        <td class="product-quantity">
                                            <button class="btn theme-btn-2" type="submit">Add TO Cart</button>
                                        </td>
                                        <td class="product-subtotal"><span class="amount">$120.50</span></td>
                                        <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Area End-->
</main>

@endsection