@extends('Layouts.master')
@section('contents')

<main>

    <!-- breadcrumb-area-start -->
    <section class="breadcrumb-area" data-background="assets/img/bg/page-title.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-text text-center">
                        <h1>Login</h1>
                        <ul class="breadcrumb-menu">
                            <li><a href="/">home</a></li>
                            <li><span>Login</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- login Area Strat-->
    <section class="login-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="basic-login">
                        <h3 class="text-center mb-60">Login From Here</h3>
                        <form action="#">
                            <label for="name">Email Address <span>**</span></label>
                            <input id="name" type="text" placeholder="Enter Username or Email address..." />
                            <label for="pass">Password <span>**</span></label>
                            <input id="pass" type="password" placeholder="Enter password..." />
                            <div class="login-action mb-20 fix">
                                <span class="log-rem f-left">
                                    <input id="remember" type="checkbox" />
                                    <label for="remember">Remember me!</label>
                                </span>
                                <span class="forgot-login f-right">
                                    <a href="#">Lost your password?</a>
                                </span>
                            </div>
                            <button class="btn theme-btn-2 w-100">Login Now</button>
                            <div class="or-divide"><span>or</span></div>
                            <button class="btn theme-btn w-100">Register Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login Area End-->
</main>

@endsection