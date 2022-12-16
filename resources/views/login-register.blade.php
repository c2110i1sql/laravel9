@extends('layouts.master')

@section('title','Login & Register')
@section('main')

<!-- breadcrumb-area-start -->
<div class="breadcrumb__area pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-breadcrumb__content">
                    <div class="tp-breadcrumb__list">
                        <span class="tp-breadcrumb__active"><a href="index-2.html">Home</a></span>
                        <span class="dvdr">/</span>
                        <span>Sign in</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area-end -->

<!-- track-area-start -->
<section class="track-area pb-40">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-sm-12">
                <div class="tptrack__product mb-40">
                    <form action="" method="post">
                        @csrf
                        <div class="tptrack__content grey-bg">
                            <div class="tptrack__item d-flex mb-20">
                                <div class="tptrack__item-icon">
                                    <i class="fal fa-user-unlock"></i>
                                </div>
                                <div class="tptrack__item-content">
                                    <h4 class="tptrack__item-title">Login Here</h4>
                                    <p>Your personal data will be used to support your experience throughout this
                                        website,
                                        to manage access to your account.</p>
                                </div>
                            </div>
                            <div class="tptrack__id mb-10">

                                <span><i class="fal fa-user"></i></span>
                                <input type="email" name="email" placeholder="Username / email address">
                            </div>
                            <div class="tptrack__email mb-10">
                                <span><i class="fal fa-key"></i></span>
                                <input type="text"  name="password" placeholder="Password">

                            </div>
                            <div class="tpsign__remember d-flex align-items-center justify-content-between mb-15">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                    <label class="form-check-label" for="flexCheckDefault2">Remember me</label>
                                </div>
                                <div class="tpsign__pass">
                                    <a href="#">Forget Password</a>
                                </div>
                            </div>
                            <div class="tptrack__btn">
                                <button class="tptrack__submition active">Login Now<i
                                        class="fal fa-long-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12">
                <form action="{{route('home.register')}}" method="post">
                    @csrf

                    <div class="tptrack__product mb-40">
                        <div class="tptrack__content grey-bg">
                            <div class="tptrack__item d-flex mb-20">
                                <div class="tptrack__item-icon">
                                    <i class="fal fa-lock"></i>
                                </div>
                                <div class="tptrack__item-content">
                                    <h4 class="tptrack__item-title">Sign Up</h4>
                                    <p>Your personal data will be used to support your experience throughout this
                                        website,
                                        to manage access to your account.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="tptrack__id mb-10">
                                        <span><i class="fal fa-user"></i></span>
                                        <input type="text" placeholder="Full name" name="name" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="tptrack__id mb-10">
                                        <span><i class="fal fa-envelope"></i></span>
                                        <input type="email" placeholder="Email address" name="email" />
                                    </div>
                                </div>
                            </div>
                            <div class="tptrack__id mb-10">
                                <span><i class="fal fa-envelope"></i></span>
                                <input type="text" placeholder="Phone number" name="phone" />
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="tptrack__email mb-10">
                                        <span><i class="fal fa-key"></i></span>
                                        <input type="password" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="tptrack__email mb-10">
                                        <span><i class="fal fa-key"></i></span>
                                        <input type="password" name="confirm_password" placeholder="Confirm password">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <label for="">Gender</label>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="gender" value="1"
                                                checked>
                                            Male
                                        </label>

                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="gender" value="0">
                                            Fe Male
                                        </label>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="tptrack__email mb-10">
                                        <span><i class="fal fa-address"></i></span>
                                        <input type="password" name="address" placeholder="Your address">
                                    </div>
                                </div>
                            </div>

                            <div class="tptrack__btn">
                                <button class="tptrack__submition tpsign__reg">Register Now<i
                                        class="fal fa-long-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</section>
<!-- track-area-end -->

<!-- cart area end-->
@stop()