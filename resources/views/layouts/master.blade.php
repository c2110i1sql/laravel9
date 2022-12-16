<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from weblearnbd.net/tphtml/orfarm/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Dec 2022 06:54:51 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Orfarm - Multipurpose eCommerce HTML5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('')}}/assets/img/logo/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{url('')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/animate.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/slick.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/spacing.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/meanmenu.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/nice-select.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/icon-dukamarket.css">
    <link rel="stylesheet" href="{{url('')}}/assets/css/main.css">
</head>

<body>

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="icon-chevrons-up"></i>
    </button>
    <!-- Scroll-top-end-->

    @include('layouts.header')

    <main>
        @if (Session::has('yes'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{Session::get('yes')}}
        </div>
        @endif
        @if (Session::has('no'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{Session::get('no')}}
        </div>
        @endif

        @yield('main')

        <!-- feature-area-start -->
        <section class="feature-area mainfeature__bg grey-bg pt-50 pb-40"
            data-background="{{url('')}}/assets/img/shape/footer-shape-1.svg">
            <div class="container">
                <div class="mainfeature__border pb-15">
                    <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2">
                        <div class="col">
                            <div class="mainfeature__item text-center mb-30">
                                <div class="mainfeature__icon">
                                    <img src="{{url('')}}/assets/img/icon/feature-icon-1.svg" alt="">
                                </div>
                                <div class="mainfeature__content">
                                    <h4 class="mainfeature__title">Fast Delivery</h4>
                                    <p>Across West & East India</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mainfeature__item text-center mb-30">
                                <div class="mainfeature__icon">
                                    <img src="{{url('')}}/assets/img/icon/feature-icon-2.svg" alt="">
                                </div>
                                <div class="mainfeature__content">
                                    <h4 class="mainfeature__title">safe payment</h4>
                                    <p>100% Secure Payment</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mainfeature__item text-center mb-30">
                                <div class="mainfeature__icon">
                                    <img src="{{url('')}}/assets/img/icon/feature-icon-3.svg" alt="">
                                </div>
                                <div class="mainfeature__content">
                                    <h4 class="mainfeature__title">Online Discount</h4>
                                    <p>Add Multi-buy Discount </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mainfeature__item text-center mb-30">
                                <div class="mainfeature__icon">
                                    <img src="{{url('')}}/assets/img/icon/feature-icon-4.svg" alt="">
                                </div>
                                <div class="mainfeature__content">
                                    <h4 class="mainfeature__title">Help Center</h4>
                                    <p>Dedicated 24/7 Support </p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mainfeature__item text-center mb-30">
                                <div class="mainfeature__icon">
                                    <img src="{{url('')}}/assets/img/icon/feature-icon-5.svg" alt="">
                                </div>
                                <div class="mainfeature__content">
                                    <h4 class="mainfeature__title">Curated items</h4>
                                    <p>From Handpicked Sellers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-area-end -->
    </main>
    @include('layouts.footer')
    <!-- JS here -->
    <script src="{{url('')}}/assets/js/jquery.js"></script>
    <script src="{{url('')}}/assets/js/waypoints.js"></script>
    <script src="{{url('')}}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('')}}/assets/js/swiper-bundle.js"></script>
    <script src="{{url('')}}/assets/js/nice-select.js"></script>
    <script src="{{url('')}}/assets/js/slick.js"></script>
    <script src="{{url('')}}/assets/js/magnific-popup.js"></script>
    <script src="{{url('')}}/assets/js/counterup.js"></script>
    <script src="{{url('')}}/assets/js/wow.js"></script>
    <script src="{{url('')}}/assets/js/isotope-pkgd.js"></script>
    <script src="{{url('')}}/assets/js/imagesloaded-pkgd.js"></script>
    <script src="{{url('')}}/assets/js/countdown.js"></script>
    <script src="{{url('')}}/assets/js/ajax-form.js"></script>
    <script src="{{url('')}}/assets/js/meanmenu.js"></script>
    <script src="{{url('')}}/assets/js/main.js"></script>
</body>

</html>