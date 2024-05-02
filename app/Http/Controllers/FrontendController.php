<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;

class FrontendController extends Controller
{
    function index()
    {
        return view('frontend.index');
    }
    function s_category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        return view('frontend.s_category', compact('category'));
    }
    function product_details($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('frontend.product_details', compact('product'));
    }
    function shop()
    {
        $products = Product::all();
        return view('frontend.shop', compact('products'));
    }
    function collections()
    {
        return view('frontend.collections', [
            'collections' => Collection::latest()->get()
        ]);
    }
    function contact_us()
    {
        return view('frontend.contact_us');
    }
}
