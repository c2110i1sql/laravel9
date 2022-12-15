@extends('layouts.master')

@section('title','Trang chủ')
@section('main')
<x-home-banner  title="Hello home banner"/>

<!-- category-area-start -->
<section class="category-area grey-bg pb-40">
    <div class="container">
        <div class="swiper-container category-active">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="category__item mb-30">
                        <div class="category__thumb fix mb-15">
                            <a href="shop-details-3.html"><img src="{{url('')}}/assets/img/catagory/category-1.jpg"
                                    alt="category-thumb"></a>
                        </div>
                        <div class="category__content">
                            <h5 class="category__title"><a href="shop-details-4.html">Vegetables</a></h5>
                            <span class="category__count">05 items</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="category__item mb-30">
                        <div class="category__thumb fix mb-15">
                            <a href="shop-details-3.html"><img src="{{url('')}}/assets/img/catagory/category-2.jpg"
                                    alt="category-thumb"></a>
                        </div>
                        <div class="category__content">
                            <h5 class="category__title"><a href="shop-details-3.html">Fresh Fruits</a></h5>
                            <span class="category__count">06 items</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="category__item mb-30">
                        <div class="category__thumb fix mb-15">
                            <a href="shop-details-3.html"><img src="{{url('')}}/assets/img/catagory/category-3.jpg"
                                    alt="category-thumb"></a>
                        </div>
                        <div class="category__content">
                            <h5 class="category__title"><a href="shop-details-3.html">Fruit Drink</a></h5>
                            <span class="category__count">09 items</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="category__item mb-30">
                        <div class="category__thumb fix mb-15">
                            <a href="shop-details-3.html"><img src="{{url('')}}/assets/img/catagory/category-4.jpg"
                                    alt="category-thumb"></a>
                        </div>
                        <div class="category__content">
                            <h5 class="category__title"><a href="shop-details-3.html">Fresh Bakery</a></h5>
                            <span class="category__count">11 items</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="category__item mb-30">
                        <div class="category__thumb fix mb-15">
                            <a href="shop-details-3.html"><img src="{{url('')}}/assets/img/catagory/category-5.jpg"
                                    alt="category-thumb"></a>
                        </div>
                        <div class="category__content">
                            <h5 class="category__title"><a href="shop-details-3.html">Biscuits Snack</a></h5>
                            <span class="category__count">02 items</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="category__item mb-30">
                        <div class="category__thumb fix mb-15">
                            <a href="shop-details-3.html"><img src="{{url('')}}/assets/img/catagory/category-6.jpg"
                                    alt="category-thumb"></a>
                        </div>
                        <div class="category__content">
                            <h5 class="category__title"><a href="shop-details-3.html">Fresh Meat</a></h5>
                            <span class="category__count">16 items</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="category__item mb-30">
                        <div class="category__thumb fix mb-15">
                            <a href="shop-details-3.html"><img src="{{url('')}}/assets/img/catagory/category-7.jpg"
                                    alt="category-thumb"></a>
                        </div>
                        <div class="category__content">
                            <h5 class="category__title"><a href="shop-details-3.html">Fresh Milk</a></h5>
                            <span class="category__count">10 items</span>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="category__item mb-30">
                        <div class="category__thumb fix mb-15">
                            <a href="shop-details-3.html"><img src="{{url('')}}/assets/img/catagory/category-8.jpg"
                                    alt="category-thumb"></a>
                        </div>
                        <div class="category__content">
                            <h5 class="category__title"><a href="shop-details-3.html">Sea Foods</a></h5>
                            <span class="category__count">11 items</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- category-area-end -->
<x-swiper-product title="New Product" :data="$newProducts"/>
<x-swiper-product title="Random Product" :data="$randomProducts"/>


<!-- banner-area-start -->
<section class="banner-area pb-60 grey-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="tpbanner__item mb-30">
                    <a href="shop-3.html">
                        <div class="tpbanner__content" data-background="{{url('')}}/assets/img/banner/banner-1.jpg">
                            <span class="tpbanner__sub-title mb-10">Top offers</span>
                            <h4 class="tpbanner__title mb-30">Eat Green <br> Best For Family</h4>
                            <p>Free Shipping 05km</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="tpbanner__item mb-30">
                    <a href="shop-3.html">
                        <div class="tpbanner__content" data-background="{{url('')}}/assets/img/banner/banner-2.jpg">
                            <span class="tpbanner__sub-title tpbanner__white mb-10">Weekend Deals</span>
                            <h4 class="tpbanner__title mb-30">Fresh Food <br> Restore Health</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="tpbanner__item mb-30">
                    <a href="shop-3.html">
                        <div class="tpbanner__content" data-background="{{url('')}}/assets/img/banner/banner-3.jpg">
                            <span class="tpbanner__sub-title mb-10">Top seller</span>
                            <h4 class="tpbanner__title mb-30">Healthy <br> Fresh Free Bread</h4>
                            <p>Limited Time: Online Only!</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-area-end -->
<!-- Weekly Food Offers -->
<!-- product-area-start -->
<x-swiper-product title="Sale Product" :data="$saleProducts"/>


<!-- product-coundown-area-start -->
<section class="product-coundown-area tpcoundown__bg grey-bg pb-25"
    data-background="{{url('')}}/assets/img/banner/coundpwn-bg-1.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tpcoundown p-relative ml-175">
                    <div class="section__content mb-35">
                        <span class="section__sub-title mb-10">~ Deals Of The Day ~</span>
                        <h2 class="section__title mb-25">Premium Drinks <br> Fresh Farm Product</h2>
                        <p>The liber tempor cum soluta nobis eleifend option congue <br>
                            doming quod mazim placerat facere possum assam going through.</p>
                    </div>
                    <div class="tpcoundown__count">
                        <h4 class="tpcoundown__count-title">hurry up! Offer End In:</h4>
                        <div class="tpcoundown__countdown" data-countdown="2022/11/11"></div>
                        <div class="tpcoundown__btn mt-50">
                            <a class="whight-btn" href="shop-details-grid.html">Shop Now</a>
                            <a class="whight-btn border-btn ml-15" href="shop-list-view.html">View Menu</a>
                        </div>
                    </div>
                    <div class="tpcoundown__shape d-none d-lg-block">
                        <img class="tpcoundown__shape-one" src="{{url('')}}/assets/img/shape/tree-leaf-1.svg" alt="">
                        <img class="tpcoundown__shape-two" src="{{url('')}}/assets/img/shape/tree-leaf-2.svg" alt="">
                        <img class="tpcoundown__shape-three" src="{{url('')}}/assets/img/shape/tree-leaf-3.svg" alt="">
                        <img class="tpcoundown__shape-four" src="{{url('')}}/assets/img/shape/fresh-shape-1.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product-coundown-area-end -->

<!-- blog-area-start -->
<section class="blog-area pt-100 pb-100 grey-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="tpsection mb-35">
                    <h4 class="tpsection__sub-title">~ Read Our Blog ~</h4>
                    <h4 class="tpsection__title">Our Latest Post</h4>
                    <p>The liber tempor cum soluta nobis eleifend option congue doming quod mazim.</p>
                </div>
            </div>
        </div>
        <div class="swiper-container tpblog-active">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="tpblog__item">
                        <div class="tpblog__thumb fix">
                            <a href="blog-details.html"><img src="{{url('')}}/assets/img/blog/blog-bg-1.jpg" alt=""></a>
                        </div>
                        <div class="tpblog__wrapper">
                            <div class="tpblog__entry-wap">
                                <span class="cat-links"><a href="shop-details.html">Lifestyle</a></span>
                                <span class="author-by"><a href="#">Admin</a></span>
                                <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                            </div>
                            <h4 class="tpblog__title"><a href="blog-details.html">Avocado Grilled Salmon, Rich In
                                    Nutrients For The Body</a></h4>
                            <p>These are the people who make your life easier. Egestas is tristique vestibulum...</p>
                            <div class="tpblog__details">
                                <a href="blog-details.html">Continue reading <i class="icon-chevrons-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tpblog__item">
                        <div class="tpblog__thumb fix">
                            <a href="blog-details.html"><img src="{{url('')}}/assets/img/blog/blog-bg-2.jpg" alt=""></a>
                        </div>
                        <div class="tpblog__wrapper">
                            <div class="tpblog__entry-wap">
                                <span class="cat-links"><a href="shop-details.html">Organics</a></span>
                                <span class="author-by"><a href="#">Admin</a></span>
                                <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                            </div>
                            <h4 class="tpblog__title"><a href="blog-details.html">The Best Great Benefits Of
                                    Fresh Beef For Women's Health</a></h4>
                            <p>These are the people who make your life easier. Egestas is tristique vestibulum...</p>
                            <div class="tpblog__details">
                                <a href="blog-details.html">Continue reading <i class="icon-chevrons-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tpblog__item">
                        <div class="tpblog__thumb fix">
                            <a href="blog-details.html"><img src="{{url('')}}/assets/img/blog/blog-bg-3.jpg" alt=""></a>
                        </div>
                        <div class="tpblog__wrapper">
                            <div class="tpblog__entry-wap">
                                <span class="cat-links"><a href="shop-details.html">Organics</a></span>
                                <span class="author-by"><a href="#">Admin</a></span>
                                <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                            </div>
                            <h4 class="tpblog__title"><a href="blog-details.html">Ways To Choose Fruits &
                                    Seafoods Good For Pregnancy</a></h4>
                            <p>These are the people who make your life easier. Egestas is tristique vestibulum...</p>
                            <div class="tpblog__details">
                                <a href="blog-details.html">Continue reading <i class="icon-chevrons-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tpblog__item">
                        <div class="tpblog__thumb fix">
                            <a href="blog-details.html"><img src="{{url('')}}/assets/img/blog/blog-bg-4.jpg" alt=""></a>
                        </div>
                        <div class="tpblog__wrapper">
                            <div class="tpblog__entry-wap">
                                <span class="cat-links"><a href="shop-details.html">Shopping</a></span>
                                <span class="author-by"><a href="#">Admin</a></span>
                                <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                            </div>
                            <h4 class="tpblog__title"><a href="blog-details.html">Summer Breakfast For The Healthy
                                    Morning With Tomatoes</a></h4>
                            <p>These are the people who make your life easier. Egestas is tristique vestibulum...</p>
                            <div class="tpblog__details">
                                <a href="blog-details.html">Continue reading <i class="icon-chevrons-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tpblog__item">
                        <div class="tpblog__thumb fix">
                            <a href="blog-details.html"><img src="{{url('')}}/assets/img/blog/blog-bg-5.jpg" alt=""></a>
                        </div>
                        <div class="tpblog__wrapper">
                            <div class="tpblog__entry-wap">
                                <span class="cat-links"><a href="#">Foods</a></span>
                                <span class="author-by"><a href="#">Admin</a></span>
                                <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                            </div>
                            <h4 class="tpblog__title"><a href="blog-details.html">Popular Reasons You Must Drinks Juice
                                    Everyday</a></h4>
                            <p>These are the people who make your life easier. Egestas is tristique vestibulum...</p>
                            <div class="tpblog__details">
                                <a href="blog-details.html">Continue reading <i class="icon-chevrons-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tpblog__item">
                        <div class="tpblog__thumb fix">
                            <a href="blog-details.html"><img src="{{url('')}}/assets/img/blog/blog-bg-6.jpg" alt=""></a>
                        </div>
                        <div class="tpblog__wrapper">
                            <div class="tpblog__entry-wap">
                                <span class="cat-links"><a href="shop-details.html">Lifestyle</a></span>
                                <span class="author-by"><a href="#">Admin</a></span>
                                <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                            </div>
                            <h4 class="tpblog__title"><a href="blog-details.html">Perfect Quality Reasonable Price For
                                    Your Family</a></h4>
                            <p>These are the people who make your life easier. Egestas is tristique vestibulum...</p>
                            <div class="tpblog__details">
                                <a href="blog-details.html">Continue reading <i class="icon-chevrons-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tpblog__item">
                        <div class="tpblog__thumb fix">
                            <a href="blog-details.html"><img src="{{url('')}}/assets/img/blog/blog-bg-7.jpg" alt=""></a>
                        </div>
                        <div class="tpblog__wrapper">
                            <div class="tpblog__entry-wap">
                                <span class="cat-links"><a href="shop-details.html">Dairy Farm</a></span>
                                <span class="author-by"><a href="#">Admin</a></span>
                                <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                            </div>
                            <h4 class="tpblog__title"><a href="blog-details.html">Ways To Choose Fruits Seafoods Good
                                    For Pregnancy</a></h4>
                            <p>These are the people who make your life easier. Egestas is tristique vestibulum...</p>
                            <div class="tpblog__details">
                                <a href="blog-details.html">Continue reading <i class="icon-chevrons-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tpblog__item">
                        <div class="tpblog__thumb fix">
                            <a href="blog-details.html"><img src="{{url('')}}/assets/img/blog/blog-bg-8.jpg" alt=""></a>
                        </div>
                        <div class="tpblog__wrapper">
                            <div class="tpblog__entry-wap">
                                <span class="cat-links"><a href="#">organis</a></span>
                                <span class="author-by"><a href="#">Admin</a></span>
                                <span class="post-data"><a href="#">SEP 15. 2022</a></span>
                            </div>
                            <h4 class="tpblog__title"><a href="blog-details.html">The Best Great Benefits Of Fresh Beef
                                    For Women’s Health</a></h4>
                            <p>These are the people who make your life easier. Egestas is tristique vestibulum...</p>
                            <div class="tpblog__details">
                                <a href="blog-details.html">Continue reading <i class="icon-chevrons-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- blog-area-end -->


@stop()