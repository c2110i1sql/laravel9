<!-- product-area-start -->
<section class="product-area grey-bg pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="tpsection mb-35">
                    <h4 class="tpsection__sub-title">~ Special Products ~</h4>
                    <h4 class="tpsection__title">{{$title}}</h4>
                    <p>The liber tempor cum soluta nobis eleifend option congue doming quod mazim.</p>
                </div>
            </div>
        </div>
        <div class="tpproduct__arrow p-relative">
            <div class="swiper-container tpproduct-active tpslider-bottom p-relative">
                <div class="swiper-wrapper">
                    @foreach($data as $item)
                    <div class="swiper-slide">
                        <div class="tpproduct p-relative">
                            <div class="tpproduct__thumb p-relative text-center">
                                <a href="{{link_detail($item)}}"><img
                                        src="{{url('')}}/uploads/{{$item->image}}" alt=""></a>
                                <a class="tpproduct__thumb-img" href="{{link_detail($item)}}"><img
                                        src="{{url('')}}/uploads/{{$item->image}}" alt=""></a>
                                <div class="tpproduct__info bage">
                                    <span class="tpproduct__info-discount bage__discount">-50%</span>
                                    <span class="tpproduct__info-hot bage__hot">HOT</span>
                                </div>
                                <div class="tpproduct__shopping">
                                    <a class="tpproduct__shopping-wishlist" href="wishlist.html"><i
                                            class="icon-heart icons"></i></a>
                                    <a class="tpproduct__shopping-wishlist" href="#"><i class="icon-layers"></i></a>
                                    <a class="tpproduct__shopping-cart" href="#"><i class="icon-eye"></i></a>
                                </div>
                            </div>
                            <div class="tpproduct__content">
                                <span class="tpproduct__content-weight">
                                    <a href="">{{$item->cat->name}}</a>,
                                </span>
                                <h4 class="tpproduct__title">
                                    <a href="">{{$item->name}}</a>
                                </h4>
                         
                                <div class="tpproduct__price">
                                    <span>${{number_format($item->sale_price)}}</span>
                                    <del>${{number_format($item->price)}}</del>
                                </div>
                            </div>
                            <div class="tpproduct__hover-text">
                                <div class="tpproduct__hover-btn d-flex justify-content-center mb-10">
                                    <a class="tp-btn-2" href="{{route('cart.add',$item->id)}}">Add to cart</a>
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
            <div class="tpproduct-btn">
                <div class="tpprduct-arrow tpproduct-btn__prv"><a href="#"><i class="icon-chevron-left"></i></a></div>
                <div class="tpprduct-arrow tpproduct-btn__nxt"><a href="#"><i class="icon-chevron-right"></i></a></div>
            </div>
        </div>
    </div>
</section>
<!-- product-area-end -->