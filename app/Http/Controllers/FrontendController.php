<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Collection;
use App\Models\Product;
use App\Models\Contact;
use App\Models\Tag;

class FrontendController extends Controller
{
    function index()
    {
        $products = Product::latest()->take(5)->get();
        return view('frontend.index', compact('products'));
    }
    function s_category($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $products = Product::where('category_id', $category->id)->get();
        return view('frontend.s_category', compact('category', 'products'));
    }
    function product_details($slug)
    {
        $product = Product::with(['category', 'product_tag'])->where('slug', $slug)->firstOrFail();
        return view('frontend.product_details', compact('product'));
    }
    function shop(Request $request, $per_page = 10)
    {
        if ($request->per_page) {
            $per_page = $request->per_page;
        }
        $products = Product::latest()->paginate($per_page)->withQueryString();
        // ->appends([
        //     'search' => "asd",
        //     'sort_by' => "xcvbvxcb",
        // ]);
        if ($request->sort) {
            $products = Product::orderBy('name', $request->sort)->latest()->paginate($per_page)->withQueryString();
        }
        if ($request->price) {
            return "needs to be developer";
        }
        $tags = Tag::all();
        return view('frontend.shop', compact('products', 'tags', 'per_page'));
    }
    function collections()
    {
        return view('frontend.collections', [
            'collections' => Collection::latest()->get()
        ]);
    }
    function s_collections($slug)
    {
        $collection = Collection::where('slug', $slug)->firstOrFail();
        return view('frontend.s_collections', [
            'products' => Product::where('collection_id', $collection->id)->get()
        ]);
    }
    function contact_us()
    {
        return view('frontend.contact_us');
    }
    function contact_us_post(Request $request)
    {
        Contact::create($request->except('_token') + [
            'ip_address' => $request->ip()
        ]);
        return back()->with('success', 'Message Send Successfully!');
    }
}
