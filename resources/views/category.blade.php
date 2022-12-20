@extends('layouts.master')

@section('title','Danh mục sản phẩm')
@section('main')
<!-- breadcrumb-area-start -->
<div class="breadcrumb__area grey-bg pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tp-breadcrumb__content">
                    <div class="tp-breadcrumb__list">
                        <span class="tp-breadcrumb__active"><a href="index-2.html">Home</a></span>
                        <span class="dvdr">/</span>
                        <span>{{$cat->name}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area-end -->

<!-- shop-area-start -->
<section class="shop-area-start grey-bg pb-200">
    <div class="container">
        <div class="row">
            <div class="col-xl-2 col-lg-12 col-md-12">
                <div class="tpshop__leftbar">
                    <div class="tpshop__widget mb-30 pb-25">
                        <h4 class="tpshop__widget-title">Product Categories</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" checked id="flexCheckDefault9">
                            <label class="form-check-label" for="flexCheckDefault9">
                                Biscuits & Snacks (08)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                            <label class="form-check-label" for="flexCheckDefault2">
                                Fresh Fruits (12)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" checked id="flexCheckDefault3">
                            <label class="form-check-label" for="flexCheckDefault3">
                                Exotic Fruits (09)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" checked id="flexCheckDefault4">
                            <label class="form-check-label" for="flexCheckDefault4">
                                Breads & Bakery (05)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                            <label class="form-check-label" for="flexCheckDefault5">
                                Breakfast & Dairy (09)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6">
                            <label class="form-check-label" for="flexCheckDefault6">
                                Honey (05)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7">
                            <label class="form-check-label" for="flexCheckDefault7">
                                Milk & Flavoured (04)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault8">
                            <label class="form-check-label" for="flexCheckDefault8">
                                Meats & Seafood (08)
                            </label>
                        </div>
                    </div>
                    <div class="tpshop__widget mb-30 pb-25">
                        <h4 class="tpshop__widget-title mb-20">FILTER BY PRICE</h4>
                        <div class="productsidebar">
                            <div class="productsidebar__head">
                            </div>
                            <div class="productsidebar__range">
                                <div id="slider-range"></div>
                                <div class="price-filter mt-10"><input type="text" id="amount">
                                </div>
                            </div>
                        </div>
                        <div class="productsidebar__btn mt-15 mb-15">
                            <a href="#">FILTER</a>
                        </div>
                    </div>
                    <div class="tpshop__widget mb-30 pb-25">
                        <h4 class="tpshop__widget-title mb-20">Filter by Color</h4>
                        <div class="tpshop__widget-color-box">
                            <div class="form-check">
                                <input class="form-check-input black-input" type="checkbox" value=""
                                    id="flexCheckDefault12">
                                <label class="form-check-label" for="flexCheckDefault12">
                                    Black
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input blue-input" type="checkbox" value="" checked
                                    id="flexCheckChecked13">
                                <label class="form-check-label" for="flexCheckChecked13">
                                    Blue
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input brown-input" type="checkbox" value="" checked
                                    id="flexCheckChecked18">
                                <label class="form-check-label" for="flexCheckChecked18">
                                    Brown
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input grey-input" type="checkbox" value=""
                                    id="flexCheckChecked14">
                                <label class="form-check-label" for="flexCheckChecked14">
                                    Gray
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input green-input" type="checkbox" value=""
                                    id="flexCheckChecked15">
                                <label class="form-check-label" for="flexCheckChecked15">
                                    Green
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input orange-input" type="checkbox" value=""
                                    id="flexCheckChecked16">
                                <label class="form-check-label" for="flexCheckChecked16">
                                    Yellow
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input red-input" type="checkbox" value=""
                                    id="flexCheckChecked17">
                                <label class="form-check-label" for="flexCheckChecked17">
                                    Red
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="tpshop__widget mb-30 pb-25">
                        <h4 class="tpshop__widget-title">FILTER BY BRAND</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault18">
                            <label class="form-check-label" for="flexCheckDefault18">
                                Chrome Hearts (15)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault19">
                            <label class="form-check-label" for="flexCheckDefault19">
                                Dominique Aurientis (15)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" checked id="flexCheckDefault20">
                            <label class="form-check-label" for="flexCheckDefault20">
                                Galliano (15)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" checked id="flexCheckDefault21">
                            <label class="form-check-label" for="flexCheckDefault21">
                                Georgine (15)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault22">
                            <label class="form-check-label" for="flexCheckDefault22">
                                Matthew Christopher (15)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault23">
                            <label class="form-check-label" for="flexCheckDefault23">
                                Paul Gaultier (15)
                            </label>
                        </div>
                    </div>
                    <div class="tpshop__widget">
                        <h4 class="tpshop__widget-title">FILTER BY RATING</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault24">
                            <label class="form-check-label" for="flexCheckDefault24">
                                <i class="icon-star_rate"></i>
                                <i class="icon-star_rate"></i>
                                <i class="icon-star_rate"></i>
                                <i class="icon-star_rate"></i>
                                <i class="icon-star_rate"></i>
                                (45)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" checked id="flexCheckDefault25">
                            <label class="form-check-label" for="flexCheckDefault25">
                                <i class="icon-star_rate"></i>
                                <i class="icon-star_rate"></i>
                                <i class="icon-star_rate"></i>
                                <i class="icon-star_rate"></i>
                                <i class="icon-star_rate"></i>
                                (10)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" checked id="flexCheckDefault26">
                            <label class="form-check-label" for="flexCheckDefault26">
                                <i class="icon-star_rate"></i>
                                <i class="icon-star_rate"></i>
                                <i class="icon-star_rate"></i>
                                <i class="icon-star_rate"></i>
                                <i class="icon-star_rate"></i>
                                (05)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault27">
                            <label class="form-check-label" for="flexCheckDefault27">
                                <i class="icon-star_rate"></i>
                                <i class="icon-star_rate"></i>
                                <i class="icon-star_rate"></i>
                                <i class="icon-star_rate"></i>
                                <i class="icon-star_rate"></i>
                                (02)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault28">
                            <label class="form-check-label" for="flexCheckDefault28">
                                <i class="icon-star_rate"></i>
                                <i class="icon-star_rate"></i>
                                <i class="icon-star_rate"></i>
                                <i class="icon-star_rate"></i>
                                <i class="icon-star_rate"></i>
                                (02)
                            </label>
                        </div>
                    </div>
                </div>
                <div class="tpshop__widget">
                    <div class="tpshop__sidbar-thumb mt-35">
                        <img src="{{url('')}}/assets/img/shape/sidebar-product-1.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-10 col-lg-12 col-md-12">
                <div class="tpshop__top ml-60">
                    <div class="tpshop__banner mb-30" data-background="{{url('')}}/assets/img/banner/shop-bg-1.jpg">
                        <div class="tpshop__content text-center">
                            <span>The Salad</span>
                            <h4 class="tpshop__content-title mb-20">{{$cat->name}}</h4>
                            <p>Do not miss the current offers of us!</p>
                        </div>
                    </div>
                    <div class="product__filter-content mb-40">
                        <div class="row align-items-center">
                            <div class="col-sm-4">
                                <div class="product__item-count">
                                    <span>Showing 1 - 18 of 40 Products</span>
                                </div>
                            </div>
                           
                            <div class="col-sm-4">
                                <div class="product__navtabs d-flex justify-content-end align-items-center">
                                    <div class="tp-shop-selector">
                                        <select style="display: none;">
                                            <option>Default sorting</option>
                                            <option>Show 14</option>
                                            <option>Show 08</option>
                                            <option>Show 20</option>
                                        </select>
                                        <div class="nice-select" tabindex="0">
                                            <span class="current">Default sorting</span>
                                            <ul class="list">
                                                <li data-value="Show 12" class="option selected">Default sorting</li>
                                                <li data-value="Show 14" class="option">Short popularity</li>
                                                <li data-value="Show 08" class="option">Show 08</li>
                                                <li data-value="Show 20" class="option">Show 20</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="nav-tabContent">
                 
                        <div class="tab-pane fade show active whight-product" id="nav-popular" role="tabpanel"
                            aria-labelledby="nav-popular-tab">
                            <div
                                class="row row-cols-xxl-3 row-cols-xl-3 row-cols-lg-3 row-cols-md-3 row-cols-sm-2 row-cols-1 tpproduct__shop-item">
                                @foreach($products as $prod)
                                <div class="col">
                                    <div class="tpproduct p-relative mb-20">
                                        <div class="tpproduct__thumb p-relative text-center">
                                            <a href="{{link_detail($prod)}}"><img src="{{url('uploads')}}/{{$prod->image}}" alt=""></a>
                                            <a class="tpproduct__thumb-img" href="{{link_detail($prod)}}l"><img
                                                    src="{{url('uploads')}}/{{$prod->image}}" alt=""></a>
                                            <div class="tpproduct__info bage">
                                                <span class="tpproduct__info-discount bage__discount">-50%</span>
                                                <span class="tpproduct__info-hot bage__hot">HOT</span>
                                            </div>
                                            <div class="tpproduct__shopping">
                                                <a class="tpproduct__shopping-wishlist" href="{{link_detail($prod)}}"><i
                                                        class="icon-heart icons"></i></a>
                                                <a class="tpproduct__shopping-wishlist" href="#"><i
                                                        class="icon-layers"></i></a>
                                                <a class="tpproduct__shopping-cart" href="{{link_detail($prod)}}"><i
                                                        class="icon-eye"></i></a>
                                            </div>
                                        </div>
                                        <div class="tpproduct__content">
                                            <span class="tpproduct__content-weight">
                                                <a href="">{{$cat->name}}</a>,
                                            </span>
                                            <h4 class="tpproduct__title">
                                                <a href="{{link_detail($prod)}}">{{$prod->name}}</a>
                                            </h4>
                                            
                                            <div class="tpproduct__price">
                                                <span>${{number_format($prod->sale_price)}}</span>
                                                <del>${{number_format($prod->price)}}</del>
                                            </div>
                                        </div>
                                        <div class="tpproduct__hover-text">
                                            <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                                <a class="tp-btn-2" href="{{route('cart.add', $prod->id)}}">Add to cart</a>
                                            </div>
                                            <div class="tpproduct__descrip">
                                                <ul>
                                                    <li>Type: Organic</li>
                                                    <li>MFG: August 4.2021</li>
                                                    <li>LIFE: 60 days</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                       
                    </div>
                    <div class="basic-pagination text-center mt-35">
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- shop-area-end -->
@stop()