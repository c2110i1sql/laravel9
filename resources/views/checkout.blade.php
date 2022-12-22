@extends('layouts.master')

@section('title','Checkout')
@section('main')

         <!-- breadcrumb-area-start -->
         <div class="breadcrumb__area pt-5 pb-5">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="tp-breadcrumb__content">
                        <div class="tp-breadcrumb__list">
                           <span class="tp-breadcrumb__active"><a href="index.html">Home</a></span>
                           <span class="dvdr">/</span>
                           <span>Checkout</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- breadcrumb-area-end -->


         </section>
         <!-- coupon-area end -->

         <!-- checkout-area start -->
         <section class="checkout-area pb-50">
            <div class="container">
               <form action="" method="post">
                  @csrf
                  <div class="row">
                        <div class="col-lg-6 col-md-12">
                           <div class="checkbox-form">
                              <h3>Billing Details</h3>
                              <div class="row">
                                    <div class="col-md-6">
                                       <div class="checkout-form-list">
                                          <label>Họ tên<span class="required">*</span></label>
                                          <input type="text" name="name" value="{{$auth->name}}" placeholder="">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="checkout-form-list">
                                          <label>Số ĐT<span class="required">*</span></label>
                                          <input type="text" name="phone" value="{{$auth->phone}}" placeholder="">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="checkout-form-list">
                                          <label>Email<span class="required">*</span></label>
                                          <input type="email" name="email" value="{{$auth->email}}" placeholder="">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="checkout-form-list">
                                          <label>Địa chỉ<span class="required">*</span></label>
                                          <input type="text" name="address" value="{{$auth->address}}" placeholder="">
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="country-select">
                                          <label>Country <span class="required">*</span></label>
                                          <select name="shipping_method">
                                                <option value="">Phương thức thanh toán</option>
                                                <option value="Chuyển Fast nhanh">Chuyển Fast nhanh</option>
                                                <option value="Giao hàng trực tiếp">Giao hàng trực tiếp</option>
                                          </select>
                                          <div class="nice-select" tabindex="0"><span class="current">United States</span><ul class="list"><li data-value="volvo" class="option selected">United States</li><li data-value="saab" class="option">Algeria</li><li data-value="mercedes" class="option">Canada</li><li data-value="audi" class="option">Germany</li><li data-value="audi2" class="option">England</li><li data-value="audi3" class="option">Qatar</li><li data-value="audi5" class="option">Dominican Republic</li></ul></div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="country-select">
                                          <label>Country <span class="required">*</span></label>
                                          <select name="payment_method">
                                                <option value="">Phương thức thanh toán</option>
                                                <option value="Thanh toán online">Thanh toán online</option>
                                                <option value="thanh toán khi nhận hàng">thanh toán khi nhận hàng</option>
                                          </select>
                                          <div class="nice-select" tabindex="0"><span class="current">United States</span><ul class="list"><li data-value="volvo" class="option selected">United States</li><li data-value="saab" class="option">Algeria</li><li data-value="mercedes" class="option">Canada</li><li data-value="audi" class="option">Germany</li><li data-value="audi2" class="option">England</li><li data-value="audi3" class="option">Qatar</li><li data-value="audi5" class="option">Dominican Republic</li></ul></div>
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                       <div class="checkout-form-list">
                                          <label>Ghi chú đơn hàng</label>
                                          <textarea name="order_note" class="form-control" rows="3" required="required"></textarea>
                                       </div>
                                    </div>
                              </div>
                             
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                           <div class="your-order mb-30 ">
                              <h3>Your order</h3>
                              <div class="your-order-table table-responsive">
                                    <table>
                                       <thead>
                                          <tr>
                                             <th class="product-name">Product</th>
                                             <th class="product-total">Total</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr class="cart_item">
                                                <td class="product-name">
                                                   Vestibulum suscipit <strong class="product-quantity"> × 1</strong>
                                                </td>
                                                <td class="product-total">
                                                   <span class="amount">$165.00</span>
                                                </td>
                                          </tr>
                                          <tr class="cart_item">
                                                <td class="product-name">
                                                   Vestibulum dictum magna <strong class="product-quantity"> × 1</strong>
                                                </td>
                                                <td class="product-total">
                                                   <span class="amount">$50.00</span>
                                                </td>
                                          </tr>
                                       </tbody>
                                       <tfoot>
                                          <tr class="cart-subtotal">
                                                <th>Cart Subtotal</th>
                                                <td><span class="amount">$215.00</span></td>
                                          </tr>
                                          <tr class="shipping">
                                                <th>Shipping</th>
                                                <td>
                                                   <ul>
                                                      <li>
                                                            <input type="radio" name="shipping">
                                                            <label>
                                                               Flat Rate: <span class="amount">$7.00</span>
                                                            </label>
                                                      </li>
                                                      <li>
                                                            <input type="radio" name="shipping">
                                                            <label>Free Shipping:</label>
                                                      </li>
                                                   </ul>
                                                </td>
                                          </tr>
                                          <tr class="order-total">
                                                <th>Order Total</th>
                                                <td><strong><span class="amount">$215.00</span></strong>
                                                </td>
                                          </tr>
                                       </tfoot>
                                    </table>
                              </div>
                             
                                 <div class="order-button-payment mt-20">
                                    <button type="submit" class="tp-btn tp-color-btn w-100 banner-animation">Place order</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                  </div>
               </form>
            </div>
         </section>
         <!-- checkout-area end -->

         
<!-- cart area end-->
@stop()