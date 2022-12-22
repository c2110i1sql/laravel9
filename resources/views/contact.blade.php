@extends('layouts.master')

@section('title','Liên hệ')
@section('main')

<!-- breadcrumb-area-start -->
<div class="breadcrumb__area grey-bg pt-50 pb-55">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-breadcrumb__content text-center">
                    <h4 class="tp-breadcrumb__title">Store Locator</h4>
                    <div class="tp-breadcrumb__list">
                        <span class="tp-breadcrumb__active"><a href="index-2.html">Home</a></span>
                        <span class="dvdr">/</span>
                        <span>Store Locator</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area-end -->

<!-- location-area-start -->
<div class="location-area pt-80 pb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="tplocation mb-30">
                    <div class="tplocation__thumb w-img">
                        <img src="assets/img/banner/contact-bg-1.jpg" alt="">
                    </div>
                    <div class="tplocation__content">
                        <ul>
                            <li>
                                <a href="#">Add: Heaven Stress, Beverly, Melbourne</a>
                            </li>
                            <li>
                                <a href="tel:012345678">Phone: (+100) 123 456 7890</a>
                            </li>
                            <li>
                                <a href="mailto:orfarm@google.com">Email: Orfarm@google.com</a>
                            </li>
                            <li>
                                <a href="#">Website: http://www.orfarm.com/</a>
                            </li>
                            <li>
                                Description: We have more than 100 stores all over the globe. Find the nearest store to
                                <br> get your favorite stuff.
                            </li>
                            <li>
                                Opening Hours: <span> 09:00 AM - 18:00 PM</span>
                            </li>
                            <li>
                                <a class="tplocation__button mt-15" href="#">Get Directions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="tpcontactmap mb-30">
                <div class="tptrack__product mb-40">
                    <form action="" method="post">
                        @csrf
                        <div class="tptrack__content grey-bg">
                           
                            <div class="tptrack__id mb-10">

                                <span><i class="fal fa-user"></i></span>
                                <input name="name" placeholder="Username / email address">
                            </div>
                            <div class="tptrack__id mb-10">

                                <span><i class="fal fa-user"></i></span>
                                <input type="email" name="email" placeholder="Username / email address">
                            </div>
                            <div class="tptrack__email mb-10">
                                <span><i class="fal fa-key"></i></span>
                                <input type="text"  name="subject" placeholder="subject">

                            </div>
                            <div class="tptrack__email mb-10">
                                <span><i class="fal fa-key"></i></span>
                                <textarea name="content" class="form-control" placeholder="content"></textarea>

                            </div>
                        
                            <div class="tptrack__btn">
                                <button class="tptrack__submition active">Send contact<i
                                        class="fal fa-long-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- location-area-end -->

<!-- cart area end-->
@stop()