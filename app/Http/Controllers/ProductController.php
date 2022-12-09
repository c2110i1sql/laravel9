<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $products = Product::orderBy('id','DESC')->paginate(); // SELECT * FROM category

        if ($req->keyword) {
            $products = Product::where('name','like','%'.$req->keyword.'%')
                    ->orderBy('id','DESC')
                    ->paginate(); // SELECT * FROM products
        }

        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::orderBy('name','ASC')->get(); // SELECT * FROM category
        return view('admin.product.create', compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required|numeric|min:10000',
            'sale_price' => 'required|numeric|lte:price',
            'upload' => 'required|mimes:jpeg,jpg,png,gif'
        ]);

        $form_data = $request->only('name','price','sale_price','status','content','category_id');
        $file_name = $request->upload->getClientOriginalName();
        $request->upload->move(public_path('uploads'), $file_name);
        $form_data['image'] = $file_name;
        Product::create($form_data);
        return redirect()->route('product.index');
        // dd (public_path());
        // dd ($form_data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $cats = Category::orderBy('name','ASC')->get(); // SELECT * FROM category
        return view('admin.product.edit', compact('cats','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required|numeric|min:10000',
            'sale_price' => 'required|numeric|lte:price',
            'upload' => 'mimes:jpeg,jpg,png,gif'
        ]);

        $form_data = $request->only('name','price','sale_price','status','content','category_id');
        
        if ($request->has('upload')) {
            $file_name = $request->upload->getClientOriginalName();
            $request->upload->move(public_path('uploads'), $file_name);
            $form_data['image'] = $file_name;
        }
       
        $product->update($form_data);
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
