<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function view() {
        $products = Product::all();
        //\Log::info("acdss");
        return view("products", ["products" => $products]);
    }

    public function create() {
        return view("create");
    }

    public function store(Request $request, Product $product) {
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->imageURL = $request->image;

        $product->save();
        
        return redirect("/products");

    }
}
