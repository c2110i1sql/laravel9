<?php 
function link_detail($product) {
    return route('home.productDetail', ['product' => $product->id, 'slug' => Str::slug($product->name)]);
}
